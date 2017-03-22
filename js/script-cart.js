// jQuery to collapse the navbar on scroll
function collapseNavbar() {
  if ($(".navbar").offset().top > 50) {
    $(".navbar-fixed-top").addClass("top-nav-collapse");
  } else {
    $(".navbar-fixed-top").removeClass("top-nav-collapse");
  }
}

// load cart
function loadCart() {
  $.getJSON("action/get-user-id.php", function(data) {
    $("#view-cart-container").load("action/view-cart-load.php?id_user=" + data);
  });
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
  loadCart();

  $("#view-cart-container").on("click", ".btn-remove", function() {
    var prodId = $(this).data("prod");
    $.ajax({
      url: "action/delete-cart.php?id_products=" + prodId,
      method: "get",
      success: function() {
        loadCart();
      }
    });
  });

});
