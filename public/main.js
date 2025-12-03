
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})



// Get all the FAQ buttons
const faqButtons = document.querySelectorAll('.faq-btn');

// Add event listeners to each FAQ button
faqButtons.forEach(button => {
    button.addEventListener('click', () => {
        const content = button.nextElementSibling; // Get the content of the clicked FAQ

        // If the content is already open, close it
        if (content.style.display === 'block') {
            content.style.display = 'none';
        } else {
            // Close all FAQ contents
            const allContents = document.querySelectorAll('.faq-content');
            allContents.forEach(item => {
                item.style.display = 'none';
            });

            // Open the clicked FAQ content
            content.style.display = 'block';
        }
    });
});

