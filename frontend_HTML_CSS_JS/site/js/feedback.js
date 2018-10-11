class Feedback {
  constructor(source, container = '.feedback-flex') {
    this.container = container;
    this.source = source;
    this._init(this.source);
  }

  _init(source) {
    fetch(source)
      .then(result => result.json())
      .then(data => {
        for (let item of data) {
          this._render(item);
        }

      })
  }

  _render(item) {
    let $itemContainer = $(`<div/>`, {
      class: "feedback-item"
    });
    let $itemContainerText = $(`<div/>`, {
      class: "text"
    });
    let $itemContainerTextAuthor = $(`<p/>`, {
      class: "author",
      html: item.author
    });
    let $itemContainerTextDate = $(`<span/>`, {
      class: "date",
      html: item.date
    });
    let $itemContainerTextText = $(`<p/>`, {
      class: "text",
      html: item.text
    });
    let $accept = $(`<i class="fas fa-check"></i>`);

    $itemContainerTextAuthor.append($itemContainerTextDate);
    $itemContainerText.append($itemContainerTextAuthor);
    $itemContainerText.append($itemContainerTextText);
    $itemContainer.append($itemContainerText);


    if (item.accepted === 0) {
      $itemContainer.append($accept);
    }

    $(this.container).append($itemContainer);


  }


}