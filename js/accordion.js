
const titles = document.querySelectorAll('.title');

titles.forEach(title => {
  title.addEventListener('click', () => {
    title.parentNode.classList.toggle('appear');
  });
});
