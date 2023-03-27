<section>
    <div class="container-breadcrumb">
        <div class="container-main">
            <div class="breadcrumb-content">
                <ul>
                    <li>
                        <a href="dadsadaS">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="dasdsadsadsadasd">
                            @lang('pages/includes/breadcrumb/breadcrumb.servicos.titulo')
                        </a>
                    </li>
                </ul>
                <h1>
                    @lang('pages/includes/breadcrumb/breadcrumb.servicos.titulo')
                </h1>
            </div>
        </div>
    </div>
    <div class="container-service">
        <div class="container-main">
            <h2>@lang('pages/servicos.titulo')</h2>
            <div class="card-service">
                @foreach ($card as $item)
                    <div class="card">
                        <h3>
                            @if (app()->getLocale() == 'pt')
                                {{$item->post_title}}
                            @else
                                {{$item->acf->titulo_em_ingles}}
                            @endif
                        </h3>
                        <a href="">
                            <span>
                                <img src="{{url('img/global/arrow-slide.svg')}}" alt="">
                            </span>
                            <button>@lang('pages/servicos.detalhes')</button>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<main>
    <div class="container-about__cta">
        <div class="container-main">
            <img src="{{URL('img/global/soliciteorç.png')}}" alt="">
            <h2>@lang('pages/includes/cta/cta.orcamento.titulo')</h2>
            <a href="">
                <button>
                    @lang('pages/includes/cta/cta.orcamento.botao')
                </button>
            </a>
        </div>
    </div>
</main>
