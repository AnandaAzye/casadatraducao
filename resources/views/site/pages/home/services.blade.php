<section>
   <div class="container-services">
    <div class="container-main">
        <h2 class="container-services__title">@lang('pages/home.solucoes')</h2>
        <div class="container-services__card">
            @foreach ($card as $item)
                <a class="card" href=" ">
                    <div class="container-services__image">
                        <img src="{{$item->image}}" alt="">
                    </div>
                    <h2>
                        @if (app()->getLocale() == 'pt')
                            {{$item->post_title}}
                        @else
                            {{$item->acf->titulo_em_ingles}}
                        @endif
                    </h2>
                    <span class="container-services__button">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="15.3008" x2="15.3008" y2="29" stroke="white" stroke-width="3"/>
                            <line y1="-1.5" x2="28.0743" y2="-1.5" transform="matrix(0.999948 -0.010227 0.0095837 0.999954 0.765625 15.8516)" stroke="white" stroke-width="3"/>
                            </svg>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
    </div>
</section>
