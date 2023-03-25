<section class="about-container">
    <div class="container-main">
      <div class="about-container__content">
            <h1>
                @lang('pages/home.titulo')
            </h1>
            <p class="about-container__text">
                @lang('pages/home.descricao')
            </p>
            <a href="{{route('about')}}">
                <p>
                  @lang('pages/home.continue')
                </p>
                <img src="{{URL('/img/global/arrow-slide.svg')}}" alt="Continuar lendo...">
            </a>
      </div>



    </div>
</section>
