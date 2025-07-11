document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu toggle
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navMenu = document.querySelector('.nav-menu');

    hamburgerMenu.addEventListener('click', function () {
        navMenu.classList.toggle('active');
        hamburgerMenu.classList.toggle('active');
    });

    // Scroll effect for navbar
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.style.backgroundColor = 'rgba(15, 15, 26, 0.95)';
            navbar.style.padding = '10px 2rem';
        } else {
            navbar.style.backgroundColor = 'rgba(15, 15, 26, 0)';
            navbar.style.padding = '15px 2rem';
        }
    });

    // Content row scrolling with mouse drag
    const contentRows = document.querySelectorAll('.content-row');

    contentRows.forEach(row => {
        let isDown = false;
        let startX;
        let scrollLeft;

        row.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - row.offsetLeft;
            scrollLeft = row.scrollLeft;
            row.style.cursor = 'grabbing';
        });

        row.addEventListener('mouseleave', () => {
            isDown = false;
            row.style.cursor = 'grab';
        });

        row.addEventListener('mouseup', () => {
            isDown = false;
            row.style.cursor = 'grab';
        });

        row.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - row.offsetLeft;
            const walk = (x - startX) * 2;
            row.scrollLeft = scrollLeft - walk;
        });
    });

    // Card hover effect
    const contentCards = document.querySelectorAll('.content-card');

    contentCards.forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.zIndex = '10';
        });

        card.addEventListener('mouseleave', function () {
            this.style.zIndex = '1';
        });
    });

    // Simulate loading content
    function simulateLoading() {
        const loadingSections = document.querySelectorAll('.content-section');

        loadingSections.forEach(section => {
            section.style.opacity = '0';
        });

        setTimeout(() => {
            loadingSections.forEach(section => {
                section.style.transition = 'opacity 0.5s ease';
                section.style.opacity = '1';
            });
        }, 300);
    }

    simulateLoading();
});


// swiper hero
document.addEventListener('DOMContentLoaded', function () {
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    const heroSwiper = new Swiper('.heroSwiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect: 'fade',
        speed: 1000,
        grabCursor: true,

        // Autoplay
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },

        // Pagination
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // Scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false,
            draggable: true,
        },

        // Fade effect
        fadeEffect: {
            crossFade: true
        },

        on: {
            autoplayTimeLeft(s, time, progress) {
                progressCircle.style.setProperty("--progress", 1 - progress);
                progressContent.textContent = `${Math.ceil(time / 1000)}s`;
            }
        }
    });

    // Pause autoplay on hover
    heroSwiper.el.addEventListener('mouseenter', function () {
        heroSwiper.autoplay.stop();
    });

    heroSwiper.el.addEventListener('mouseleave', function () {
        heroSwiper.autoplay.start();
    });
});


// description page
