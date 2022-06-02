$(document).ready(function() {
    var zindex = 10;
    $(".tour-card").click(function(e) {
        e.preventDefault();
        var isShowing = false;
        if ($(this).hasClass("show")) {
            isShowing = true
        }
  
        if ($(".tours-cards").hasClass("showing")) {
            // a card is already in view
            $("div.tour-card.show")
            .removeClass("show");
  
        if (isShowing) {
            // this card was showing - reset the grid
            $(".tours-cards")
                .removeClass("showing");
        } else {
          // this card isn't showing - get in with it
          $(this)
            .css({zIndex: zindex})
            .addClass("show");
  
        }
  
        zindex++;
  
      } else {
        // no cards in view
        $(".tours-cards")
          .addClass("showing");
        $(this)
          .css({zIndex:zindex})
          .addClass("show");
  
        zindex++;
      }
      
    });
})

// to-top-button function

toTopBtn = document.getElementById("toTopBtn");
window.onscroll = function() { scrollFunction(); };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        toTopBtn.style.display = "block";
    } else {
        toTopBtn.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


let switchMode = document.getElementById('switchMode');

switchMode.onclick = function () {
    let theme = document.getElementById('theme');
    let path = './css/';
    let mode;
    if (theme.getAttribute('href') == (path + 'light-mode.css')) {
        theme.href = path + 'dark-mode.css';
        mode = 'dark';
        switchMode.setAttribute('class', 'btn-moon');
        
    } else {
        theme.href = path + 'light-mode.css';
        mode = 'light';
        switchMode.setAttribute('class', 'btn-sun');
    }


    document.cookie = 'theme=' + mode;
    

}

// Top-menu func
function resizeMenu() {
    var x = document.getElementById("topMenu");
    if (x.className === "top-menu") {
        x.className += " responsive";
    } else {
        x.className = "top-menu";
    }
}
/*
var modal = document.getElementById("myModal");
var btn = document.getElementById("article-btn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

*/



/*
let tourHistory = document.getElementById("tourHistorical");
tourHistory.onclick = function() {
    let tourCards = document.querySelectorAll('div.tour-card:not(historical)');
    for (let i = 0; i < tourCards.length; i++) {
        tourCards[i].style.display == 'none' ? tourCards[i].style.display = '' : tourCards[i].style.display = 'none';
    }
}

function TourFilterCards(elemId, excClass) {
    let elem = document.getElementById(elemId);
    elem.onclick = function() {
        let tourCards = document.querySelectorAll(`div.tour-card:not(${excClass})`);
        tourCards[i].style.display == 'none' ? tourCards[i].style.display = '' : tourCards[i].style.display = 'none';
    }
}

*/

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("main-slider__slide");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" main-slider__active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " main-slider__active";
    captionText.innerHTML = dots[slideIndex-1].alt;
};












