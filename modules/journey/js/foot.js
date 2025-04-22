document.addEventListener('scroll', function() {
    const milestones = document.querySelectorAll('.milestone');
    const windowHeight = window.innerHeight;

    milestones.forEach(milestone => {
        const rect = milestone.getBoundingClientRect();
        if (rect.top < windowHeight - 100) {
            milestone.classList.add('active');
        } else {
            milestone.classList.remove('active');
        }
    });
});
