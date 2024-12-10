/* Manages print of text and img content on index.html (homepage) */

// Content
const logo = `<img src = '../assets/images/logo_white.png' alt = 'site logo in white' class = 'mx-auto d-block'>`;
let loading_text = 'Loading';

function showContent() {
    showLoadingScreen(); // Goes through frames of loading screen
}

function showLoadingScreen() {
    let dots = ''; // dots after the 'Loading' text
    while (dots.length < 3) {
        setTimeout(() => {
            let loading_text_tag = `<h3 class = 'text-center'>${loading_text}</h3>`;
            document.getElementById('content').innerHTML = `${logo}<br>${loading_text_tag}`; // Show frame of loading screen at beginning
            dots += '.';
            loading_text += dots;
        }, 1000);
    }
}