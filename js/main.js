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








