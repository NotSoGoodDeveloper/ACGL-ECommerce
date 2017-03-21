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
  collapseNavbar();

  // sign in show modal
  $("#sign-btn").click(function() {

    $("#sign-modal").modal({
      backdrop: 'static',
      keyboard: false
    });
  });

  // sign in form
  $("#sign-form").submit(function(event) {
    event.preventDefault();
    // close popup
    $('#sign-modal').modal("hide");

    $.ajax({
      url: "lib/action/sign-action.php",
      method: "post",
      dataType: "json",
      data: $("#sign-form").serialize(),
      success: function(data) {

        if (data) {
          // open login page
          window.location = "lib/user.php";
        } else {
          // show error
          $("#sign-error-modal").modal();
        }
      }
    });
  }); // END sign form submit

  // sign up show modal
  $("#sign-up-btn").click(function(event) {
    event.preventDefault();
    $("#sign-up-modal").modal({
      backdrop: 'static',
      keyboard: false
    });
  });

}); // END document ready
