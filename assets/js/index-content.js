/* Manages print of text and img content on index.html (homepage) */

const logo = `<img src = '../assets/images/logo_white.png' alt = 'site logo in white' class = 'mx-auto d-block'>`;
let loading_spinner = `<div class = 'mx-auto d-block spinner-border'></div>`;
function showContent() {
    document.getElementById('content').innerHTML = `${logo}<br>${loading_spinner}`;
}
showContent();