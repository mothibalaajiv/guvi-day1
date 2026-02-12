// Scroll animation
const faders = document.querySelectorAll('.fade-in');

const appearOptions = {
    threshold: 0.2
};

const appearOnScroll = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});

// Dynamic stat loading
document.addEventListener("DOMContentLoaded", function() {
    let avgElement = document.getElementById("avg");
    let average = 58.0; // Approx Test Average
    avgElement.innerText = average + "+";
});
