// jQuery to collapse the navbar on scroll
function collapseNavbar() {
  if ($(".navbar").offset().top > 50) {
    $(".navbar-fixed-top").addClass("top-nav-collapse");
  } else {
    $(".navbar-fixed-top").removeClass("top-nav-collapse");
  }
}

// prompt
function promptModal(title, content) {
  // change title
  $("#prompt-modal").modal();
  $("#prompt-modal .modal-title").text(title);
  $("#prompt-modal .modal-body-text").text(content);
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
        method: "get",
        dataType: "json",
        success: function(data) {
          if (data == 1) {
            promptModal("Success", "Item is added to cart.");
          } else if (data == 2) {
            promptModal("Error", "Item is already added to cart.");
          }
        }
      }); // END: ajax
    }); // END: getJSON
  }); // END: product-container

}); // END: document.read
