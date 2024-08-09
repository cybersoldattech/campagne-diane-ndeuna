// Sélectionnez l'élément à animer
const animateMe = document.getElementById('animate-me');
const toAnimate = document.querySelectorAll('.toAnimate');
const toAnimate_2 = document.querySelector('.toAnimate_2');
function animateOnScroll() {
    if (animateMe.getBoundingClientRect().top < window.innerHeight) {
        toAnimate.forEach((element) => {
            element.classList.add('animate-shake', 'animate-duration-[6000ms]', 'animate-ease-in');
        });
        toAnimate_2.classList.add('animate-jump', 'animate-duration-[4000ms]', 'animate-ease-in');
    }
}

// Ajoutez un événement de défilement à la fenêtre
window.addEventListener('scroll', animateOnScroll);