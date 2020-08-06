let score = document.getElementById('clicks-done');
let cards = document.getElementsByClassName('img-thumbnail');
let card;

for (card of cards){
    card.addEventListener('click', clicksUp);
    function clicksUp() {
        score.innerText++;
    }
}
