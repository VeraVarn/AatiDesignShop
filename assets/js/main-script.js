// FONT OBSERVER

const font = new FontFaceObserver("Termina", {
  weight: 400,
});

font.load().then(function () {
  document.body.classList.add("font-loaded");
});

// CURRENT YEAR

document.addEventListener("DOMContentLoaded", function () {
  var year = new Date().getFullYear();
  document.getElementById("year").textContent = year;
});

// STICKY NAV

const sectionHeroEl = document.querySelector(".section-hero");

const observer = new IntersectionObserver(
  function (entries) {
    const ent = entries[0];
    console.log(ent);
    if (!ent.isIntersecting) {
      document.body.classList.add("sticky");
    }

    if (ent.isIntersecting) {
      document.body.classList.remove("sticky");
    }
  },

  {
    root: null,
    threshold: 0,
    rootMargin: "-65px",
  }
);
observer.observe(sectionHeroEl);

// ICON GATCHER

/* const ajax = new XMLHttpRequest();
ajax.open("GET", "assets/icons/sprite.svg", true);
ajax.send();
ajax.onload = function () {
  const div = document.createElement("div");
  div.className = "svgSprite";
  div.innerHTML = ajax.responseText;
  document.body.insertBefore(div, document.body.childNodes[0]);
}; */
