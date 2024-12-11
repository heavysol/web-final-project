/* Manages print of text and img content on index.html (homepage) */

const logo = `<img src = '../assets/images/logo_white.png' alt = 'site logo in white' class = 'mx-auto d-block'>`;
const loading_spinner = `<div class = 'mx-auto d-block spinner-border'></div>`;
const home_content = `<div class = 'mx-auto d-block text-center'> <h3>Welcome to the GameStation console experience - games and fun galore. What would you like to do?</h3> </div> <br>`;
const btns = `<a href = './login.php' class = 'btn btn-light'>Log in</a> <a href = './signup.php' class = 'btn btn-light'>Sign up</a>`;

function showContent() {
    document.getElementById('content').innerHTML = `${logo}<br>${loading_spinner}`;
}
showContent();