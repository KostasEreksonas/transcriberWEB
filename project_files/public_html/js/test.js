let popup = document.getElementById("info-popup");
let button = document.getElementById("button");
let close = document.getElementsByClassName("close")[0];
let closeButton = document.getElementById("closeButton");

// On button click open a pop-up window
button.onclick = function()
{
    popup.style.display = "grid";
}

// Close the pop-up by clicking either <x> symbol, Close button or outside the pop-up itself
close.onclick = function()
{
    popup.style.display = "none";
}

closeButton.onclick = function()
{
    popup.style.display = "none";
}

window.onclick = function(event)
{
    if (event.target === popup) {
        popup.style.display = "none";
    }
}