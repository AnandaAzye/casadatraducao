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
                <a href={{URL('/quem-somos')}}>@lang('pages/includes/header/header.menu.item_1')</a>
            </li>
            <li><a href={{URL('/servicos')}}>@lang('pages/includes/header/header.menu.item_2')</a></li>
            <li><a href={{URL('/faq')}}>@lang('pages/includes/header/header.menu.item3')</a></li>
            <li><a href={{URL('/contato')}}>@lang('pages/includes/header/header.menu.item4')</a></li>
            <li class="language">
                {{-- <a href="#" onclick="doGTranslate('pt|pt');return false;" title="Portuguese" class="glink nturl notranslate"><img src="{{URL('images/header/brasil.svg')}}" height="24" width="24" alt="Portuguese" /></a>
                <a href="#" onclick="doGTranslate('pt|en');return false;" title="English" class="glink nturl notranslate"><img src="{{URL('images/header/estados-unidos.svg')}}" height="24" width="24" alt="English" /></a> --}}
                <a href="{{URL('locale/pt')}}" style="width: 100%" ><img style="width: 22px; height:22px;" src="{{URL('img/global/brasil.svg')}}" alt="Traduzir para pt"></a>
                <a href="{{URL('locale/en')}}"><img style="width: 22px; height:22px;" src="{{URL('img/global/estados-unidos.svg')}}" alt="Traduzir para en"></a>
            </li>
            <li class="consult-an-expert"><a href="">Area do Cliente</a></li>
        </ul>
    </nav>
</header>
