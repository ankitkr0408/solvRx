let cardNumInput = document.querySelector("#cardNum");

cardNumInput.addEventListener("keyup", () => {
  let cNumber = cardNumInput.value;
  cNumber = cNumber.replace(/\s/g, "");

  if (Number(cNumber)) {
    cNumber = cNumber.match(/.{1,4}/g);
    cNumber = cNumber.join(" ");
    cardNumInput.value = cNumber;
  }
});

function redirectToPaymentPage() {
  // Redirect to the payment page after the form is submitted
  window.location.href = "";
}

// Form submission handler
document
  .getElementById("bookingForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission to server
    redirectToPaymentPage(); // Redirect to payment page
  });
