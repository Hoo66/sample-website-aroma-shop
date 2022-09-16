const openBtn = document.querySelector('.openbtn');
const gNav = document.getElementById('g-nav');
const gNavA = document.querySelector('#g-nav a');

const toggleActive = () => {
  openBtn.classList.toggle('active');
  gNav.classList.toggle('panelactive')
}
const removeActive = () => {
  openBtn.classList.remove('active');
  gNav.classList.remove('panelactive');
}

openBtn.addEventListener('click', toggleActive);
gNavA.addEventListener('click', removeActive);
