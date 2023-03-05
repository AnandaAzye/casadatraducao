<header class="container-main">
    <nav class="nav-header container-contents" data="nav-header">
        <a href={{URL('/')}} class="nav-header__logo">
            <img src={{URL('img/global/logo.png')}} alt="Logo da Machado de Sá">
        </a>
        <button class="nav-header_button-mobile" data="nav-header_btnMobile" aria-label="Abrir o Menu" aria-expanded="false" aria-haspopup="true" aria-controls="menu" >
            <span class="hamburger"></span>
        </button>
        <ul class="nav-header__list" id="menu" role="menu">
            <li class="occupation-area">
                <a href={{URL('/quem-somos')}}>Quem Somos</a>
            </li>
            <li><a href={{URL('/servicos')}}>Serviços</a></li>
            <li><a href={{URL('/faq')}}>Faq</a></li>
            <li><a href={{URL('/contato')}}>Contatos</a></li>
            <li class="consult-an-expert"><a href="">Area do Cliente</a></li>
        </ul>
    </nav>
</header>
