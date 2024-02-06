
let circle = document.querySelector('#circle');
let opener = document.querySelector('#opener');
let teacherCard = document.querySelector('#teacherCard');
let imgCard = document.querySelector('#imgCard');
let cardTitle = document.querySelector('#cardTitle');
let cardDescription = document.querySelector('#cardDescription');


let teachers = [
    {name: 'Babbo Natale', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, accusamus?', url: '/media/bn_pollice_2.png'},
    {name: 'Renne', description: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos magnam tempora temporibus?', url: '/media/renna_singola.png'},
    {name: 'Beffana', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure itaque reprehenderit doloribus quibusdam, quos sint.', url: '/media/strega_face.png'},
    {name: 'Elfi', description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', url: '/media/elfo_singolo.png'},
];

teachers.forEach((teacher)=>{
    let div = document.createElement('div');
    div.classList.add('moved');
    div.style.backgroundImage = `url(${teacher.url})`
    circle.appendChild(div)
})

let movedDivs = document.querySelectorAll('.moved')

let check = true;
opener.addEventListener('click', ()=>{

    if (check == true) {
        opener.style.transform = 'rotate(45deg)';
        movedDivs.forEach((div,i)=>{
            let angle = (360/movedDivs.length)*i;
            div.style.transform = `rotate(${angle}deg) translate(150px) rotate(-${angle}deg)`;
        })
        check = false;
    } else {
        opener.style.transform = 'rotate(0deg)';
        movedDivs.forEach((div)=>{
            div.style.transform = `rotate(0deg) translate(0)`;
            teacherCard.classList.add('d-none')
        })
        check = true;
    }
})

movedDivs.forEach((moved,i)=>{
    moved.addEventListener('click', ()=>{
        teacherCard.classList.remove('d-none');

        imgCard.src= teachers[i].url;
        cardTitle.innerHTML=teachers[i].name;
        cardDescription.innerHTML=teachers[i].description;
    })

})
