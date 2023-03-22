var slider = document.querySelector('#myRange');
var site_url = document.querySelector('#site_url').textContent;

slider.addEventListener('input', function() {
    if (slider.value == 1) {
    console.log("1");
      slider.classList.add("mild");
      slider.classList.remove("medium");
      slider.classList.remove("hot");
      document.getElementById("flameImg").src = site_url + "/dist/images/mild-flame.svg";
  } else if (slider.value == 2) {
    console.log("2");
      slider.classList.add("medium");
      slider.classList.remove("mild");
      slider.classList.remove("hot");
      document.getElementById("flameImg").src = site_url + "/dist/images/medium-flame.svg";
  } else if (slider.value == 3) {
    console.log("3");
      slider.classList.add("hot");
      slider.classList.remove("mild");
      slider.classList.remove("medium");
      document.getElementById("flameImg").src = site_url + "/dist/images/hot-flame.svg";
  }
}, false);

function calculateTip(tipPortion, subtotal) {
  let tipAmount = tipPortion * subtotal;
  let totalPlusTip = subtotal + tipAmount;
  console.log(subtotal, tipAmount);
  totalPlusTip = (Math.round(totalPlusTip * 100) / 100).toFixed(2);
  tipAmount = (Math.round(tipAmount * 100) / 100).toFixed(2);
  document.getElementById("priceHook1").innerHTML = totalPlusTip;
  document.getElementById("tipHook").innerHTML = tipAmount;
  document.getElementById("priceHook2").innerHTML = totalPlusTip;
  document.getElementById("final_price").value = totalPlusTip;
}
