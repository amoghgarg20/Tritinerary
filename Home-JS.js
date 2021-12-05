const mainDisplay = document.querySelector(".slide-display");
const slider = document.querySelectorAll(".slider");
const leftArrow = document.querySelector("#left-arrow");
const rightArrow = document.querySelector("#right-arrow");

current = 0;

function reset(){
  for( i = 0; i< slider.length; i++){
    slider[i].style.display = "none";
  }
}

function leftClickHandler(){
  if(current == 0){
    current = 3;
  }
  slider[current-1].style.display = "block";
  current--;
}
function rightClickHandler(){
  if(current === slider.length - 1){
    current = -1;
  }
  slider[current+1].style.display = "block";
  current++;
}

function startSlide(){
  slider[1].style.display = "none";
  slider[2].style.display = "none";
}
startSlide();

leftArrow.addEventListener("click", () =>{
  reset();
  leftClickHandler();
})
rightArrow.addEventListener("click", () => {
  reset();
  rightClickHandler();
})
