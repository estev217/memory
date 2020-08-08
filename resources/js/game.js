let score = document.getElementById('clicks-done');
let form = document.getElementById('clicks');

let card1 = document.getElementById('card1').addEventListener('click', clicksUp);
let card2 = document.getElementById('card2').addEventListener('click', clicksUp);
let card3 = document.getElementById('card3').addEventListener('click', clicksUp);
let card4 = document.getElementById('card4').addEventListener('click', clicksUp);
let card5 = document.getElementById('card5').addEventListener('click', clicksUp);
let card6 = document.getElementById('card6').addEventListener('click', clicksUp);
let card7 = document.getElementById('card7').addEventListener('click', clicksUp);
let card8 = document.getElementById('card8').addEventListener('click', clicksUp);
let card9 = document.getElementById('card9').addEventListener('click', clicksUp);
let card10 = document.getElementById('card10').addEventListener('click', clicksUp);
let card11 = document.getElementById('card11').addEventListener('click', clicksUp);
let card12 = document.getElementById('card12').addEventListener('click', clicksUp);
let card13 = document.getElementById('card13').addEventListener('click', clicksUp);
let card14 = document.getElementById('card14').addEventListener('click', clicksUp);
let card15 = document.getElementById('card15').addEventListener('click', clicksUp);
let card16 = document.getElementById('card16').addEventListener('click', clicksUp);
let card17 = document.getElementById('card17').addEventListener('click', clicksUp);
let card18 = document.getElementById('card18').addEventListener('click', clicksUp);

let cards = document.getElementsByClassName('card-link');
let card;

let buttons = document.getElementById('end-buttons');

let choice1, choice2 = false;
let cardName1, cardName2;
let pairs = 0;

function clicksUp() {
    score.innerText++;
    form.value++;
    this.className = "img-thumbnail card-clicked";
    if (!choice1) {
        choice1 = this.src;
        cardName1 = this.id;
    } else {
        choice2 = this.src;
        cardName2 = this.id;
        if (choice2 === choice1) {
            pairs++;
            choice1 = false;
            choice2 = false;
            document.getElementById(cardName1).parentElement.className += " avoid-clicks";
            document.getElementById(cardName1).className += " avoid-clicks";
            document.getElementById(cardName2).parentElement.className += " avoid-clicks";
            document.getElementById(cardName2).className += " avoid-clicks";
            if (pairs === 9) {
                buttons.className = "end-buttons-on";
                alert('Bravo, vous avez trouvé les 9 paires en ' + score.innerText + ' coups !!!');
            }
        } else {
            choice1 = false;
            choice2 = false;
            for( card of cards ) {
                card.className += " avoid-clicks";
            }
            setTimeout(function(){
                for( card of cards ) {
                    card.className = "card-link";
                }
                document.getElementById(cardName1).className = "img-thumbnail card-hidden";
                document.getElementById(cardName2).className = "img-thumbnail card-hidden";
                }, 1500);
        }
    }
}
