class Carousel {
  constructor(container) {
    this.container = container;
    this.arr = ['carousel0', 'carousel1', 'carousel2', 'carousel3', 'carousel4', 'carousel5', 'carousel6','carousel7','carousel8'];
    this.center = Math.floor(this.arr.length/2);
    this._init(this.container);
  }

  _init(container) {
    for (let item of this.arr) {
      $(container).append($('<div/>', {
        id: `${item}`,
        class: 'carousel',
        text: `${item}`,
        'data-id': this.arr.indexOf(item)
      }));
    }
    let cl = $(container).children()[`${this.center}`].id;
    let prevCl = $(container).children()[[`${this.center-1}`]].id;

    if (this.arr.length%2 === 0){
      $(`#${cl}`).addClass('center');
      $(`#${prevCl}`).addClass('center');
    } else {
      $(`#${cl}`).addClass('center');
    }

    $('.fa-angle-double-left').click((e) => {
      this._changeCarousel(e);
    });
    $('.fa-angle-double-right').click((e) => {
      this._changeCarousel(e);
    });
  }

  _changeCarousel(e) {
    if (e.target.id === 'left') {
      let item = this.arr.shift();
      this.arr.push(item);
      $(`#${item}`).remove();

      let cl = $(this.container).children()[`${this.center}`].id;
      let prevCl = $(this.container).children()[[`${this.center-1}`]].id;

      let removeCl = $(this.container).children()[[`${this.center-1}`]].id;
      let removePrevCl = $(this.container).children()[[`${this.center-2}`]].id;

      if (this.arr.length%2 === 0) {

        $(`#${removeCl}`).removeClass('center');
        $(`#${removePrevCl}`).removeClass('center');

        $(`#${cl}`).addClass('center');
        $(`#${prevCl}`).addClass('center');
      } else {
        $(`#${cl}`).addClass('center');
        $(`#${removeCl}`).removeClass('center');
      }

      $(this.container).append($('<div/>', {
        id: `${item}`,
        class: 'carousel',
        text: `${item}`
      }));

    } else if (e.target.id === 'right') {
      let item = this.arr.pop();
      this.arr.unshift(item);
      $(`#${item}`).remove();

      let cl = $(this.container).children()[`${this.center-1}`].id;
      let prevCl = $(this.container).children()[[`${this.center-2}`]].id;

      let removeCl = $(this.container).children()[[`${this.center}`]].id;
      let removePrevCl = $(this.container).children()[[`${this.center+1}`]].id;


      if (this.arr.length%2 === 0) {
        $(`#${cl}`).addClass('center');
        $(`#${prevCl}`).addClass('center');

        $(`#${removeCl}`).removeClass('center');
        $(`#${removePrevCl}`).removeClass('center');
      } else {
        $(`#${cl}`).addClass('center');
        $(`#${removeCl}`).removeClass('center');
      }

      $(this.container).prepend($('<div/>', {
        id: `${item}`,
        class: 'carousel',
        text: `${item}`
      }));
    }
  }
}