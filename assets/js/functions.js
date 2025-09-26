jQuery(document).ready(function ($) {
  "use strict";
  //***************************
  // Sticky Header Function
  //***************************
  /*jQuery(window).scroll(function() {
	      if (jQuery(this).scrollTop() > 170){  
	          jQuery('body').addClass("constructit-sticky");
	      }
	      else{
	          jQuery('body').removeClass("constructit-sticky");
	      }
	  });*/
  //Update Header Style and Scroll to Top
  function headerStyle() {
    if ($(".main-header").length) {
      var windowpos = $(window).scrollTop();
      var siteHeader = $(".constructit-header");
      var scrollLink = $(".scroll-to-top");
      if (windowpos >= 250) {
        siteHeader.addClass("fixed-header");
        scrollLink.fadeIn(300);
      } else {
        siteHeader.removeClass("fixed-header");
        scrollLink.fadeOut(300);
      }
    }
  }

  headerStyle();

  // Scroll to a Specific Div
  if ($(".scroll-to-target").length) {
    $(".scroll-to-target").on("click", function () {
      var target = $(this).attr("data-target");
      // animate
      $("html, body").animate(
        {
          scrollTop: $(target).offset().top,
        },
        1000
      );
    });
  }

  //***************************
  // BannerOne Functions
  //***************************
  jQuery(".constructit-banner").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    dots: true,
    prevArrow:
      "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
    nextArrow:
      "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
    fade: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  //***************************
  // CartToggle Function
  //***************************
  jQuery(".constructit-user-list li a.constructIt-shopping-bag-1").on(
    "click",
    function () {
      jQuery(".constructit-cart-box").fadeToggle("slow");
      return false;
    }
  );
  jQuery("html").on("click", function () {
    jQuery(".constructit-cart-box").fadeOut();
  });

  //***************************
  // vehicle Functions
  //***************************
  jQuery(".constructit-partner-slider").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    dots: false,
    prevArrow:
      "<span class='slick-arrow-left'><i class='automechanic-icon automechanic-arrows32'></i></span>",
    nextArrow:
      "<span class='slick-arrow-right'><i class='automechanic-icon automechanic-arrows32'></i></span>",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  //***************************
  // ThumbSlider Functions
  //***************************
  jQuery(".constructit-testimonial").slick({
    slidesToShow: 1,
    autoplay: true,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: ".constructit-testimonial-thumb-list",
  });
  jQuery(".constructit-testimonial-thumb-list").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    asNavFor: ".constructit-testimonial",
    dots: false,
    arrows: false,
    vertical: false,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          vertical: false,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          vertical: false,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          vertical: false,
        },
      },
    ],
  });

  //***************************
  // slider Functions
  //***************************
  $(function () {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 200,
      values: [30, 100],
      slide: function (event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      },
    });
    $("#amount").val(
      "$" +
        $("#slider-range").slider("values", 0) +
        " - $" +
        $("#slider-range").slider("values", 1)
    );
  });

  //***************************
  // Progressbar Function
  //***************************
  jQuery(".progressbar1").progressBar({
    percentage: false,
    animation: true,
    backgroundColor: "#f0efee",
    barColor: "#d5ac63",
    height: "5",
  });

  //***************************
  // ThumbSlider Functions
  //***************************
  jQuery(".constructit-shop-thumb").slick({
    slidesToShow: 1,
    autoplay: true,
    slidesToScroll: 1,
    prevArrow:
      "<span class='slick-arrow-left'><i class='fa fa-angle-left'></i></span>",
    nextArrow:
      "<span class='slick-arrow-right'><i class='fa fa-angle-right'></i></span>",
    fade: true,
    asNavFor: ".constructit-shop-thumb-list",
  });
  jQuery(".constructit-shop-thumb-list").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    asNavFor: ".constructit-shop-thumb",
    dots: false,
    arrows: false,
    vertical: false,
    centerMode: false,
    focusOnSelect: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          vertical: false,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          vertical: false,
        },
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          vertical: false,
        },
      },
    ],
  });

  //***************************
  // Fancybox Function
  //***************************
  jQuery(".fancybox").fancybox({
    openEffect: "elastic",
    closeEffect: "elastic",
  });
});

// When the window has finished loading create our google map below
if (jQuery("#map").length > 0) {
  google.maps.event.addDomListener(window, "load", init);
}

function init() {
  // Basic options for a simple Google Map
  // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
  var mapOptions = {
    // How zoomed in you want the map to start at (always required)
    zoom: 11,

    // The latitude and longitude to center the map (always required)
    center: new google.maps.LatLng(40.67, -73.94), // New York

    // How you would like to style the map.
    // This is where you would paste any style found on Snazzy Maps.
    styles: [
      {
        featureType: "all",
        elementType: "labels.text.fill",
        stylers: [{ saturation: 36 }, { color: "#000000" }, { lightness: 40 }],
      },
      {
        featureType: "all",
        elementType: "labels.text.stroke",
        stylers: [
          { visibility: "on" },
          { color: "#000000" },
          { lightness: 16 },
        ],
      },
      {
        featureType: "all",
        elementType: "labels.icon",
        stylers: [{ visibility: "off" }],
      },
      {
        featureType: "administrative",
        elementType: "geometry.fill",
        stylers: [{ color: "#000000" }, { lightness: 20 }],
      },
      {
        featureType: "administrative",
        elementType: "geometry.stroke",
        stylers: [{ color: "#000000" }, { lightness: 17 }, { weight: 1.2 }],
      },
      {
        featureType: "landscape",
        elementType: "all",
        stylers: [{ visibility: "on" }],
      },
      {
        featureType: "landscape",
        elementType: "geometry",
        stylers: [{ color: "#000000" }, { lightness: 20 }],
      },
      {
        featureType: "landscape",
        elementType: "labels.icon",
        stylers: [{ saturation: "-100" }, { lightness: "-54" }],
      },
      {
        featureType: "poi",
        elementType: "all",
        stylers: [{ visibility: "on" }, { lightness: "0" }],
      },
      {
        featureType: "poi",
        elementType: "geometry",
        stylers: [{ color: "#000000" }, { lightness: 21 }],
      },
      {
        featureType: "poi",
        elementType: "labels.icon",
        stylers: [{ saturation: "-89" }, { lightness: "-55" }],
      },
      {
        featureType: "road",
        elementType: "labels.icon",
        stylers: [{ visibility: "off" }],
      },
      {
        featureType: "road.highway",
        elementType: "geometry.fill",
        stylers: [{ color: "#000000" }, { lightness: 17 }],
      },
      {
        featureType: "road.highway",
        elementType: "geometry.stroke",
        stylers: [{ color: "#000000" }, { lightness: 29 }, { weight: 0.2 }],
      },
      {
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [{ color: "#000000" }, { lightness: 18 }],
      },
      {
        featureType: "road.local",
        elementType: "geometry",
        stylers: [{ color: "#000000" }, { lightness: 16 }],
      },
      {
        featureType: "transit",
        elementType: "geometry",
        stylers: [{ color: "#000000" }, { lightness: 19 }],
      },
      {
        featureType: "transit.station",
        elementType: "labels.icon",
        stylers: [
          { visibility: "on" },
          { saturation: "-100" },
          { lightness: "-51" },
        ],
      },
      {
        featureType: "water",
        elementType: "geometry",
        stylers: [{ color: "#000000" }, { lightness: 17 }],
      },
    ],
  };

  // Get the HTML DOM element that will contain your map
  // We are using a div with id="map" seen below in the <body>
  var mapElement = document.getElementById("map");

  // Create the Google Map using our element and options defined above
  var map = new google.maps.Map(mapElement, mapOptions);

  // Let's also add a marker while we're at it
  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(40.67, -73.94),
    map: map,
    title: "Snazzy!",
  });
}

//***************************
// TOUR GRID Function
//***************************
jQuery(window).on("load", function () {
  var $grid = $(".constructit-project-filter").isotope({
    itemSelector: ".element-item",
    layoutMode: "fitRows",
  });
  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function () {
      var number = $(this).find(".number").text();
      return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function () {
      var name = $(this).find(".name").text();
      return name.match(/ium$/);
    },
  };
  // bind filter button click
  $(".filters-button-group").on("click", "a", function () {
    var filterValue = $(this).attr("data-filter");
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({ filter: filterValue });
  });
  // change is-checked class on buttons
  $(".filters-button-group").each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on("click", "a", function () {
      $buttonGroup.find(".is-checked").removeClass("is-checked");
      $(this).addClass("is-checked");
    });
  });
});

$(
  "#circle-skills-1,#circle-skills-2,#circle-skills-3,#circle-skills-4,#circle-skills-5"
).pieChart({
  animate: {
    duration: 4000,
    enabled: true,
  },
  size: 120,
  barColor: "#d5ac63",
  trackColor: "#1b1b1b",
  lineCap: "butt",
  lineWidth: 3,
  onStep: function (from, to, percent) {
    $(this.element)
      .find(".circle-skills-value")
      .text(Math.round(percent) + "%");
  },
});
$(
  "#circle-skills-6,#circle-skills-7,#circle-skills-8,#circle-skills-9"
).pieChart({
  animate: {
    duration: 4000,
    enabled: true,
  },
  size: 150,
  barColor: "#d5ac63",
  trackColor: "#323232",
  lineCap: "butt",
  lineWidth: 6,
  onStep: function (from, to, percent) {
    $(this.element)
      .find(".circle-skills-value")
      .text(Math.round(percent) + "%");
  },
});

// Multi-Toggle Navigation
$(function () {
  $("body").addClass("js");
  var $menu = $("#menu"),
    $menulink = $(".menu-link"),
    $menuTrigger = $(".has-subnav");

  $menulink.on("click", function (e) {
    e.preventDefault();
    $menulink.toggleClass("active");
    $menu.toggleClass("active");
  });

  $menuTrigger.on("click", function (e) {
    e.preventDefault();
    var $this = $(this);
    $this.toggleClass("active").next("ul").toggleClass("active");
  });
});

//***************************
// ContactForm Function
//***************************
$(".myform").on("submit", function () {
  // Add text 'loading...' right after clicking on the submit button.
  $(".output_message").text("Loading...");

  var form = $(this);
  $.ajax({
    url: form.attr("action"),
    method: form.attr("method"),
    data: form.serialize(),
    success: function (result) {
      if (result == "success") {
        $(".output_message").html(
          '<span class="success-msg"><i class="fa fa-check-circle"></i> Message Sent successfully!</span>'
        );
      } else if (result == "validate") {
        $(".output_message").html(
          '<span class="spam-error-msg"><i class="fa fa-warning"></i> You have already sent message. Try again after one hour.</span>'
        );
      } else {
        $(".output_message").html(
          '<span class="error-msg"><i class="fa fa-times-circle"></i> Error Sending email!</span>'
        );
      }
    },
  });

  // Prevents default submission of the form after clicking on the submit button.
  return false;
});

//***************************
// Pop-up Open and Close
//***************************

const openConselt = document.getElementById("openConselt");
const popup = document.getElementById("popup");
const cancelBtn = document.getElementById("cancelBtn");

// Open pop-up on div click
openConselt.addEventListener("click", () => {
  popup.style.display = "flex";
});

// Close pop-up on close button click
cancelBtn.addEventListener("click", () => {
  popup.style.display = "none";
});

// Close pop-up when clicking outside the content
window.addEventListener("click", (e) => {
  if (e.target === popup) {
    popup.style.display = "none";
  }
});

//***************************
// our_studio img
//***************************

// Array of images for navigation
const projectsImages = [
  {
    type: "image",
    src: "assets/images/studio/studio-01_wadgaon.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-02_mandavgan.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-03_amravati.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-04_nigadi.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-05_purandar.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-06_marunji.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-07_walhekarwadi.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-08_amravati.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-09_karnataka.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-10_karnataka.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-11_kalewadi.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-12_panchgani.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-13_panchgani.png",
  },
  {
    type: "image",
    src: "assets/images/studio/studio-14_panchgani.png",
  },
];

let currentIndex = 0;

// Open the modal with the specified image
function openModal(index) {
  currentIndex = index;
  const modal = document.getElementById("imageModal");
  const modalImage = document.getElementById("modalImage");

  modalImage.style.opacity = "0";

  setTimeout(() => {
    modalImage.src = projectsImages[currentIndex].src;
    modalImage.style.opacity = "1";
  }, 300);

  modal.style.display = "block";
}

// Close the modal
function closeModal() {
  const modal = document.getElementById("imageModal");
  modal.style.display = "none";
}

// Change the image (Next/Previous)
function changeImage(direction) {
  currentIndex += direction;

  // Wrap around if at the start or end of the array
  if (currentIndex < 0) {
    currentIndex = projectsImages.length - 1;
  } else if (currentIndex >= projectsImages.length) {
    currentIndex = 0;
  }

  const modalImage = document.getElementById("modalImage");
  modalImage.style.opacity = "0";

  setTimeout(() => {
    modalImage.src = projectsImages[currentIndex].src;
    modalImage.style.opacity = "1";
  }, 300);
}
