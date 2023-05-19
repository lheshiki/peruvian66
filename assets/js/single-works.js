// single-works.js
// switching images when clicking pictures
const targets = document.querySelectorAll(".works-img-list li img");
const mainVisual = document.querySelector(".js-mainVisual");
for (const target of targets) {
  target.addEventListener("click",(e) => {
    let changeImgSrc = e.target.getAttribute("src");
    mainVisual.src = changeImgSrc;
  })
}

// changing color of global navigation;
let navTarget = document.querySelector(".works-container");
let navItems = document.querySelectorAll('.nav-item');
window.addEventListener('scroll',function () {
  let pageY = window.pageYOffset;
  let targetY = navTarget.getBoundingClientRect().top + pageY;
  if(pageY + 16 > targetY){
    navItems.forEach(navItem =>{
      navItem.classList.add('on');
    });
  } else{
    navItems.forEach(navItem =>{
      navItem.classList.remove('on');
    });
  }
});