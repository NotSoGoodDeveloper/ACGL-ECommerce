// jQuery to collapse the navbar on scroll
function collapseNavbar() {
  if ($(".navbar").offset().top > 50) {
    $(".navbar-fixed-top").addClass("top-nav-collapse");
  } else {
    $(".navbar-fixed-top").removeClass("top-nav-collapse");
  }
}

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
  $('a.page-scroll').bind('click', function(event) {
    var $anchor = $(this);
  $('html, body').stop().animate({
    scrollTop: $($anchor.attr('href')).offset().top
  }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
  $(".navbar-collapse").collapse('hide');
});

$(window).scroll(collapseNavbar);

$(document).ready(function() {
  $("#product-container").load("action/shop-product-load.php");

  $("#product-container").on("click", ".btn-cart", function() {
    var prodId = $(this).data("id");
    $.getJSON("action/get-user-id.php", function(data) {
      $.ajax({
        url: "action/shop-add-cart.php?id_user=" + data + "&id_products=" + prodId,
        method: "get"
      });
    });

  });

});
