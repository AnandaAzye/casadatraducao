<div class="container-main ">
    <h2>
        Últimas Vagas
    </h2>
    <form action="" class="search" action="{{ URL('/vagas')}}" method="GET">
        <select name="category" id="select">
            <option selected>Escolha uma categoria</option>
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
