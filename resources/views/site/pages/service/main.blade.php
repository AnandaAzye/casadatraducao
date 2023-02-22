<section>
    <x-Breadcrumb text='Serviços'>

    </x-Breadcrumb>
    <div class="container-service">
        <div class="container-main">
            <h2>Conheça <span>Nossos Serviços</span></h2>
            <div class="card-service">
                @foreach ($card as $item)
                    <div class="card">
                        <h3>{{$item->post_title}}</h3>
                        <a href="">
                            <span>
                                <img src="{{url('img/global/arrow-slide.svg')}}" alt="">
                            </span>
                            <button>Mais detalhes</button>
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
            <h2>Solicite Orçamento</h2>
            <a href="">
                <button>
                    Fale Conosco
                </button>
            </a>
        </div>
    </div>
</main>
