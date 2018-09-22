//Пробовал написать сам после просмотра урока с разбором спустя 6 часов по памяти, пытаясь понять смысл
class SubMenu extends Menu {
  constructor(href, title, id, className, items) {
    super(id, className, items);
    this.href = href;
    this.title = title;
  }

  render() {
    return `<li><a href="${this.href}">${this.title}</a>${this.renderSub()}</li>`
  }

  renderSub() {
    let result = `<ul class="${this.className}" id="${this.id}">`;
    for (let i = 0; i < this.items.length; i++) {
      if (this.items[i] instanceof MenuItem || this.items[i] instanceof SubMenu) {
        result += this.items[i].render();
      }
    }
    result += '</ul>';
    return result;
  }
}