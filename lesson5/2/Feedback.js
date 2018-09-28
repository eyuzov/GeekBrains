class Feedback {
  constructor(source, container = '#feed') {
    this.source = source;
    this.container = container;
    this._init(this.source);
    this.feedArr = [];
    this.id = 0;
  }

  _renderRow(rec) {
    let frame = $(`<div class="feedback-body" data-id=${rec.id} ></div>`);
    let author = $(`<p class="author">${rec.author}</p>`);

    let divContent = $(`<div class="feedback-content" data-contentId=${rec.id}></div>`);
    let divApprDeny = $(`<div class="content-approve"></div>`);
    let approve = $(`<i class="far fa-thumbs-up" id="fa-thumbs-up-${rec.id}" data-id=${rec.id}></i>`);
    let deny = $(`<i class="far fa-thumbs-down"  id="fa-thumbs-down-${rec.id}" data-id=${rec.id}></i>`);
    let content = $(`<p class="content">${rec.text}</p>`);
    let removeBtn = $(`<input type="button" value="REMOVE" data-id=${rec.id} id="remove-btn">`);
    frame.append($(author));
    frame.append($(divApprDeny));
    divApprDeny.append($(approve));
    divApprDeny.append($(deny));
    divContent.append($(divApprDeny));
    divContent.append($(content));
    divContent.append($(removeBtn));
    frame.append($(divContent));
    $(this.container).prepend($(frame));
    $('#remove-btn').on('click', (e) => this._removeFeedback(e));

    $(`#fa-thumbs-up-${rec.id}`).click((e) => {
      $(`[data-contentId=${+e.target.dataset.id}]`).removeClass('deny');
      $(`[data-contentId=${+e.target.dataset.id}]`).toggleClass('approved');
    });
    $(`#fa-thumbs-down-${rec.id}`).click((e) => {
      $(`[data-contentId=${+e.target.dataset.id}]`).removeClass('approved');
      $(`[data-contentId=${+e.target.dataset.id}]`).toggleClass('deny');
    });
  }

  _removeFeedback(e) {
    let splice = this.feedArr.indexOf(this.feedArr.find(res => res.id === +e.target.dataset.id));
    this.feedArr.splice(splice, 1);
    let remDiv = $(`[data-id=${e.target.dataset.id}]`);
    remDiv.remove();
  }

  _addFeedback() {
    $('#for-text').removeClass('warning-border');
    $('#for-name').removeClass('warning-border');
    $('.warning').hide();
    if ($('#for-name')[0].value === '' && $('#for-text')[0].value === '') {
      $('.warning').text('Заполните Ваше Имя и Текст Сообщения');
      $('#for-name').addClass('warning-border');
      $('#for-text').addClass('warning-border');
      $('.warning').show();
      return;
    }else if ($('#for-name')[0].value === '') {
      $('.warning').text('Заполните Ваше Имя');
      $('#for-name').addClass('warning-border');
      $('.warning').show();
      return;
    } else if ($('#for-text')[0].value === '') {
      $('.warning').text('Заполните текст сообщения');
      $('#for-text').addClass('warning-border');
      $('.warning').show();
      return;
    }

    let newRow = {
      "id": this.id,
      "author": $('#for-name')[0].value,
      "text": $('#for-text')[0].value,
    };
    this.id += 1;
    this.feedArr.push(newRow);
    this._renderRow(newRow);
    $('#for-name')[0].value = $('#for-text')[0].value = '';
  }

  _init(source) {

    fetch(source)
      .then(result => result.json())
      .then(data => {
        for (let rec of data) {
          let newRow = {
            "id": this.id,
            "author": rec.author,
            "text": rec.text,
          };
          this.id += 1;
          this.feedArr.push(newRow);
          this._renderRow(newRow);
        }
      });

    let form = $('<form class="form"></form>');
    let newAuthor = $('<input type="text" id="for-name">');
    let warning = $('<p/>', {class: 'warning'});
    let newContent = $('<input type="text" id="for-text">');
    let addBtn = $('<input type="button" value="ADD" id="add-btn">');
    $(this.container).append('<hr>');
    form.append(warning);
    form.append('Введите ваше имя');
    form.append(newAuthor);
    $(warning).hide();
    form.append('Введите текст сообщения');
    form.append(newContent);
    form.append(addBtn);
    form.appendTo($(this.container));

    $('#add-btn').on('click', () => this._addFeedback());
  }

}