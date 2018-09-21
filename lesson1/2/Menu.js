class Menu {
  constructor(id, className, items) {
    this.id = id;
    this.className = className;
    this.items = items;
  }

  render() {
    let result = `<ul class="${this.className}" id="${this.id}">`;
    for (let i = 0; i < this.items.length; i++) {
      if (this.items[i] instanceof MenuItem) {
        result += this.items[i].renderItem();
      } else if (this.items[i] instanceof subMenu){
        result += this.items[i].renderSubMenu();
      }
    }
    result += '</ul>';
    return result;
  }
}