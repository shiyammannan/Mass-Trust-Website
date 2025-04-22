$(document).ready(function() {
    const $images = $('.images img');
    const $popup = $('#imagePopup');
    const $popupImage = $('#popupImage');
    const $popupParagraph = $('#popupParagraph');
    const $close = $('#close');
    const $prev = $('#prev');
    const $next = $('#next');
    let currentIndex = 0;

    const imageElements = $images.toArray();

    // Function to show the popup
    function showPopup(index) {
        const img = $(imageElements[index]);
        const paragraph = img.parent().data('paragraph');
        $popup.show();
        $popupImage.attr('src', img.attr('src'));
        $popupImage.attr('alt', img.attr('alt'));
        $popupParagraph.text(paragraph);
        currentIndex = index;
    }

    // Attach click event to each image
    $images.each(function(index) {
        $(this).on('click', function() {
            showPopup(index);
        });
    });

    // Close the popup when the close button is clicked
    $close.on('click', function() {
        $popup.hide();
    });

    // Close the popup when clicking outside the popup content
    $(window).on('click', function(event) {
        if ($(event.target).is($popup)) {
            $popup.hide();
        }
    });

    // Function to show the previous image
    function showPrev() {
        currentIndex = (currentIndex - 1 + imageElements.length) % imageElements.length;
        showPopup(currentIndex);
    }

    // Function to show the next image
    function showNext() {
        currentIndex = (currentIndex + 1) % imageElements.length;
        showPopup(currentIndex);
    }

    // Attach click events to navigation buttons
    $prev.on('click', showPrev);
    $next.on('click', showNext);
});
