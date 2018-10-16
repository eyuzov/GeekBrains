"use strict";

class Init {
  constructor() {
    this._init();
  }

  _init() {

    let $copy = new Copyright();
    let $slider = new Slider();
    let $buy = new Buy();

    $('.proceed,.checkout').on('click', () => {
      location.href = 'checkout.html';
    });
    $('.to-cart').on('click', () => {
      location.href = 'shopping_cart.html';
    });

    $('.hover').draggable({revert: true, opacity: 0.5});

    $('.cart-hover').droppable({
      accept: $('.hover'),
      classes: {
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: (event, ui) => {
        $buy._addProduct(ui.draggable);
      }
    });
    $('.add_flex').on('click', 'a', (e) => {

      let $product = $(`.hover[data-id=${e.target.dataset.id}]`);

      $buy._addProduct($product);

    });
  }
}

class Slider {
  constructor() {
    this._init();
  }

  _init() {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 500,
      values: [52, 400],
      slide: function (event, ui) {
        $("#amount-start").val(`$ ${0 + ui.values[0]}`);
        $("#amount-end").val(`$ ${0 + ui.values[1]}`);
      }
    });
    $("#amount-start").val("$ " + $("#slider-range").slider("values", 0));
    $("#amount-end").val("$ " + $("#slider-range").slider("values", 1));
  }
}

class Copyright {
  constructor() {
    this._render();
  }

  _render() {
    let $year = new Date().getFullYear();
    let $a = $(`<h6>&copy; ${$year} Brand All Rights Reserved.</h6>`);
    $('.copy').append($a);
  }
}

class Cart {
  constructor(source = '../products.json', container = '.table') {
    this.source = source;
    this.container = container;
    this.amount = 0;
    this.id = 0;
    this.cartArray = [];
    this.total = 0;
    this._init(this.source);
  }

  _init(source) {

    if (sessionStorage.length > 0) {
      let $restoredSession = JSON.parse(sessionStorage.getItem('cart'));
      for (let item of $restoredSession) {
        this.cartArray.push(item);
        console.log(this.cartArray);
      }
    }

    fetch(source)
      .then(result => result.json())
      .then(data => {
        for (let product of data) {
          let find = this.cartArray.find(cartItem => cartItem.id === product.id);
          if (find) {
            this._changeArr(find, product.quantity);
          } else {
            this.cartArray.push(product);
            this._render(this.cartArray);
          }
        }
      })
  }

  _changeArr(item, quantity) {
    item.quantity += quantity;
    this._render(this.cartArray);
  }

  _remove(item) {
    let find = this.cartArray.find(cartItem => cartItem.id === $(item).data('itemid'));
    if (find.quantity > 1) {
      find.quantity--;
      this.total -= find.price;

      $('#quant')[0].value = find.quantity;
      $('#subtotal').html(`${find.quantity * find.price}`);
      $('.all-total').html(`$ ${this.total.toFixed(2)}`);
    } else {
      this.total -= find.price;
      if (this.total < 0) {
        this.total = (this.total * 0) + 0;
      }
      let $tr = $(document).find(`tr[data-itemid="${$(item).data('itemid')}"]`);
      $('.all-total').html(`$ ${(this.total).toFixed(2)}`);
      this.cartArray.splice(this.cartArray.indexOf(find), 1);

      $tr.remove();
    }
  }

  _render(arr) {
    for (let product of arr) {
      this._renderItem(product);
    }
  }

  _renderItem(product) {

    let $row = $(`<tr/>`, {
      class: "head",
      "data-itemid": product.id
    });
    let $td1 = $(`<td/>`, {
      class: "product"
    });
    let $td1Div = $(`<div/>`, {
      class: "product-view"
    });
    let $td1DivA = $(`<a/>`, {
      href: "product.html",
    });
    let $td1DivAImg = $(`<img/>`, {
      class: "preview",
      alt: "preview",
      src: `${product.src}`
    });
    let $td1DivADiv = $(`<div/>`, {
      class: "prod-desc",
      html: `<h3>Mango People T-shirt</h3><p>Color: <span>${product.color}</span>\n
            <br>Size: <span>${product.size}</span></p>`
    });

    let $td2 = $(`<td/>`, {
      class: "other other-details",
      html: `$ ${product.price}`,
      id: "price"
    });
    let $td3 = $(`<td/>`, {
      class: "other other-details"
    });

    let $td3Input = $(`<input/>`, {
      type: "text",
      class: "quant",
      id: "quant",
      value: product.quantity
    });

    let $td4 = $(`<td/>`, {
      class: "other other-details",
      html: product.ship
    });
    let $td5 = $(`<td/>`, {
      class: "other other-details",
      id: "subtotal",
      html: `$ ${(product.price * product.quantity).toFixed(2)}`
    });


    let $td6 = $(`<td/>`, {
      class: "other other-details",
      html: `<i class="fas fa-times-circle" data-itemid=${product.id}></i>`,

    });

    $td6.on('click', 'i', (e) => {

      this._remove(e.target);

    });

    $td1.append($td1Div);
    $td1Div.append($td1DivA);
    $td1DivA.append($td1DivAImg);
    $td1DivA.append($td1DivADiv);

    $td3.append($td3Input);

    $row.append($td1);
    $row.append($td2);
    $row.append($td3);
    $row.append($td4);
    $row.append($td5);
    $row.append($td6);
    $(this.container).append($row);
    this.total += product.price * product.quantity;
    $('.all-total').html(`$ ${this.total.toFixed(2)}`);
    console.log(this.total);
  }

}

class Buy {
  constructor(container = '.cart-flex') {
    this.container = container;
    this.productArray = [];
    this.amount = 0;
  }

  _remove(item) {

    let productId = +$(item).data('cartitemid');
    let find = this.productArray.find(productArr => productArr.id === productId);

    if (find.quantity > 1) {
      find.quantity--;
      this._updateCart(find);
    } else {
      let div = $(document).find(`div[data-cartitemid="${$(item).data('cartitemid')}"]`);
      div.remove();
      this.productArray.splice(this.productArray.indexOf(find), 1);
    }
    this.amount -= find.price;
    this._renderCart(this.amount);


  }

  _addProduct(product) {

    let productId = +$(product).data('id');
    let find = this.productArray.find(productArr => productArr.id === productId);
    if (find) {
      find.quantity++;
      this.amount += find.price;
      this._updateCart(find);
    } else {
      let cartItem = {
        id: +$(product).data('id'),
        src: $(product).data('img'),
        name: $(product).data('name'),
        color: 'Red',
        size: 'XXL',
        price: parseFloat($(product).data('price')),
        quantity: 1,
        ship: 0
      };

      this.amount += cartItem.price;
      this.productArray.push(cartItem);

      this._render(this.container, cartItem);
    }
    this._renderCart(this.amount);

    sessionStorage.setItem('cart', JSON.stringify(this.productArray));
  }

  _updateCart(product) {
    let $container = $(document).find(`div[data-cartitemid="${product.id}"]`);
    $container.find('.span').text(`${product.quantity} x ${product.price}`);
  }

  _renderCart(amount) {
    $('#cart-sum').text(`$${amount.toFixed(2)}`);
  }

  _render(container, product) {

    let $itemContainer = $(`<div/>`, {
      class: 'item-parent',
      'data-cartItemId': product.id
    });

    let $itemDivImg = $(`<div/>`, {
      class: 'item-img'
    });
    let $itemImg = $(`<img/>`, {
      src: product.src
    });

    let $itemDesc = $(`<div/>`, {
      class: 'item-desc',
    });
    let $itemDescP = $('<p/>', {
      text: product.name
    });
    let $itemDescSpan = $('<span/>', {
      class: 'span',
      text: `${product.quantity} x $${product.price}`
    });

    let $itemDel = $(`<div/>`, {
      class: 'item-del',
      html: `<i class="fas fa-times-circle" data-cartItemId=${product.id}></i>`,

    });
    $itemDel.on('click', 'i', (e) => {
      this._remove(e.target)
    });

    $itemDivImg.append($itemImg);
    $itemContainer.append($itemDivImg);

    $itemDesc.append($itemDescP);
    $itemDesc.append($itemDescSpan);
    $itemContainer.append($itemDesc);

    $itemContainer.append($itemDel);

    $(container).prepend($itemContainer);

  }


}