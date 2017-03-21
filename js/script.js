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

// check if passwords match
function isPasswordValid() {
    var isValid = false;
    if ($("#sign-up-password").val() == $("#sign-up-confirm-password").val()) {
      isValid = true;
    } else {
      isValid = false;
    }
    return isValid;
}

// prompt error
function promptErrorModal(title, content) {
  console.log("prompt!!!");
  // change title
  $("#error-modal").modal();
  $("#error-modal .modal-title").text(title);
  $("#error-modal .modal-body-text").text(content);
}

// shake
function shake(element){
  var interval = 100;
  var distance = 10;
  var times = 4;

  $(element).css('position','relative');
  for (var iter = 0; iter<(times+1); iter++) {
    $(element).animate({
      left:((iter % 2 == 0 ? distance : distance *- 1))
    }, interval);
  }
  $(element).animate({ left: 0}, interval);
}

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
          promptErrorModal("Error Sign In", "Please try again...");
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

  // sign up form
  $("#sign-up-form").submit(function(event) {
    event.preventDefault();
    // prevent execution if password is invalid
    if (!isPasswordValid()) {
      shake($("#sign-up-pass-prompt"));
      return;
    }

    // close popup
    $('#sign-up-modal').modal("hide");

    $.ajax({
      url: "lib/action/sign-up-action.php",
      method: "post",
      dataType: "json",
      data: $("#sign-form").serialize(),
      success: function(data) {

        if (data) {
          // open login page
          window.location = "lib/user.php";
        } else {
          // show error
          promptErrorModal("Error Sign In", "Please try again...");
        }
      }
    });
  }); // END sign form submit

  $("#sign-up-confirm-password, #sign-up-password").on("input", function(event){
    if (isPasswordValid()
      || $("#sign-up-confirm-password").val() == ""
      || $("#sign-up-password").val() == "") {
      $("#sign-up-pass-prompt").hide();
    } else {
      $("#sign-up-pass-prompt").show();
    }
  });

}); // END document ready
