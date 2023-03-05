<x-Breadcrumb text='Contato'></x-Breadcrumb>
<main class="contact">
   <div class="container-main">
    <h2 class="contact-title">Fale Conosco</h2>
    <div class="container-form">
        <form action="{{route('contato.store')}}" method="POST">
           {{ csrf_field() }}

           @if (count($errors) > 0)
             <p>Preencha os dados corretamente</p>
             <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
             </ul>
           @endif
           @if ($message = Session::get('success'))
            <p>Formulario enviado</p>
            {{$message}}
           @endif

          @if ($message = Session::get('error'))
            <p>opssss!</p> {{$message}}
          @endif
            <label for="">
                <input type="text" name="nome" placeholder="Nome:">
            </label>
            <span>
                <label for="">
                    <input type="email" name="email" id="" placeholder="E-mail:">
                </label>
                <label for="">
                    <input type="tel" name="telefone" id="" placeholder="Telefone/Whatsapp">
                </label>
            </span>
            <label for="">
                <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
            </label>
            <input class="submit" type="submit" value="Enviar">
        </form>
        <div class="contact-info">
           <a href="">
                <span class="svg">
                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg fill="#000000" width="800px" height="800px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M11.748 5.773S11.418 5 10.914 5c-.496 0-.754.229-.926.387S6.938 7.91 6.938 7.91s-.837.731-.773 2.106c.054 1.375.323 3.332 1.719 6.058 1.386 2.72 4.855 6.876 7.047 8.337 0 0 2.031 1.558 3.921 2.191.549.173 1.647.398 1.903.398.26 0 .719 0 1.246-.385.536-.389 3.543-2.807 3.543-2.807s.736-.665-.119-1.438c-.859-.773-3.467-2.492-4.025-2.944-.559-.459-1.355-.257-1.699.054-.343.313-.956.828-1.031.893-.112.086-.419.365-.763.226-.438-.173-2.234-1.148-3.899-3.426-1.655-2.276-1.837-3.02-2.084-3.824a.56.56 0 0 1 .225-.657c.248-.172 1.161-.933 1.161-.933s.591-.583.344-1.27-1.906-4.716-1.906-4.716z"/></svg>
                </span>
                 <span>
                    <p class="contact-info__text">Número de Telefone</p>
                    <p>+598 94 705 183</p>
                 </span>
            </a>
            <a href="">
                <span class="svg">
                    <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.6 6.31999C16.8669 5.58141 15.9943 4.99596 15.033 4.59767C14.0716 4.19938 13.0406 3.99622 12 3.99999C10.6089 4.00135 9.24248 4.36819 8.03771 5.06377C6.83294 5.75935 5.83208 6.75926 5.13534 7.96335C4.4386 9.16745 4.07046 10.5335 4.06776 11.9246C4.06507 13.3158 4.42793 14.6832 5.12 15.89L4 20L8.2 18.9C9.35975 19.5452 10.6629 19.8891 11.99 19.9C14.0997 19.9001 16.124 19.0668 17.6222 17.5816C19.1205 16.0965 19.9715 14.0796 19.99 11.97C19.983 10.9173 19.7682 9.87634 19.3581 8.9068C18.948 7.93725 18.3505 7.05819 17.6 6.31999ZM12 18.53C10.8177 18.5308 9.65701 18.213 8.64 17.61L8.4 17.46L5.91 18.12L6.57 15.69L6.41 15.44C5.55925 14.0667 5.24174 12.429 5.51762 10.8372C5.7935 9.24545 6.64361 7.81015 7.9069 6.80322C9.1702 5.79628 10.7589 5.28765 12.3721 5.37368C13.9853 5.4597 15.511 6.13441 16.66 7.26999C17.916 8.49818 18.635 10.1735 18.66 11.93C18.6442 13.6859 17.9355 15.3645 16.6882 16.6006C15.441 17.8366 13.756 18.5301 12 18.53ZM15.61 13.59C15.41 13.49 14.44 13.01 14.26 12.95C14.08 12.89 13.94 12.85 13.81 13.05C13.6144 13.3181 13.404 13.5751 13.18 13.82C13.07 13.96 12.95 13.97 12.75 13.82C11.6097 13.3694 10.6597 12.5394 10.06 11.47C9.85 11.12 10.26 11.14 10.64 10.39C10.6681 10.3359 10.6827 10.2759 10.6827 10.215C10.6827 10.1541 10.6681 10.0941 10.64 10.04C10.64 9.93999 10.19 8.95999 10.03 8.56999C9.87 8.17999 9.71 8.23999 9.58 8.22999H9.19C9.08895 8.23154 8.9894 8.25465 8.898 8.29776C8.8066 8.34087 8.72546 8.403 8.66 8.47999C8.43562 8.69817 8.26061 8.96191 8.14676 9.25343C8.03291 9.54495 7.98287 9.85749 8 10.17C8.0627 10.9181 8.34443 11.6311 8.81 12.22C9.6622 13.4958 10.8301 14.5293 12.2 15.22C12.9185 15.6394 13.7535 15.8148 14.58 15.72C14.8552 15.6654 15.1159 15.5535 15.345 15.3915C15.5742 15.2296 15.7667 15.0212 15.91 14.78C16.0428 14.4856 16.0846 14.1583 16.03 13.84C15.94 13.74 15.81 13.69 15.61 13.59Z" fill="#000000"/>
                    </svg>
                </span>

                 <span>
                    <p class="contact-info__text">Número de Whatsapp</p>
                    <p>+598 94 705 183</p>
                 </span>
            </a>
        </div>
    </div>
   </div>
</main>
<section>
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
</section>
