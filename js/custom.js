$(document).ready(function() {
  // add class to footer link
  $(".menu-sidebar-container > ul").addClass("list-unstyled mb-0");
  $(".menu-sidebar-container > ul > li").addClass("mb-2");
  $(".menu-sidebar-container > ul > li > a").addClass(
    "link-light text-capitalize text-sm"
  );

  // add class to sidebar
  $(".sidebar > ul").addClass("list-group");
  $(".sidebar > ul > li").addClass("list-group-item");
  $(".sidebar > ul > li > a").addClass("d-block link-red");

  /*adds active class to the 1st child for banner slider*/
  $(".carousel-inner")
    .find(".carousel-item:first")
    .addClass("active");

  /*adds hover effect to thumbnails*/
  $(".hover-image").hover(doThis, doThis);
  function doThis() {
    var $this = $(this);
    $this.toggleClass("opacity70");
  }

  // Animation
  $(".slide-from-right")
    .css("opacity", 0)
    .viewportChecker({
      classToAdd: "animated fadeInRight",
      offset: "30%"
    });
  $(".slide-from-left")
    .css("opacity", 0)
    .viewportChecker({
      classToAdd: "animated fadeInLeft",
      offset: "30%"
    });
  $(".fade-in")
    .css("opacity", 0)
    .viewportChecker({
      classToAdd: "animated fadeInUp",
      offset: "30%"
    });

  // scroll to section
  $(document).on("click", "a.page-scroll", function(event) {
    var $anchor = $(this);
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $($anchor.attr("href")).offset().top
        },
        2000,
        "easeInOutExpo"
      );
    event.preventDefault();
  });

  // Show/hide scroll to top button
  window.onscroll = function() {
    scrollFunction();
  };
  function scrollFunction() {
    if (
      document.body.scrollTop > 99 ||
      document.documentElement.scrollTop > 99
    ) {
      $(".scroll-to-top").addClass("d-block");
    } else {
      $(".scroll-to-top").removeClass("d-block");
    }
  }

  //fix ie BUG on fixed-background CSS
  if (navigator.userAgent.match(/Trident\/7\./)) {
    // if IE
    $("body").on("mousewheel", function() {
      // remove default behavior
      event.preventDefault();

      //scroll without smoothing
      var wheelDelta = event.wheelDelta;
      var currentScrollPosition = window.pageYOffset;
      window.scrollTo(0, currentScrollPosition - wheelDelta);
    });
  }
});
