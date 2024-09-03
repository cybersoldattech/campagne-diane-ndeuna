// Sélectionnez l'élément à animer
const animateMe = document.getElementById('animate-me');
const toAnimate = document.querySelectorAll('.toAnimate');
const toAnimate_2 = document.querySelector('.toAnimate_2');
function animateOnScroll() {
    if (animateMe.getBoundingClientRect().top < window.innerHeight) {
        toAnimate.forEach((element) => {
            element.classList.add('animate-jump-in', 'animate-once');
        });
        toAnimate_2.classList.add(' animate-fade-left' ,  'animate-once' ,  'animate-duration-[2000ms]' ,  'animate-ease-in');
    }
}

// Ajoutez un événement de défilement à la fenêtre
window.addEventListener('scroll', animateOnScroll);