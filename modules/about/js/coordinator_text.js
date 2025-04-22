
document.addEventListener('DOMContentLoaded', () => {
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1 // Trigger when 10% of the element is in view
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-in'); // Add class when in view
        observer.unobserve(entry.target); // Stop observing once it has been animated
      }
    });
  }, options);

  // Target all content elements
  const contentElements = document.querySelectorAll('.content');
  contentElements.forEach(content => {
    observer.observe(content); // Observe each content element
  });
});
