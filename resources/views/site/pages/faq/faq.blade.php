<x-Breadcrumb text='Faq'>

</x-Breadcrumb>
<main>
    <div class="container-main">
        <div class="container-faq">
            @foreach ($faq as $key => $item)
            <div class="card">

                <div class="container-title">
                    <span>
                        @if ($key < 10 )
                       0.{{$key + 1}}
                        @else
                        {{$key + 1}}
                      @endif
                    </span>
                    <h2>
                        @if (app()->getLocale() == 'pt')
                            {{$item->post_title}}
                        @else
                            {{$item->acf->titulo_em_ingles}}
                        @endif
                    </h2>
                    <button>
                        <div class="btn-card">
                            <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.23157 5.92969L6.25749 5.90449L6.28308 5.92969L11.8311 0.536505L11.3487 0.0676193L6.25749 5.01645L1.16597 0.0676189L0.683594 0.536505L6.23157 5.92969Z" fill="#ED1556"/>
                            </svg>
                        </div>
                    </button>
                </div>
                <div class="container-content">
                    <p>

                        @if (app()->getLocale() == 'pt')
                                {{$item->post_content}}
                            @else
                                {{$item->acf->texto_em_ingles}}
                            @endif
                    </p>
                </div>
            </div>
        @endforeach
        </div>
    </div>

</main>

<section>
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
</section>
