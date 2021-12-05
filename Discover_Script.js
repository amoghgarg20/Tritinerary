const delhi = document.querySelector("#delhi");
const kashmir = document.querySelector("#kashmir");
const himachalPradesh = document.querySelector("#himachal-pradesh");
const uttrakhand = document.querySelector("#uttrakhand");
const sikkim = document.querySelector("#sikkim");
const mainMonuments = document.querySelector(".main-monuments");
const states = ["delhi", "kashmir", "himachalPradesh", "uttrakhand", "sikkim"];
const delhiMonumentsName = 
["red fort", 
"india gate", 
"qutub minar", 
"chandani chawk", 
"akshardham temple"]

const delhiMonumentsImage ={
  "red fort" : "https://images.unsplash.com/photo-1576519465852-4d119fcccf33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1803&q=80",
  "india gate":"https://images.unsplash.com/photo-1587474260584-136574528ed5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2070&q=80",
  "qutub minar": "https://images.unsplash.com/photo-1594708053019-5336680bbc35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1331&q=80", 
  "chandani chawk": "https://images.unsplash.com/photo-1599230080795-a48439229cb7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1187&q=80",
   "akshardham temple": "https://www.makemytrip.com/travel-guide/media/dg_image/delhi/Swaminarayan-Akshardham-Temple-Delhi.jpg",
};

id = [1,2,3,4,5];

var count = 0;
delhi.addEventListener("click", () =>{
  mainMonuments.innerHTML = ``;
  delhiMonumentsName.forEach(monument => {
    const newdiv = document.createElement('div');
    newdiv.classList.add("temp");
    newdiv.innerHTML = `
    <div class = "img-container"> 
    <img  class = "place-img" src = ${delhiMonumentsImage[monument]}>
    <div class = "overview">
    Anant ipsum dolor, sit amet consectetur adipisicing elit. Nobis consequatur illo id iure ipsa excepturi suscipit, dolorum voluptate rem quasi aliquam facere quod doloribus molestias vero cumque inventore. Culpa, quos.
    </div>
    </div>
    <button id = ${id[count]}> Add </button>
  `;
  mainMonuments.appendChild(newdiv);
  count = count+1;
  });
})