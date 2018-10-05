"use strict";

class Copyright {
  constructor() {
    this._render();
  }

  _render() {
    let year = new Date().getFullYear();
    let text = document.getElementById('year');
    text.innerHTML = `&copy; ${year} Brand All Rights Reserved.`;
  }
}