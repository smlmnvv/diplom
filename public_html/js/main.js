let burgerBtn = document.querySelector('.burger');
let nav = document.querySelector('.nav__ul');

burgerBtn.addEventListener('click', () => {
    nav.classList.toggle('active');
    document.body.classList.toggle('block');
});