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


<section>
    @if($errors->all())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="message message--error">{{$error}}</li>
        @endforeach
    </ul>
@endif

<div class="container-main">
   
   <div class="container-form">
    @if(session()->has('success'))
        <div class="message message--success">{{session()->get('success')}}</div>
    @endif
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">
                <span class="text">Nome:</span>
                <input class="form-vaga__input" name="nome" type="text" class="input" >
            </label>
            <label for="">
                <span class="text">Vaga:</span>
                    <select name="vaga" id="">
                        <option value="{{$vagaSelecionada}}" selected>{{$vagaSelecionada}}</option>
                        @foreach ($vagas as $vaga)
                        <option value="{{$vaga}}" >{{$vaga}}</option>
                        @endforeach
                    </select>
            </label>

            <div class="flex-input">
                    <label for="" id="email">
                        <span class="text">Email:</span>
                        <input class="form-vaga__input"  name="email" type="email" class="input" >
                    </label>
                    <label for="">
                        <span class="text">Telefone:</span>
                        <input  id="telefone" data-mask="telephone" class="form-vaga__input" name="telefone" type="tel" class="input" >
                    </label>
            </div>
            <label for="">
                <span>Tempo Integral:</span>
                <label for="" class="radio1">
                    <input type="radio"  name="tempo_integral" value="sim">
                    sim
                    <input type="radio" name="tempo_integral" value="não">
                    não
                </label>

            </label>
            <label for="">
                <span>Tempo Parcial:</span>
                <label for="" class="radio">                   
                    <input type="radio" name="tempo_parcial" value="sim">
                    sim
                    <input type="radio" name="tempo_parcial" value="não">
                    não
                </label>

            </label>
            <label for="">
                <span class="text">Compartilhe seu perfil no LinkedIn:</span>
                <input class="form-vaga__input" name="link_linkedin" type="text" class="input" >
            </label>
            <label for="">
                <span class="text">Preencha o País:</span>
                <select name="pais" id="">
                    @foreach ($paises as $pais)
                       <option value="{{$pais->nome_pais}}" name="pais">{{$pais->nome_pais}}</option>
                    @endforeach
                </select>
            </label>
            <label for="">
                <span class="text">Conte-nos um pouco sobre você (Principais Qualificações):</span>
                <textarea class="form-vaga__input" name="sobre" id="" cols="30" rows="10"></textarea>
            </label>
            <label for="">
                <span>Você concorda em aceitar comunicações relacionadas a eventos, novas vagas e outras promoções a partir da casadasvagas.com.br:</span>
                <label for="" class="radio2">
                    <input type="radio" name="termo_comunicacao" value="sim">
                    sim
                    <input type="radio" name="termo_comunicacao" value="não">
                    não
                </label>

            </label>
            {{-- <label for="">
                <span class="text">Curriculo:</span>
                <input type="file" class="curriculo" name="curriculo" id="">
            </label> --}}

            <div class="curriculo">
                <input type="file" name="curriculo" id="curriculo" class="curriculo__input"/>
                <label class="curriculo__label" for="curriculo">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload" class="svg-inline--fa fa-upload fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                    </svg>
                    <span>Upload file</span>
                </label>
            </div>
            <label for="" class="form-button">
                <span>
                    <button type="submit">enviar</button>
                </span>
            </label>
        </form>
   </div>
</div>

</section>


