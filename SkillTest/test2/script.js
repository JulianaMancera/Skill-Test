// Function to generate a random color in hexadecimal format
/* this part of a function creates a random hex color by selecting 6 different/random characters 
from 'letters' and then prefixinng by using '#'
**/
function getRandomColor() {
    const letters = '123456789ABCDEF';
    let color = '#';

    // using for loop to do the math random
    for (let i = 0; i < 6; i++){
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
// Function to change the background color when the button is clicked
/** this function updates the bg color of the body to a randomly generated color when they cliked the button */
function changeBackgroundColor() {
    document.body.style.background = getRandomColor();
}
// Add an event listener to the button to trigger the color change
const colorButton = document.getElementById('colorButton');
colorButton.addEventListener('click', changeBackgroundColor);