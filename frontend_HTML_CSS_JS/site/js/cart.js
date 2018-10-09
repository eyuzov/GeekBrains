class Cart {
  constructor(source = '../products.json', container = '.table') {
    this.source = source;
    this.container = container;
    this.amount = 0;
    this.id = 0;
    this._init(this.source);
  }

  _init(source) {

    let $restoredSession = JSON.parse(sessionStorage.getItem('cart'));
    this._renderItem($restoredSession);

    fetch(source)
      .then(result => result.json())
      .then(data => {
        for (let product of data) {
          this._renderItem(product);
        }
      })
  }

  _remove(item) {
    let $tr = $(document).find(`tr[data-itemid="${$(item).data('itemid')}"]`);
    $tr.remove();
  }

  _renderItem(product) {

    let $item = $(document).find(`tr[data-itemid="${product.id}"]`);
    if ($item.length > 0) {
      console.log($($item).children([4]).text());
    } else {


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
        html: product.price
      });
      let $td3 = $(`<td/>`, {
        class: "other other-details"
      });

      let $td3Input = $(`<input/>`, {
        type: "text",
        class: "quant",
        value: product.quantity
      });

      let $td4 = $(`<td/>`, {
        class: "other other-details",
        html: product.ship
      });
      let $td5 = $(`<td/>`, {
        class: "other other-details",
        html: `${product.price * product.quantity}`
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

    }

  }
}