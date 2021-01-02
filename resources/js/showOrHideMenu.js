const burgerLinkOpen = document.getElementsByClassName('burger__links')[0];
const burgerLinkClose = document.getElementsByClassName('burger__links')[1];
const menuContent = document.getElementsByClassName('hidden__menu')[0];

burgerLinkOpen.addEventListener('click', openOrCloseMenu);
burgerLinkClose.addEventListener('click', openOrCloseMenu);


function openOrCloseMenu() {
    menuContent.classList.toggle("not-working");

}
