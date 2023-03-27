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
    <div class="container-main ">
        <h2>
            Últimas Vagas
        </h2>
        <form action="" class="search">
            <select name="" id="">
                <option selected>Selecione uma categoria</option>
                @foreach($category as $itemCategory)
                    <option value="{{$itemCategory->name}}" data="refreshing-a-page__item" name="{{$itemCategory->name}}">
                        {{$itemCategory->name}}
                    </option>
                @endforeach
            </select>
            <span class="vagas-input">
                <input class="blog-form__"type="text"  id="search" name="search" placeholder="O que você procura?">
                <button><img src={{URL('/img/global/search.svg')}} alt=""></button>
            </span>
        </form>
    </div>

    <div class="container-main">
        <div class="container-card">
            @foreach ($vagas as $vaga)
                <div class="card-vagas">
                        <h3>
                            {{$vaga->post_title}}
                        </h3>
                        <p>
                            {{ strip_tags(\Str::limit($vaga->post_content, 600, '...')) }}
                        </p>
                </div>
            @endforeach
        </div>
    </div>
</main>
