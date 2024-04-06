document.addEventListener("DOMContentLoaded", function () {
  const gallery = document.querySelector(".gallery");

  // Attach event listeners for mouse hover
  gallery.addEventListener("mouseover", handleMouseOver);
  gallery.addEventListener("mouseout", handleMouseOut);

  // Prevent default image dragging behavior
  const images = document.querySelectorAll(".gallery img");
  images.forEach((img) => {
    img.addEventListener("dragstart", (e) => e.preventDefault());
  });

  function handleMouseOver(event) {
    const targetImageContainer = event.target.closest(".image-container");
    if (targetImageContainer) {
      const description = targetImageContainer.querySelector(".description");
      if (description) {
        description.style.display = "block";
      }
    }
  }

  function handleMouseOut(event) {
    const targetImageContainer = event.target.closest(".image-container");
    if (targetImageContainer) {
      const description = targetImageContainer.querySelector(".description");
      if (description) {
        description.style.display = "none";
      }
    }
  }
});
