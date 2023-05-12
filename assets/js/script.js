

// import smoothscroll from "smoothscroll-polyfill";

// kick off the polyfill!
// smoothscroll.polyfill();
// 今現在の色
let nowColor = "";
document.addEventListener("click", e => {
  const target = e.target;
  // clickした要素がclass属性、js-smooth-scrollを含まない場合は処理を中断
  if (!target.classList.contains("js-smooth-scroll")) return;
  e.preventDefault();
  const targetId = target.hash;
 
  const targetElement = document.querySelector(targetId);
  // 画面上部から要素までの距離
  const rectTop = targetElement.getBoundingClientRect().top;
  // 現在のスクロール距離
  const offsetTop = window.pageYOffset;
  // スクロール位置に持たせるバッファ
  const buffer = 50;
  const top = rectTop + offsetTop - buffer;

  window.scrollTo({
    top,
    behavior: "smooth"
  });
});

// Header font-color change
let skillsSec = document.querySelector('#skills');
let contactSec = document.querySelector('#contact');
let mediaSec = document.querySelector("#media");
let navItems = document.querySelectorAll('.nav-item');
window.addEventListener('scroll',function () {
  let pageY = window.pageYOffset;
  let skillsY = skillsSec.getBoundingClientRect().top + pageY;
  let mediaY = mediaSec.getBoundingClientRect().top + pageY;
  if(pageY + 16 > mediaY){
    navItems.forEach(navItem =>{
      navItem.classList.remove('on');
    });
  }else if (pageY + 16 > skillsY) {
    navItems.forEach(navItem =>{
      navItem.classList.add('on');
    });
  } else{
    navItems.forEach(navItem =>{
      navItem.classList.remove('on');
    });
  }
});


// declaration of the windowHeight
let windowHeight = window.innerHeight;

// skill-bar animation
// skill-bar percentage function
function showScore(score,target){
  let maxNum = score;
  let count = 0;
  let time = 2000 / score;
  let barPercentage = setInterval(() => {
    count++;
    target.textContent = count;
    if (count == maxNum) {
      this.clearInterval(barPercentage);
    }
  }, time);
}

let skillBars = document.querySelectorAll('.js-skill-bar');
let skillPoints = document.querySelectorAll('.skill-point');

// obtain all the scores from HTML
let skillScores = [];
skillPoints.forEach(skillPoint => {
   let skillScore = Number(skillPoint.getAttribute('data-point'));
   skillScores.push(skillScore);
});

let skillContainer = document.querySelector('.skill-container');

window.addEventListener('scroll',function () {
  let skillBarY = document.querySelector('.js-skill-bar-Y').getBoundingClientRect().top + window.pageYOffset;
  let pageY =  window.pageYOffset;
  if (skillBarY < pageY + windowHeight) {
    if (!skillContainer.classList.contains('activated')) {
      for(i=0; i<skillPoints.length; i++){
        skillBars[i].classList.add('on');
        document.querySelectorAll('.skill-bar-score')[i].style.width = `${skillScores[i]}%`;
        document.querySelectorAll('.skill-bar-score')[i].style.backgroundColor = nowColor;
        showScore(skillScores[i],skillPoints[i]);
      };
      skillContainer.classList.add('activated');
    }
  }
});

// change the background color after scrolling
let triggerElements = document.querySelectorAll('.js-changeColor');
let changeTarget = document.querySelector('.bg');
let loadingTarget = document.querySelector('.layer');
let topBtn = document.querySelector('.top-btn');
let topBtnLine = document.querySelector(".top-btn-line");
window.addEventListener("scroll",function () {
  let positions = getPositions(triggerElements);
  let pageY = window.pageYOffset;
  switch (true) {
    case pageY + windowHeight > positions[3]:
      changeTarget.style.backgroundColor = "rgb(101, 191, 149)";
      changeTarget.style.color = "rgb(101, 191, 149)";
      loadingTarget.style.backgroundColor = "rgb(101, 191, 149)";
      nowColor = "rgb(101, 191, 149)";
      for (const skillBar of document.querySelectorAll('.skill-bar-score')) {
        skillBar.style.backgroundColor = nowColor;
      }
      topBtnLine.style.borderTop = `solid 2px ${nowColor}`;
      topBtnLine.style.borderLeft = `solid 2px ${nowColor}`;
      topBtn.style.border = `solid 2px ${nowColor}`;
      break;
    case pageY + windowHeight > positions[2]:
      changeTarget.style.backgroundColor = "rgb(201, 70, 131)";
      changeTarget.style.color = "rgb(201, 70, 131)"
      loadingTarget.style.backgroundColor = "rgb(201, 70, 131)";
      nowColor = "rgb(201, 70, 131)";
      for (const skillBar of document.querySelectorAll('.skill-bar-score')) {
        skillBar.style.backgroundColor = nowColor;
      }
      topBtnLine.style.borderTop = `solid 2px ${nowColor}`;
      topBtnLine.style.borderLeft = `solid 2px ${nowColor}`;
      topBtn.style.border = `solid 2px ${nowColor}`;
      break;
    case pageY + windowHeight > positions[1]:
      changeTarget.style.backgroundColor = "rgb(155, 114, 100)";
      changeTarget.style.color = "rgb(155, 114, 100)";
      loadingTarget.style.backgroundColor = "rgb(155, 114, 100)";
      nowColor = "rgb(155, 114, 100)";
      for (const skillBar of document.querySelectorAll('.skill-bar-score')) {
        skillBar.style.backgroundColor = nowColor;
      }
      topBtnLine.style.borderTop = `solid 2px ${nowColor}`;
      topBtnLine.style.borderLeft = `solid 2px ${nowColor}`;
      topBtn.style.border = `solid 2px ${nowColor}`;
      break;
    case pageY + windowHeight > positions[0] && pageY !== 0:
      changeTarget.style.backgroundColor = "rgb(225, 152, 110)";
      changeTarget.style.color = "rgb(225, 152, 110)";
      loadingTarget.style.backgroundColor = "rgb(225, 152, 110)";
      nowColor = "rgb(225, 152, 110)";
      for (const skillBar of document.querySelectorAll('.skill-bar-score')) {
        skillBar.style.backgroundColor = nowColor;
      }
      topBtnLine.style.borderTop = `solid 2px ${nowColor}`;
      topBtnLine.style.borderLeft = `solid 2px ${nowColor}`;
      topBtn.style.border = `solid 2px ${nowColor}`;
      break;
    case pageY == 0:
      changeTarget.style.backgroundColor = "rgb(92, 142, 194)";
      loadingTarget.style.backgroundColor = "rgb(92, 142, 194)";
      nowColor = "rgb(92, 142, 194)";
      for (const skillBar of document.querySelectorAll('.skill-bar-score')) {
        skillBar.style.backgroundColor = nowColor;
      }
      topBtnLine.style.borderTop = `solid 2px ${nowColor}`;
      topBtnLine.style.borderLeft = `solid 2px ${nowColor}`;
      topBtn.style.border = `solid 2px ${nowColor}`;
      break;
    default:
      break;
  }
})


// icon slidein
let icons = document.querySelectorAll('.sns-wrapper');

window.addEventListener('scroll',function () {
  let targetY = icons[0].getBoundingClientRect().top + window.pageYOffset;
  let pageY =  window.pageYOffset;
  if (targetY < pageY + windowHeight) {
    icons.forEach(icon => {
      icon.classList.add('on');
    });
  }
})

// swiper
const swiper = new Swiper('.swiper', {
  // Optional parameters
  // slidesPerView: 3,
  spaceBetween: 50,
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 3,
  breakpoints: {
    767:{
      slidesPerView: 4,
      spaceBetween: 100,
    }
  },
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 5000,
  },
});

// slider
let targets = document.querySelectorAll('.js-slider-target');
let index = 0;

setInterval(slider, 5000);

function slider() {
  targets.forEach(target => {
    if (target.classList.contains('on')) {
      target.classList.remove('on');
    };
  });
  index++;
  if (index > targets.length -1) {
    index = 0;
  }
  targets[index].classList.add('on');
}

// loading animation
let layer = document.querySelector('.layer');
window.onload = setTimeout(closeUp,1000,layer);

function closeUp(target) {
  target.style.transform = 'translateY(-100%)';
}

function getPositions (changeTriggers) {
  let triggersY = [];
  let pageY = window.pageYOffset;
  for (let i = 0; i < changeTriggers.length; i++) {
    let triggerY = changeTriggers[i].getBoundingClientRect().top + pageY;
    triggersY.push(triggerY);
  }
  return triggersY
}

// go to top btn
topBtn.addEventListener("click",()=>{
  const top = 0;
  window.scrollTo({
    top,
    behavior: "smooth"
  });
})

