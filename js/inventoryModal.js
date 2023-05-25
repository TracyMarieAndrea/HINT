//get the modal id
var quanbar = document.getElementById("QuantityWindow");

//button id
var select = document.getElementById("addbuttn");

//get the span
var exit = document.getElementsByClassName("disable")[0];

select.onclick = function() {
    quanbar.style.display = "block";
}

exit.onclick = function() {
    quanbar.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == quanbar) {
        quanbar.style.display = "none";
    }
}