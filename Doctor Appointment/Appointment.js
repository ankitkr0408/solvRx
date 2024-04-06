
document.addEventListener("DOMContentLoaded", function () {
 
  const image1 = document.getElementById("image1");
  const image2 = document.getElementById("image2");
  const image3 = document.getElementById("image3");
  const image4 = document.getElementById("image4");

  
  const btn1 = document.getElementById("btn1");
  const btn2 = document.getElementById("btn2");
  const btn3 = document.getElementById("btn3");
  const btn4 = document.getElementById("btn4");

  btn1.addEventListener("click", function () {
   
    window.location.href = "./diabetes_page.html";
  });

  btn2.addEventListener("click", function () {
    
    window.location.href = "./dermatologist_page.html";
  });

  btn3.addEventListener("click", function () {
   
    window.location.href = "./general_page.html";
  });

  btn4.addEventListener("click", function () {
    
    window.location.href = "./pediatrician_page.html";
  });

  
});
