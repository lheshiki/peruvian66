// single-works.js
const targets = document.querySelectorAll(".works-img-list li img");
const mainVisual = document.querySelector(".js-mainVisual");
for (const target of targets) {
  target.addEventListener("click",(e) => {
    let changeImgSrc = e.target.getAttribute("src");
    mainVisual.src = changeImgSrc;
  })
}