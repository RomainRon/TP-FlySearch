document.addEventListener("DOMContentLoaded", function() {
    const carousels = document.querySelectorAll(".carousel");

    carousels.forEach(carousel => {
        const track = carousel.querySelector(".carousel__track");
        const slides = Array.from(track.children);
        const nextButton = carousel.querySelector(".carousel__button--right");
        const prevButton = carousel.querySelector(".carousel__button--left");
        const dotsNav = carousel.querySelector(".carousel__nav");
        const dots = Array.from(dotsNav.children);

        const slideWidth = slides[0].getBoundingClientRect().width;
        const setSlidePosition = (slide, index) => {
            slide.style.left = slideWidth * index + "px";
        };
        slides.forEach(setSlidePosition);

        const moveToSlide = (currentSlide, targetSlide) => {
            track.style.transform = "translateX(-" + targetSlide.style.left + ")";
            currentSlide.classList.remove("current-slide");
            targetSlide.classList.add("current-slide");
        };

        const hideShowArrows = (prevButton, nextButton, targetIndex) => {
            if (targetIndex === 0) {
                prevButton.classList.add("is-hidden");
                nextButton.classList.remove("is-hidden");
            } else if (targetIndex === slides.length - 1) {
                prevButton.classList.remove("is-hidden");
                nextButton.classList.add("is-hidden");
            } else {
                prevButton.classList.remove("is-hidden");
                nextButton.classList.remove("is-hidden");
            }
        };

        const updateDots = (currentDot, targetDot) => {
            currentDot.classList.remove("current-slide");
            targetDot.classList.add("current-slide");
        };

        nextButton.addEventListener("click", (e) => {
            const currentSlide = carousel.querySelector(".current-slide");
            const nextSlide = currentSlide.nextElementSibling;
            const currentDot = dotsNav.querySelector(".current-slide");
            const nextDot = currentDot.nextElementSibling;
            const nextIndex = slides.findIndex((slide) => slide === nextSlide);
            moveToSlide(currentSlide, nextSlide);
            updateDots(currentDot, nextDot);
            hideShowArrows(prevButton, nextButton, nextIndex);
        });

        prevButton.addEventListener("click", (e) => {
            const currentSlide = carousel.querySelector(".current-slide");
            const prevSlide = currentSlide.previousElementSibling;
            const currentDot = dotsNav.querySelector(".current-slide");
            const prevDot = currentDot.previousElementSibling;
            const prevIndex = slides.findIndex((slide) => slide === prevSlide);
            moveToSlide(currentSlide, prevSlide);
            updateDots(currentDot, prevDot);
            hideShowArrows(prevButton, nextButton, prevIndex);
        });

        dotsNav.addEventListener("click", (e) => {
            const targetDot = e.target.closest("button");
            if (!targetDot) return;
            const currentSlide = carousel.querySelector(".current-slide");
            const currentDot = dotsNav.querySelector(".current-slide");
            const targetIndex = dots.findIndex((dot) => dot === targetDot);
            const targetSlide = slides[targetIndex];
            moveToSlide(currentSlide, targetSlide);
            updateDots(currentDot, targetDot);
            hideShowArrows(prevButton, nextButton, targetIndex);
        });
    });
});