class subMenu extends Menu {
  constructor(id, className, items) {
    super(id, className);
    this.items = items;
  }

  renderSubMenu() {
    let result = `<ul class="${this.className}" id="${this.id}">`;
    for (let i = 0; i < this.items.length; i++) {
      if (this.items[i] instanceof MenuItem) {
        result += this.items[i].renderItem();
      }
    }
    result += '</ul>';
    return result;
  }
}