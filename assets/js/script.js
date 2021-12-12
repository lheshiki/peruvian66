// Header font-color change
let skillsSec = document.querySelector('#skills');
let navItems = document.querySelectorAll('.nav-item');
window.addEventListener('scroll',function () {
  let pageY = window.pageYOffset;
  let skillsY = skillsSec.getBoundingClientRect().top + pageY;
  if (pageY + 16 > skillsY) {
    navItems.forEach(navItem =>{
      navItem.classList.add('on');
    });
  }else{
    navItems.forEach(navItem =>{
      navItem.classList.remove('on');
    });
  }
});

// smoothscroll
function smoothScroll(link) {
  link.addEventListener('click',function (e) {
    e.preventDefault();
    let address = link.getAttribute('href');
    let target = document.querySelector(address);
    let targetY = target.getBoundingClientRect().top + window.pageYOffset;
    window.scrollTo({
      top:targetY,
      behavior:'smooth'
    });
  })
}

let links = document.querySelectorAll('.nav-item a');
links.forEach(link => {
  smoothScroll(link);
})


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
      // skillBars.forEach(skillBar => {
      //   skillBar.classList.add('on');
      //   skillBar.style.width = `${skillScores[i]}%`;
      // });
      for(i=0; i<skillPoints.length; i++){
        skillBars[i].classList.add('on');
        document.querySelectorAll('.skill-bar-score')[i].style.width = `${skillScores[i]}%`;
        showScore(skillScores[i],skillPoints[i]);
      };
      skillContainer.classList.add('activated');
    }
  }
});


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

// slider
let targets = document.querySelectorAll('.js-slider-target');
let index = 0;

setInterval(slider, 5000);

function slider() {
  targets.forEach(target => {
    let test = target.classList.contains('on');
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

// bubbly background
bubbly({
  colorStart:"#000",
  colorStop:"#000",
  blur:1,
  bubbles:100
});