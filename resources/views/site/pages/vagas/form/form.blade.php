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
@if(session()->has('success'))
    <div class="message message--success">{{session()->get('success')}}</div>
@endif
<div class="container-main">
   <div class="container-form">
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
                <label for="">
                    <input type="radio"  name="tempo_integral" value="sim">
                    sim
                    <input type="radio" name="tempo_integral" value="não">
                    não
                </label>

            </label>
            <label for="">
                <span>Tempo Parcial:</span>
                <label for="">
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
                <label for="">
                    <input type="radio" name="termo_comunicacao" value="sim">
                    sim
                    <input type="radio" name="termo_comunicacao" value="não">
                    não
                </label>

            </label>
            <label for="">
                <span class="text">Curriculo:</span>
                <input type="file" name="curriculo" id="">
            </label>
            <label for="">
                <span>
                    <button type="submit">enviar</button>
                </span>
            </label>
        </form>
   </div>
</div>

</section>


