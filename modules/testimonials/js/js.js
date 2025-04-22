$(document).ready(function() {
    // Array of donor images and names
    const donors = [
        { name: "Dante", img: "./global/images/0.1.jpg" },
        { name: "Sophia", img: "./global/images/0.2.jpg" },
        { name: "Liam", img: "./global/images/0.3.jpg" },
        { name: "Olivia", img: "./global/images/0.jpg" },
        { name: "Ethan", img: "./global/images/0.2.jpg" }
    ];

    let currentIndex = 0;
    const $donorImage = $("#donorImage");
    const $donorName = $("#donorName");

    // Preload images
    $.each(donors, function(index, donor) {
        const img = new Image();
        img.src = donor.img;
    });

    function changeDonor() {
        $donorImage.css("opacity", 0); // Fade out current image
        $donorName.css("opacity", 0);  // Fade out current name

        setTimeout(function() {
            $donorImage.attr("src", donors[currentIndex].img);
            $donorName.text(donors[currentIndex].name);

            $donorImage.css("opacity", 1); // Fade in new image
            $donorName.css("opacity", 1);  // Fade in new name
        }, 1000); // Delay to match fade-out time

        currentIndex = (currentIndex + 1) % donors.length;
    }

    setInterval(changeDonor, 6000); // 6 seconds for each cycle

    // jQuery for pausing the row-loop animation
    $('.row-loop').on('click', '.image-card, .content-card', function() {
        $(this).closest('.row-loop').toggleClass('paused');
    });

    // Optional: Resume animation when the mouse leaves the container
    $('.row-loop').on('mouseleave', function() {
        $(this).removeClass('paused');
    });
});
