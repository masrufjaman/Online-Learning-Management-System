// Toogle menu
function toogleMenu(){
    let toogle = document.querySelector('.toogle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toogle.classList.toggle('active');
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}

// MultiButton
const buttons = document.querySelectorAll(".btn-group__item");
buttons.forEach(button => {
  button.addEventListener("click",() => {
    // do some action according to button
    
    // show success feedback
    button.classList.add("btn-group__item--active");
    setTimeout(() => {
      button.classList.remove("btn-group__item--active");
    },600)
  })
})


document.getElementById('add').addEventListener('click', function() {
            document.querySelector('.bg-modal-add').style.display = 'flex';
        })

        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal-add').style.display = 'none';
        })

document.getElementById('edit').addEventListener('click', function() {
            document.querySelector('.bg-modal-edit').style.display = 'flex';
        })

        document.querySelector('.close').addEventListener('click', function() {
            document.querySelector('.bg-modal-edit').style.display = 'none';
        })