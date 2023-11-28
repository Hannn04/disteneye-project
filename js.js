let formBtn = document.querySelector('#pesan');
let pesanForm = document.querySelector('.checkout');
let formClose = document.querySelector('#back');

formBtn.addEventListener('click', () => {
  pesanForm.classList.add('active');
});

formClose.addEventListener('click', () => {
  pesanForm.classList.remove('active');
});