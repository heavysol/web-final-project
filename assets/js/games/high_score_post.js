export function postHighScore(score) {
    let xml = new XMLHttpRequest();
    const url = '../actions/dont-crash_acts.php';
    const highscore = JSON.stringify({'high-score': score});

    xml.open('POST', url);
    xml.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xml.send('hs=' + highscore);
}