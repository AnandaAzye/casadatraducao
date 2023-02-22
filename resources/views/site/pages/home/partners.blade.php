<section>
    <div class="container-partners">
        <div class="container-main">
            <h2 class="container-partners__title">Parceiros</h2>
            <div class="container-partners__slide">
                <!-- Slider main container -->
                <div class="swiper partners">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($parceiros as $item)
                    <a  href="" class="swiper-slide">
                        <img src="{{$item->image}}" alt="{{$item->post_title}}">
                    </a>
                    @endforeach
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </div>
</section>
