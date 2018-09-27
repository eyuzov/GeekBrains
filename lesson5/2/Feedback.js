class Feedback {
  constructor(source, container = '#feed') {
    this.source = source;
    this.container = container;
    this._init(this.source);
    this.feedArr = [];
  }

  _render() {

    let frame = $('<div class="feedback-body"></div>');
    let author = $('<span class="author"></span>');
    let content = $('<p class="feedback-content"></p>');
    frame.append($(author));
    frame.append($(content));

    frame.appendTo($(this.container));

  }

  _renderRow(rec) {
    let frame = $(`<div class="feedback-body" data-id=${rec.id} ></div>`);
    let author = $(`<span class="author">${rec.author}</span>`);
    let content = $(`<p class="feedback-content">${rec.text}</p>`);
    let removeBtn = $(`<input type="button" value="REMOVE" data-id=${rec.id} id="remove-btn">`);
    frame.append($(author));
    frame.append($(content));
    frame.append($(removeBtn));
    $(this.container).prepend($(frame));
    $('#remove-btn').on('click', (e) => this._removeFeedback(e));
    console.log(this.feedArr);
  };

  _removeFeedback(e) {
    this.feedArr.splice(e.target.dataset.id,1);
    // $('[data-id='+id+']')
    let remDiv = $(`[data-id=${e.target.dataset.id}]`);
    remDiv.remove();
    console.log($(`[data-id=${e.target.dataset.id}]`));
    console.log(this.feedArr);
  }

  _addFeedback(e) {
    let newRow = {
      "id": this.feedArr.length,
      "author": $('#for-name')[0].value,
      "text": $('#for-text')[0].value,
    };
    this.feedArr.push(newRow);
    this._renderRow(newRow);
    console.log(newRow);
  }

  _init(source) {

    fetch(source)
      .then(result => result.json())
      .then(data => {
        for (let rec of data) {
          let newRow = {
            "id": this.feedArr.length,
            "author": rec.author,
            "text": rec.text,
          };
          this.feedArr.push(newRow);
          this._renderRow(newRow);
        }

      });

    let form = $('<form class="form"></form>');
    let newAuthor = $('<input type="text" id="for-name">');
    let newContent = $('<input type="text" id="for-text">');
    let addBtn = $('<input type="button" value="ADD" id="add-btn">');
    $(this.container).append('<hr>');
    form.append('Введите ваше имя');
    form.append(newAuthor);
    form.append('Введите текст сообщения');
    form.append(newContent);
    form.append(addBtn);
    form.appendTo($(this.container));
    $('#add-btn').on('click', (e) => this._addFeedback(e));

  }
}