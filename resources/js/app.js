window.$ = window.jQuery = require('jquery');
require('remodal');

const faqs = document.querySelectorAll('.faq')
let winner_yellow = document.querySelector('.yellow')
let winner_red = document.querySelector('.red')
console.log(winner_yellow)

winner_yellow = addEventListener('click', () => {
    winner_yellow.classList.add('active')
    winner_red.classList.remove('active')
})
winner_red = addEventListener('click', () => {
    winner_red.classList.add('active')
    winner_yellow.classList.remove('active')
})
faqs.forEach(faq => {
  faq.addEventListener('click', () => {
    faq.classList.toggle('active');
  });
});
