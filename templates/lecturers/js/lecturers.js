// Toogle menu
function toogleMenu(){
    let toogle = document.querySelector('.toogle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toogle.classList.toggle('active');
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}
