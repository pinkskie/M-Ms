window.$ = window.jQuery = require('jquery');
require('remodal');

const faqs = document.querySelectorAll('.faq')
let winner_yellow = document.querySelector('#table_yellow')
let winner_red = document.querySelector('#table_red')
let table_head = document.querySelector('.table_head')

console.log(table_head)
console.log(winner_yellow)
console.log(winner_red)

winner_yellow.addEventListener('click', () => {
    winner_red.classList.add('active')
    table_head.classList.add('yellow')
    table_head.classList.remove('red')
    winner_yellow.classList.remove('active')
})
winner_red.addEventListener('click', () => {
    winner_yellow.classList.add('active')
    table_head.classList.add('red')
    table_head.classList.remove('yellow')
    winner_red.classList.remove('active')
})
faqs.forEach(faq => {
  faq.addEventListener('click', () => {
    faq.classList.toggle('active');
  });
});
