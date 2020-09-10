$(document).ready(function() {
    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');
    const slides = document.querySelectorAll('.slide');

    let index = 0;
    display(index);

    function display(index) {
        slides.forEach((slide) => {
            slide.style.display = 'none';
        });
        slides[index].style.display = 'flex';
    }

    function nextSlide() {
        index++;
        if (index > slides.length - 1) {
            index = 0;
        }
        display(index);
    }

    function prevSlide() {
        index--;
        if (index < 0) {
            index = slides.length - 1;
        }
        display(index);
    }

    next.addEventListener('click', nextSlide);
    prev.addEventListener('click', prevSlide);

    $(function() {
        /**
         * Smooth scrolling to page anchor on click
         **/
        $("a[href*='#']:not([href='#'])").click(function() {
            if (
                location.hostname == this.hostname &&
                this.pathname.replace(/^\//, "") == location.pathname.replace(/^\//, "")
            ) {
                var anchor = $(this.hash);
                anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) + "]");
                if (anchor.length) {
                    $("html, body").animate({ scrollTop: anchor.offset().top }, 1500);
                }
            }
        });
    });
});