// documents_card_components.js
function expandCard(clickedCard) {
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        if (card === clickedCard) {
            card.classList.add('expanded');
        } else {
            card.classList.remove('expanded');
        }
    });
}

// Ensure the first card is active on page load
document.addEventListener('DOMContentLoaded', () => {
    const firstCard = document.querySelector('.card');
    if (firstCard) {
        firstCard.classList.add('expanded');
    }
});
