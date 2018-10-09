class Buy {
  constructor(/*product,*/ container = '.cart-flex') {
    // this.product = product;
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
        img: $(product).data('img'),
        name: $(product).data('name'),
        price: parseFloat($(product).data('price')),
        quantity: 1
      };
      this.amount += cartItem.price;
      this.productArray.push(cartItem);
      this._render(this.container, cartItem);
    }
    this._renderCart(this.amount);
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
      src: product.img
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