let itemSlideIndex = 1;
itemShowSlides(itemSlideIndex);

// Next/previous controls
function itemPlusSlides(n) {
    itemShowSlides(itemSlideIndex += n);
}

// Thumbnail image controls
function itemCurrentSlide(n) {
    itemShowSlides(itemSlideIndex = n);
}

function itemShowSlides(n) {
    let i;
    let slides = document.getElementsByClassName("item-slider__slide");
    let dots = document.getElementsByClassName("item-demo");
    let captionText = document.getElementById("item-caption");
    if (n > slides.length) {itemSlideIndex = 1}
    if (n < 1) {itemSlideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" item-active", "");
    }
    slides[itemSlideIndex-1].style.display = "block";
    dots[itemSlideIndex-1].className += " item-active";
    //captionText.innerHTML = dots[itemSlideIndex-1].alt;
}