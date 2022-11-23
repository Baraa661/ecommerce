const test = document.querySelector('#test');
const test2 = document.querySelector('#test2');
const test3 = document.querySelector('#test3');
let n = 8493029;
let n1 = 324847;
let n2 = 3284929;

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function increment(n) {
  
  n_disp = numberWithCommas(n);
  test.innerHTML = `${n_disp}</br>`;
  setTimeout(increment, 100, n+=1111);
}
function increment1(n) {
  n_disp = numberWithCommas(n);
  test2.innerHTML = `${n_disp}</br>`;
  setTimeout(increment1, 100, n+=1111);
}
function increment3(n) {
  n_disp = numberWithCommas(n);
  test3.innerHTML = `${n_disp}</br>`;
  setTimeout(increment3, 100, n+=11111);
}  

increment(n);
increment1(n1);
increment3(n2);

function show(index){
all_cards = document.getElementsByClassName("accordion");
for(i=0 ;i< all_cards.length;i++){
    all_cards[i].classList.add("hidden");
}
all_cards[index].classList.remove("hidden");
}



var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};
var nav_links = document.getElementsByClassName('nav-link');
var nav = document.getElementById("nav1");

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    nav.classList.add("nav_light");

  } else {
    mybutton.style.display = "none";
    nav.classList.remove("nav_light");

  }
  for (let i = 0; i < 7; i++) {
    nav_links[i].classList.remove("nav_active");
  }
  
  if (document.body.scrollTop > 6500 || document.documentElement.scrollTop > 6500) {
    nav_links[6].classList.add("nav_active");
  }else if (document.body.scrollTop > 5900 || document.documentElement.scrollTop > 5900) {
    nav_links[5].classList.add("nav_active");
  }else if (document.body.scrollTop > 4400 || document.documentElement.scrollTop > 4400) {
    nav_links[4].classList.add("nav_active");
  }else if (document.body.scrollTop > 2400 || document.documentElement.scrollTop > 2400) {
    nav_links[3].classList.add("nav_active");
  }else if (document.body.scrollTop > 1700 || document.documentElement.scrollTop > 1700) {
    nav_links[2].classList.add("nav_active");
  }else if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
    nav_links[1].classList.add("nav_active"); 
  }else{
    nav_links[0].classList.add("nav_active"); 
  }

}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


function scrollPos() {
    var position = document.getElementById('page1').scrollTop;
    console.log(position);
}

document.getElementById("p1").onclick = function () {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};
document.getElementById("p2").onclick = function () {
    window.location.hash = "#page-2";
};
document.getElementById("p4").onclick = function () {
    window.location.hash = "#page-4";
};
document.getElementById("p5").onclick = function () {
    window.location.hash = "#page-5";
};
document.getElementById("p8").onclick = function () {
    window.location.hash = "#page-8";
};
document.getElementById("p11").onclick = function () {
    window.location.hash = "#page-11";
};
document.getElementById("p12").onclick = function () {
    window.location.hash = "#page-12";
};
document.getElementById("p10").onclick = function () {
    window.location.hash = "#page-10";
};




