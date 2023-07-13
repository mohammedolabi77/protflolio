// 3d card effect 
// const pre = document.getElementById("card3d");

// document.addEventListener("mousemove", (e) => {
//   rotateElement(e, pre);
// });

// function rotateElement(event, element) {
  // get mouse position
//   const x = event.clientX;
//   const y = event.clientY;
  // console.log(x, y)

  // find the middle
//   const middleX = window.innerWidth / 2;
//   const middleY = window.innerHeight / 2;
  // console.log(middleX, middleY)

  // get offset from middle as a percentage
  // and tone it down a little
//   const offsetX = ((x - middleX) / middleX) * 45;
//   const offsetY = ((y - middleY) / middleY) * 45;
//   console.log(offsetX, offsetY);

  // set rotation
//   element.style.setProperty("--rotateX", offsetX + "deg");
//   element.style.setProperty("--rotateY", -1 * offsetY + "deg");
// }
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
let count = 0;




function expandImage1(){
    document.querySelector('#p1').classList.toggle('xpanded');
    document.querySelector('#p1').classList.toggle('unxpand');
}
function expandImage2(){
    document.querySelector('#p2').classList.toggle('xpanded');
    document.querySelector('#p2').classList.toggle('unxpand');
}
function expandImage3(){
    document.querySelector('#p3').classList.toggle('xpanded');
    document.querySelector('#p3').classList.toggle('unxpand');
}
function expandImage4(){
    document.querySelector('#p4').classList.toggle('xpanded');
    document.querySelector('#p4').classList.toggle('unxpand');
}
function expandImage5(){
    document.querySelector('#p5').classList.toggle('xpanded');
    document.querySelector('#p5').classList.toggle('unxpand');
}
function expandImage6(){
    document.querySelector('#p6').classList.toggle('xpanded');
    document.querySelector('#p6').classList.toggle('unxpand');
}
function expandImage7(){
    document.querySelector('#p7').classList.toggle('xpanded');
    document.querySelector('#p7').classList.toggle('unxpand');
}
function expandImage8(){
    document.querySelector('#p8').classList.toggle('xpanded');
    document.querySelector('#p8').classList.toggle('unxpand');
}





function expandImage9(){
    document.querySelector('#p9').classList.toggle('xpanded');
    document.querySelector('#p9').classList.toggle('unxpand');
}
function expandImage10(){
    document.querySelector('#p10').classList.toggle('xpanded');
    document.querySelector('#p10').classList.toggle('unxpand');
}
function expandImage11(){
    document.querySelector('#p11').classList.toggle('xpanded');
    document.querySelector('#p11').classList.toggle('unxpand');
}
function expandImage12(){
    document.querySelector('#p12').classList.toggle('xpanded');
    document.querySelector('#p12').classList.toggle('unxpand');
}
function expandImage13(){
    document.querySelector('#p13').classList.toggle('xpanded');
    document.querySelector('#p13').classList.toggle('unxpand');
}
function expandImage14(){
    document.querySelector('#p14').classList.toggle('xpanded');
    document.querySelector('#p14').classList.toggle('unxpand');
}
function expandImage15(){
    document.querySelector('#p15').classList.toggle('xpanded');
    document.querySelector('#p15').classList.toggle('unxpand');
}
function expandImage16(){
    document.querySelector('#p16').classList.toggle('xpanded');
    document.querySelector('#p16').classList.toggle('unxpand');
}






function expandImage17(){
    document.querySelector('#p17').classList.toggle('xpanded');
    document.querySelector('#p17').classList.toggle('unxpand');
}
function expandImage18(){
    document.querySelector('#p18').classList.toggle('xpanded');
    document.querySelector('#p18').classList.toggle('unxpand');
}
function expandImage19(){
    document.querySelector('#p19').classList.toggle('xpanded');
    document.querySelector('#p19').classList.toggle('unxpand');
}
function expandImage20(){
    document.querySelector('#p20').classList.toggle('xpanded');
    document.querySelector('#p20').classList.toggle('unxpand');
}
function expandImage21(){
    document.querySelector('#p21').classList.toggle('xpanded');
    document.querySelector('#p21').classList.toggle('unxpand');
}
function expandImage22(){
    document.querySelector('#p22').classList.toggle('xpanded');
    document.querySelector('#p22').classList.toggle('unxpand');
}
function expandImage23(){
    document.querySelector('#p23').classList.toggle('xpanded');
    document.querySelector('#p23').classList.toggle('unxpand');
}
function expandImage24(){
    document.querySelector('#p24').classList.toggle('xpanded');
    document.querySelector('#p24').classList.toggle('unxpand');
}




function showCv() {
    document.querySelector('#cv').classList.toggle('active');
    document.querySelector('#cv-cont').classList.toggle('active');
    document.querySelector('#resume').classList.toggle('active');
    document.querySelector('#resume-cont').classList.toggle('active');
}