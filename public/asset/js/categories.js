let categories = document.querySelectorAll(".swiper-slide.category");

console.log(categories)
for(let i = 0; i < categories.length; i++){
    categories[i].addEventListener("click", function () {
        let pressedCard = document.querySelectorAll(`#product-${this.id}`)
        let allCards = document.querySelectorAll(".products .cards")
        for(j = 0; j < allCards.length; j++){
            if(allCards[j] === pressedCard[0]){
                allCards[j].classList.remove("hide")
            }
            else if(!allCards[j].classList.contains("hide"))
                allCards[j].classList.add("hide")
        }
    })
}