document.addEventListener('DOMContentLoaded', function () {
  const container = document.querySelector('.card-container');
  const prevButton = document.querySelector('.prev-slide');
  const nextButton = document.querySelector('.next-slide');

  // Card width and gap (including padding, border, etc.)
  const cardWidth = document.querySelector('.card').offsetWidth + 20; // 20px is the gap

  nextButton.addEventListener('click', () => {
    container.scrollBy({ left: cardWidth, behavior: 'smooth' });
  });

  prevButton.addEventListener('click', () => {
    container.scrollBy({ left: -cardWidth, behavior: 'smooth' });
  });
});
