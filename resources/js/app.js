import './bootstrap';

const initApp = () => {
    const hBtn = document.getElementById('menuBtn')
    const menu = document.getElementById('menu')
    const close = document.getElementById('menuClose')

    const toggleMenu = () => {
        menu.classList.toggle('hidden')
    }
    const toggleAnim = () => {
        menu.style.animation = "close .4s 1";
        setTimeout(() => {  toggleMenu(); }, 380);
    }
    const toggleAnimOn = () => {
        menu.style.animation = "translate .4s 1";
        toggleMenu();
    }

    //hBtn.addEventListener('click', toggleMenu)
    hBtn.addEventListener('click', toggleAnimOn)
    //close.addEventListener('click', toggleMenu)
    close.addEventListener('click', toggleAnim)

}

document.addEventListener('DOMContentLoaded', initApp)