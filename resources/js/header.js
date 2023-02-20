const menuMobile = () =>{
    const btnList =  document.querySelector('.nav-header_button-mobile');
    const menuList = document.querySelector("[data='nav-header']");

    function openMenu(event){
        if (event.type === 'touchstart') event.preventDefault();
        menuList.classList.toggle('active');
        let active = menuList.classList.contains('active');
        event.currentTarget.setAttribute('aria-expanded', active);
        active ? event.currentTarget.setAttribute('aria-label', 'Fechar o Menu'): event.currentTarget.setAttribute('aria-label', 'Abrir o Menu');
    }

    btnList.addEventListener('click', openMenu);
    btnList.addEventListener('touchstart', openMenu);
}
menuMobile();

console.log('sddnklfn')
