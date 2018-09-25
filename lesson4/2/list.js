class List {
  constructor(list) {
    this.list = list;
  }

  renderList() {
    fetch('city.json')
      .then(result => {
        return result.json();
      })
      .then(data => {
        for (let i in data) {
          this.list.innerHTML += `<option>${data[i].city}</option>`;
        }

      })

  }

}