const clickButton = document.querySelector('.toggle-icon');
clickButton.addEventListener('click', ()=>{
    document.querySelector('header').classList.toggle('is-active');
});


document.querySelector('#up').addEventListener('click', ()=>{
    let target = document.querySelector('header').getBoundingClientRect().top
    window.scrollTo({top: target, behavior: "smooth" })
})