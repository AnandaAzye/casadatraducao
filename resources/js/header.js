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

setTimeout(() =>{
    let reviewCopy = document.querySelector('a[href="https://elfsight.com/google-reviews-widget/?utm_source=websites&utm_medium=clients&utm_content=google-reviews&utm_term=127.0.0.1&utm_campaign=free-widget"]');
    let button = document.querySelector('.kBUAPv');
    if(reviewCopy){
        button.innerHTML = 'Ver mais'
        button.classList.add('button__review')
        reviewCopy.style.display = "none";
        let gridReviews = document.querySelector('.Grid__GridContainer-zyt552-0');
        gridReviews.classList.add('container-review__controll')

    }
}, 2000)


