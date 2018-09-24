class Validate {
  constructor(username, phone, mail) {
    this.username = username;
    this.phone = phone;
    this.mail = mail;
  }

  render(res) {
    let mess = document.getElementById('mess');
    mess.innerHTML = '';
    this.username.classList.remove('red-border');
    this.phone.classList.remove('red-border');
    this.mail.classList.remove('red-border');

    switch (res) {
      case 1:
        this.username.classList.add('red-border');
        mess.innerHTML = 'Поле Your name должно содержать только буквы.';
        break;
      case 2:
        this.phone.classList.add('red-border');
        mess.innerHTML = 'Поле Your phone должно иметь формат +7(000)000-0000.';
        break;
      case 3:
        this.username.classList.add('red-border');
        this.phone.classList.add('red-border');
        mess.innerHTML = 'Поле Your name должно содержать только буквы и \n'+
          'поле Your phone должно иметь формат +7(000)000-0000.';
        break;
      case 4:
        this.mail.classList.add('red-border');
        mess.innerHTML = 'Поле Your mail должно выглядеть как \n' +
          'mymail@mail.ru, или my.mail@mail.ru, или my-mail@mail.ru или \n' +
          'mymail@mail.com, или my.mail@mail.com, или my-mail@mail.com';
        break;
      case 5:
        this.username.classList.add('red-border');
        this.mail.classList.add('red-border');
        mess.innerHTML = 'Поле Your name должно содержать только буквы и \n' +
          'поле Your mail должно выглядеть как \n' +
          'mymail@mail.ru, или my.mail@mail.ru, или my-mail@mail.ru или \n' +
          'mymail@mail.com, или my.mail@mail.com, или my-mail@mail.com';
        break;
      case 6:
        this.phone.classList.add('red-border');
        this.mail.classList.add('red-border');
        mess.innerHTML = 'Поле Your phone должно иметь формат +7(000)000-0000 и \n' +
          'поле Your mail должно выглядеть как \n' +
          'mymail@mail.ru, или my.mail@mail.ru, или my-mail@mail.ru или \n' +
          'mymail@mail.com, или my.mail@mail.com, или my-mail@mail.com';
        break;
      case 7:
        this.username.classList.add('red-border');
        this.phone.classList.add('red-border');
        this.mail.classList.add('red-border');
        mess.innerHTML = 'Поле Your name должно содержать только буквы, \n' +
          'поле Your phone должно иметь формат +7(000)000-0000 и \n' +
          'поле Your mail должно выглядеть как \n' +
          'mymail@mail.ru, или my.mail@mail.ru, или my-mail@mail.ru или \n' +
          'mymail@mail.com, или my.mail@mail.com, или my-mail@mail.com';
        break;
      default:
        mess.innerHTML = 'Форма заполнена корректно.';
    }
  }

  init() {

    let userName = this.username.value;
    let phone = this.phone.value;
    let mail = this.mail.value;

    let res = this._validateName(userName) + this._validatePhone(phone) + this._validateMail(mail);
    this.render(res);
  }

  _validateName(userName) {
    return /^[a-zа-я\-]{1,30}$/i.test(userName) ? 0 : 1;

  }

  _validatePhone(phone) {

    return /^\+\d\(\d{3}\)\d{3}-\d{4}$/i.test(phone) ? 0 : 2;
  }

  _validateMail(mail) {

    return /^\w{2}[.\-]?\w{4}@\w{4}\.(ru|com)$/i.test(mail) ? 0 : 4;
  }
}