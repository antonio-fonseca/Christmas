let boxCard = document.querySelector('#boxCard')
let cardCustom = document.querySelectorAll('.card-custom');
let categoriaProdotti = document.querySelectorAll('.categoria-prodotti');
let prezzoProdotti = document.querySelectorAll('.prezzo-prodotti')
let nomeProdotti = document.querySelectorAll('.nome-prodotti')
let immagineProdotti = document.querySelectorAll('.immagine-prodotti')

// Funzione che mi permette ci prendere tutti dati delle varie card in js
let allCard = []
function getAllCard(){
    cardCustom.forEach((card,i) => {
        let appoggio = []
        appoggio.push(nomeProdotti[i].innerHTML)
        appoggio.push(prezzoProdotti[i].innerHTML)
        appoggio.push(categoriaProdotti[i].innerHTML)
        appoggio.push(immagineProdotti[i].src)
        allCard.push(appoggio)
    });
}

getAllCard()

// Funzione che mi permette di creare tutti gli input rispettivi ad ogni categoria che abbiamo nel nostro array "allCard"
let allCat = []
let categoryBox = document.querySelector('#categoryBox')
function getCat() {
    allCard.forEach(card => {
        let find = allCat.find((cat)=> cat == card[2])
        if (!find) {
            allCat.push(card[2])
        }
    });
    allCat.forEach(Cat => {
        let div = document.createElement('div')
        categoryBox.appendChild(div)
        div.classList = ('form-check')
        div.innerHTML = `
        <div class="form-check">
            <input class="form-check-input inputCustom" type="radio" name="flexRadioDefault" id="${Cat}">
            <label class="form-check-label filtro-custom" for="${Cat}">
            ${Cat}
            </label>
        </div>
        `
    });
}

getCat()

// Funczione per filtrare le card per categoria
function getCardForCat(dato) {
    let filter = allCard.filter((card)=> card[2] == dato)
    if(filter){
        creaCard(filter)
    }
}

function getOldCard(){
    boxCard.innerHTML = ``
    cardCustom.forEach(card => {
        let div = document.createElement('div')
        div.classList = ('col-12 col-sm-6 col-xl-4 d-flex justify-content-center align-items-center my-5')
        boxCard.appendChild(div)
        div.appendChild(card)
    });
}




let inputCustom = document.querySelectorAll('.inputCustom')

inputCustom.forEach(input => {
    input.addEventListener('click', ()=>{
        if (input.id != 'All') {
            getCardForCat(input.id)

        }else{
            getOldCard()
        }
    })
});


let arrPrice = []


let arrNumPrice = []
let maxValue = document.querySelector('#maxValue')
let priceBar = document.querySelector('#priceBar')

allCard.forEach(card => {
    arrPrice.push(card[1])
});




function setMaxPrice(){
    arrPrice.forEach(price=>{
        let numero = price.replace('€', '')
        numero = numero.replace(",", ".")
        arrNumPrice.push(+numero)

    })

    let valoreMassimo = Math.max(...arrNumPrice)
    priceBar.max = valoreMassimo+1
    priceBar.value = valoreMassimo
    maxValue.innerHTML = '€' + valoreMassimo
}
setMaxPrice()

function getFilterByPrice(value) {
    allCard.forEach((card, i) => {
        card[1] = arrNumPrice[i]
    });
    let filtrato = allCard.filter((card)=>card[1]<=value)
    if (filtrato != '' ) {
        filtrato.forEach((card)=>{
            card[1] = '€' + card[1]
            if (!card[1].includes('.')) {
                card[1] = card[1] + '.00'
            }
        })
        creaCard(filtrato)
    }
}

priceBar.addEventListener('input',()=>{
    maxValue.innerHTML = '€' + priceBar.value
    getFilterByPrice(priceBar.value)
})

let worldBox = document.querySelector('#worldBox')

function getFilterByName(){
    let filtrato = allCard.filter((card)=>card[0].toLowerCase().includes(worldBox.value.toLowerCase()))
    if (filtrato != '' ) {
       creaCard(filtrato)
    }
}



worldBox.addEventListener('input',()=>{
    getFilterByName()
})

function creaCard(x) {
    boxCard.innerHTML = ``
    x.forEach(oggetto=>{
        oggetto[1]= oggetto[1].replace('.', ',')
        let url = route('prodotti.dettagli', { name : ':nome'}).replace(':nome', oggetto[0])
        let div = document.createElement('div')
        div.classList = ('col-12 col-sm-6 col-xl-4 d-flex justify-content-center align-items-center my-5')
        boxCard.appendChild(div)
        div.innerHTML = `
        <div class="card-custom rounded-top">
            <img src="${oggetto[3]}" alt="" class="img-fluid immagine-prodotti">
            <div class="card-content d-flex flex-column">
                <h3 class="nome-prodotti">${oggetto[0]}</h3>
                <h3 class="d-none categoria-prodotti">${oggetto[2]}</h3>
                <h4 class="prezzo-prodotti">${oggetto[1]}</h4>
                <a class="btn-custom text-center" href="${url}">Dettagli</a>
            </div>
        </div>
        `
    })
}



let parolaBox = document.querySelector('#parolaBox')
let priceBox = document.querySelector('#priceBox')
let categoria = document.querySelector('#categoria')
let prezzo = document.querySelector('#prezzo')
let parola = document.querySelector('#parola')

categoria.addEventListener('click',()=>{
        categoryBox.classList.toggle('d-none')
        categoria.classList.toggle("border-bottom")
        categoria.classList.toggle("border-dark")
        categoria.classList.toggle("pb-2")
})
prezzo.addEventListener('click',()=>{
        priceBox.classList.toggle('d-none')
        prezzo.classList.toggle("border-bottom")
        prezzo.classList.toggle("border-dark")
        prezzo.classList.toggle("pb-2")
})
parola.addEventListener('click',()=>{
        parolaBox.classList.toggle('d-none')
        parola.classList.toggle("border-bottom")
        parola.classList.toggle("border-dark")
        parola.classList.toggle("pb-2")
})
