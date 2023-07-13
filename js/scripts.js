const button1 = document.querySelector('.btn-rotate-1');
const button2 = document.querySelector('.btn-rotate-2');
const button3 = document.querySelector('.btn-rotate-3');

button1.addEventListener('click', function() {
  this.classList.toggle('rotate');
});

button2.addEventListener('click', function() {
  this.classList.toggle('rotate');
});

button3.addEventListener('click', function() {
  this.classList.toggle('rotate');
});

