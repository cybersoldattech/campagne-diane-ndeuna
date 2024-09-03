function openModal() {
    document.getElementById('large-modal').classList.toggle('hidden');
}

const imageWrappers = document.querySelectorAll('.image-wrapper');

imageWrappers.forEach(wrapper => {
  wrapper.addEventListener('click', () => {
    wrapper.classList.toggle('enlarged');
    alert("click");
  });
});