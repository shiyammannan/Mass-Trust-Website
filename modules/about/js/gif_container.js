document.addEventListener("DOMContentLoaded", function () {
  // Function to check if an element is in view
  function isInView(element) {
      if (!element) return false;
      const rect = element.getBoundingClientRect();
      return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
  }

  // Function to add the fade-in class
  function handleScroll() {
      const headings = document.querySelector('.gif_containers_headings');
      const cards = document.querySelectorAll('.cards');
      
      if (headings && isInView(headings)) {
          headings.classList.add('fade-in');
      }

      if (cards.length > 0) {
          cards.forEach(card => {
              if (isInView(card)) {
                  card.classList.add('fade-in');
              }
          });
      }
  }

  // Add scroll event listener
  window.addEventListener('scroll', handleScroll);

  // Run handleScroll on page load
  handleScroll();
});
