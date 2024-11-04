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
