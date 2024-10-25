let sliderMinimum = document.querySelector(".cenalitr");
let sliderMaximum = document.querySelector(".cenalitrdo");

let spanMinimum = document.querySelector(".minimum-price-value");
let spanMaximum = document.querySelector(".maximum-price-value");

spanMinimum.innerHTML = sliderMinimum.value;
spanMaximum.innerHTML = sliderMaximum.value;

sliderMinimum.oninput = function() {
    spanMinimum.innerHTML = sliderMinimum.value;
}

sliderMaximum.oninput = function () {
    spanMaximum.innerHTML = sliderMaximum.value;
}
