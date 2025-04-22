document.addEventListener('DOMContentLoaded', function() {
    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('loaded');
                observer.unobserve(entry.target); // Stop observing once it's animated
            }
        });
    }

    const observer = new IntersectionObserver(handleIntersection, {
        threshold: 0.1
    });

    const slideElements = document.querySelectorAll('.slide-left, .slide-right');

    slideElements.forEach(element => observer.observe(element));
});
