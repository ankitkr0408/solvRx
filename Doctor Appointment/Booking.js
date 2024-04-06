function redirectToPayment() {
  
  var form = document.getElementById("booking-form");

  
  form.addEventListener("submit", function (event) {
    
    event.preventDefault();

    
    window.location.href = "Payment.html";
  });
}
