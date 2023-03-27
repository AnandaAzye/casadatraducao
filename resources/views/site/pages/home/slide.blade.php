<main class="slide-home">
    <!-- Slider main container -->
<div class="swiper home">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->

      @foreach ($posts as $item)

        <div class="swiper-slide">
            <div class="slide-home_container">
                <div class="slide-home_image">
                    <img src="{{$item->image}}" alt="">
                </div>
                <div class="container-main">
                  <div class="slide-home_content">
                      <h2>
                          <span>

                              @if (app()->getLocale() == 'pt')
                                {{$item->post_title}}
                               @else
                               {{$item->acf->titulo_em_ingles}}
                               @endif
                            </span>
                        </h2>

                        <a href="" class="default-button">
                            <button>
                                @if (app()->getLocale() == 'pt')
                                    {{$item->acf->texto}}
                                @else
                                    {{$item->acf->texto_do_botao_em_ingles}}
                                @endif
                            </button>
                        </a>
                   </div>
                </div>
            </div>

        </div>
    @endforeach

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="container-slide-pagination">
        <div class="slide-pagination">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>



    <!-- If we need scrollbar -->
    {{-- <div class="swiper-scrollbar"></div> --}}
  </div>

</main>
