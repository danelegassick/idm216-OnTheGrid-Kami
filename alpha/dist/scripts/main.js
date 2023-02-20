var slider = document.querySelector('#myRange');

slider.addEventListener('input', function() {
    if (slider.value == 1) {
    console.log("1");
      slider.classList.add("mild");
      slider.classList.remove("medium");
      slider.classList.remove("hot");
      document.getElementById("flameImg").src = "../dist/images/mild-flame.svg";
  } else if (slider.value == 2) {
    console.log("2");
      slider.classList.add("medium");
      slider.classList.remove("mild");
      slider.classList.remove("hot");
      document.getElementById("flameImg").src = "../dist/images/medium-flame.svg";
  } else if (slider.value == 3) {
    console.log("3");
      slider.classList.add("hot");
      slider.classList.remove("mild");
      slider.classList.remove("medium");
      document.getElementById("flameImg").src = "../dist/images/hot-flame.svg";
  }
}, false);