let slideIndex = 0;
let slideshowTimeout;
let slideshowContainer = document.querySelector(".slideshow-container");

showSlides();

function plusSlides(n) {
  clearTimeout(slideshowTimeout);
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  clearTimeout(slideshowTimeout);
  showSlides((slideIndex = n - 1));
}

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";

  // Ganti gambar setiap 5 detik, kecuali jika ada hover
  slideshowTimeout = setTimeout(showSlides, 5000);
}

// Tambahkan event listener untuk menghentikan slideshow saat hover
slideshowContainer.addEventListener("mouseenter", () => {
  clearTimeout(slideshowTimeout);
});

slideshowContainer.addEventListener("mouseleave", () => {
  showSlides();
});


$(document).ready(function () {
  $(".buttons").click(function () {
    $(this).addClass("active").siblings().removeClass("active");

    var filter = $(this).attr("data-filter");

    if (filter == "all") {
      $(".image").show(400);
    } else {
      $(".image")
        .not("." + filter)
        .hide(200);
      $(".image")
        .filter("." + filter)
        .show(400);
    }
  });

  $(".gallery").magnificPopup({
    delegate: "a",
    type: "image",
    gallery: {
      enabled: true,
    },
  });
});

$(document).ready(function () {
  $(".filter-item").click(function () {
    const value = $(this).attr("data-filter");

    // Toggle active-filter class on clicked item
    $(this).addClass("active-filter").siblings().removeClass("active-filter");

    if (value == "all") {
      $(".text-Itinerary").show();
    } else {
      $(".text-Itinerary").hide().filter("." + value).show();
    }
  });
});

// function togglePopup() {
//   document.getElementById("popupForm").style.display = "block";
// }
// function closeForm() {
//   document.getElementById("popupForm").style.display = "none";
// }
// window.onclick = function (event) {
//   let modal = document.getElementById('popupForm');
//   if (event.target == modal) {
//     closeForm();
//   }
// }







