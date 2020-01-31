//Makes a html element display instructions to the user
//For the playground editor when screensize is small (740px or less)

const title = "For smaller screens";
const instruction = "1. Press the pen icon to bring up the coding screen \n 2. Press the repeat icon to run the HTML code";

window.onload = function () {
    if (window.innerWidth <= 740) {
        document.getElementById("instruction").innerText = instruction;
        document.getElementById("smallerScreen").innerText = title;
    }
}