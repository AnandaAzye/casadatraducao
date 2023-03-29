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
                            vagas
                        </a>
                    </li>
                </ul>
                <h1>Vagas</h1>
            </div>
        </div>
    </div>
</section>

<main class="vagas">
    @include('site.pages.vagas.search')
    @if(count($vagas) > 0 )
    <div class="container-main">
        <div class="container-card">

            @foreach ($vagas as $vaga)
                <div class="card-vagas">

                        <h3>
                            {{$vaga->post_title}}
                        </h3>
                        <p class="card-vagas__description">
                            {!!$vaga->post_content!!}
                            {{-- {{ strip_tags(\Str::limit($vaga->post_content, 600, '...')) }} --}}
                        </p>
                       <div class="card-vagas__options">
                            <span class="card-vaga__ver">ver mais</span>
                            <span class="card-vaga__recolher">recolher</span>
                       </div>
                        <a href="{{url('/vagas/'.$vaga->post_name)}}" class="card-vagas__button">
                            <button>Enviar Currículo</button>
                        </a>
                </div>
            @endforeach
            @if (count($vagas) > 0)
            <div class="container-pagination">
                {{ $vagas->links('site.includes.pagination') }}
            </div>
            @endif
        </div>
    </div>
    @endif

    @if(count($vagas) == 0 && isset($_GET["search"]))
        <div class="container-erro__search">
            <h3 class="erro-search">Nenhum resultado com: "<span>{{$_GET["search"]}}</span>"</h3>
            <a href="{{route('vagas')}}">
                <button>
                    Conheça todas as vagas!
                </button>
            </a>
        </div>
    @elseif (count($vagas) == 0)
        <div class="container-erro__search">
            <h3 class="erro-search">Nenhuma vaga <span>cadastrada!</span></h3>
            <a href="{{route('index')}}">
                <button>
                    Ir para a Home
                </button>
            </a>
        </div>
    @endif
</main>

<script>
    let ver = document.querySelectorAll('.card-vaga__ver');
    let recolher = document.querySelectorAll('.card-vaga__recolher');
    let conteudo = document.querySelectorAll('.card-vagas__description')

    console.log(ver, recolher, conteudo)
    conteudo.forEach((item, index) => {
        recolher.forEach((itemRecolher, recolherIndex)=>{
            ver.forEach((itemVer, verIndex)=>{
                itemVer.addEventListener('click', ()=>{
                    if((verIndex === index)){
                        item.style.height = "100%";
                        itemVer.style.display = "none";
                        if(recolherIndex === index){
                            itemRecolher.style.display = "block"
                        }

                    }
                })
                itemRecolher.addEventListener('click', ()=>{
                if((recolherIndex === index)){
                    item.style.height = "150px"
                    itemVer.style.display = "block";
                    itemRecolher.style.display = "none"
                }
            })
            })


        })
    });

    // ver.addEventListener('click', ()=>{
    //     conteudo.style.height = "100%"
    // })
    // recolher.addEventListener('click', ()=>{
    //     conteudo.style.height = "200px"
    // })

</script>
