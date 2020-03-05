//Video Youtube link source
const video_list = [
  "https://www.youtube.com/embed/V3krKm2OkZI",
  "https://www.youtube.com/embed/eDp-PzVY3og",
  "https://www.youtube.com/embed/qRE0WicGz4I",
  "https://www.youtube.com/embed/rDX6aGfIBhs", 
  "https://www.youtube.com/embed/V3krKm2OkZI",
  "https://www.youtube.com/embed/eDp-PzVY3og",
  "https://www.youtube.com/embed/qRE0WicGz4I",
  "https://www.youtube.com/embed/rDX6aGfIBhs",
  "https://www.youtube.com/embed/qRE0WicGz4I",
  "https://www.youtube.com/embed/rDX6aGfIBhs",
]


$(document).ready(function () {

  //sidebar 
  let closeButton = $(".close");
  let closeIcon = $(".plus");
  let sidebar_ul = $("#container");
  let sidebarBullet = $("#container li")
  let menuList = $(".menuList");
  let desktop_side = $(".desktop_side");
  let header = $(".sidebar header");
  let module_content = $($(".module_content"));
  let video_src = $(".video_item iframe");
  let init1 = true;

  //Module video change function
  for (let i = 0; i < sidebarBullet.length; i++) {
    $(sidebarBullet[i]).click(() => {
     video_src.attr("src", video_list[i])
    });
  }

  //button collapse events
  $(closeButton).click(() => {
    if (init1) {
      (sidebar_ul).css({ "width": "400px", "margin-top": "0px", "background-color": "white" });
      menuList.css("display", "flex");
      $(desktop_side).toggle();
      $(sidebarBullet).css("width", "400px");
      $(header).css({ "width": "400px", "position": "relative" });
      $(closeIcon).css("transform", "rotate(135deg)");
      module_content.css({ "display": "flex", "color": "gray" })
      return init1 = false;
    }
    else {
      (sidebar_ul).css({ "width": "50px", "background-color": "transparent" });
      menuList.css("display", "none");
      desktop_side.toggle();
      $(sidebarBullet).css("width", "50px");
      $(header).css("width", "100px");
      $(closeIcon).css("transform", "rotate(180deg)");
      module_content.css("display", "none")

      return init1 = true;

    }

  })

  // menuList hover effect
  for (let i = 0; i < 8; i++) {
    $(sidebarBullet[i]).mouseenter(() => {
      if (init1) {
        (sidebar_ul).css("width", "400px");
        $(sidebarBullet[i]).css("width", "400px");
        $(module_content[i]).css({ "display": "flex", "width": "auto", "transition": "color 2s" })
      }
      else {
        null
      }

    })
    $(sidebarBullet[i]).mouseleave(() => {
      if (!init1) {
        (sidebar_ul).css("width", "400px");
      } else {
        (sidebar_ul).css("width", "50px");
        $(module_content[i]).css("display", "none");
        $(sidebarBullet[i]).css("width", "50px");

      }

    })

  }

  //accordion
  let angleIcon = $(".fa-angle-down");
  let accordion_head = $(".lead");
  let init = $(angleIcon).hasClass("fa-angle-down")
  for (let i = 0; i < accordion_head.length; i++) {
    $(accordion_head[i]).click(() => {
      $(accordion_head[i]).next().slideToggle(300);
      if (init == true) {
        $(angleIcon[i]).removeClass("fa-angle-down").addClass("fa-angle-up");
        init = false;
        return init;
      } else {
        $(angleIcon[i]).addClass("fa-angle-down").removeClass("fa-angle-up");
        init = true;
        return init;

      }

    })
  }

  // Fixed notes on the side
  $(accordion_head[0]).click(() => {

    if (window.innerWidth > 1200) {
      let a = $(".notes").css("width");
      let icon1 = $(".icon i");
      if (a !== "500px") {
        $(".notes").css("width", "500px");
        $(".icon").removeClass("icon1");
        if (icon1.hasClass("fa-list")) {
          icon1.removeClass("fa-list").addClass("fa-times-circle")
        }
      }

      else {
        $(".notes").css("width", "auto");
        $(".icon").addClass("icon1"); icon1.removeClass("fa-times-circle").addClass("fa-list")

      }
    }
  });


  //module nav
  document.onscroll = function () {
    if (window.innerHeight + window.scrollY > document.body.clientHeight - 100) {
      $(".module_nav").css("display", "none");
    }
    else {
      $(".module_nav").css("display", "flex");
    }
  }

  // ends here
});