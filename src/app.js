const ratio = .1
const options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio,
};

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible')
                // observer.unobserve(entry.target)

                + [];
        }
        else {
            entry.target.classList.remove('reveal-visible')
            // observer.unobserve(entry.target)
        }
    });
}

const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('[class*="reveal-"]').forEach(function (r) {
    observer.observe(r)
})

// script sur le button burger
const menuBtn = document.getElementById('menu-btn');
const menu = document.getElementById('menu');

menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
});

document.getElementById('scrollTop').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('top').scrollIntoView({ behavior: 'smooth' });
});

//animation de mes cards

// Sélectionne toutes les cartes
const cards = document.querySelectorAll(".card");

cards.forEach((card) => {
    // Animation au survol de la carte
    card.addEventListener("mouseenter", () => {
        // Applique l'effet sur la carte sélectionnée
        gsap.to(card, {
            scale: 1.2,
            zIndex: 10,
            boxShadow: "0 10px 20px rgba(0, 0, 0, 0.3)",
            duration: 0.3
        });

        // Applique un effet aux autres cartes pour les mettre en arrière
        cards.forEach((otherCard) => {
            if (otherCard !== card) {
                gsap.to(otherCard, {
                    scale: 0.9,
                    opacity: 0.6,
                    zIndex: 1,
                    duration: 0.3
                });
            }
        });
    });

    // Rétablir les styles à la sortie de la carte
    card.addEventListener("mouseleave", () => {
        gsap.to(card, {
            scale: 1,
            zIndex: 1,
            boxShadow: "0 4px 8px rgba(0, 0, 0, 0.2)",
            duration: 0.3
        });

        // Rétablir les styles pour les autres cartes
        cards.forEach((otherCard) => {
            if (otherCard !== card) {
                gsap.to(otherCard, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.3
                });
            }
        });
    });
});


//split le nom sur l'accueil

// Sélectionne le texte du nom
const nameText = document.querySelector(".name");
const name = "Rebecca Tshika."; // Texte complet à afficher

// Cache le texte au départ
nameText.innerHTML = "";

// Fonction d'écriture progressive
let index = 0;
function writeName() {
    if (index < name.length) {
        nameText.innerHTML += name[index]; // Ajoute un caractère à la fois
        index++;
        // Répète l'animation toutes les 0.1 seconde
        gsap.delayedCall(0.1, writeName);
    } else {
        // Après avoir écrit le nom en entier, réinitialise pour recommencer
        gsap.delayedCall(1, resetAndRepeat); // Pause de 1 seconde avant de répéter
    }
}

// Fonction pour réinitialiser et relancer l'animation
function resetAndRepeat() {
    nameText.innerHTML = ""; // Réinitialise le texte
    index = 0; // Réinitialise l'index
    writeName(); // Relance l'animation
}


// Lance l'animation
writeName();



// carrousel temoignages

var swiper = new Swiper(".centered-slide-carousel", {
    centeredSlides: true,
    paginationClickable: true,
    loop: true,
    spaceBetween: 30,
    slideToClickedSlide: true,
    pagination: {
        el: ".centered-slide-carousel .swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1920: {
            slidesPerView: 4,
            spaceBetween: 30
        },
        1028: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        990: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    }
});
