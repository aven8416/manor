<!--========== SLIDER ==========-->
@if(isset($stories) && is_object($stories))
    @foreach($stories as $k=>$story)

        @if ($k==0)
<div class="promo-block">
    <div class="container">
        <div class="margin-b-40">
           {!! $story->text!!}
        </div>
        <a class="js_popup-youtube btn-theme btn-theme-md btn-white-bg text-uppercase" href="https://www.youtube.com/watch?v=cll3dDlJ1JQ" title="видео"><i class="btn-icon icon-control-play"></i> Документальное видео</a>
    </div>
</div>
<!--========== SLIDER ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Products -->

        @elseif($k==1)
<div id="products" >
    <div class="container content-lg">
        <div class="row text-center margin-b-40">
            <div class="col-sm-6 col-sm-offset-3">
                {!!  $story->text!!}
            </div>
        </div>
        <!--// end row -->

        <!--// end row -->
    </div>


    @elseif($k==2)
    <div class="container-full-width">
        <div class="row row-space-2">
            <div class="col-sm-6 sm-margin-b-4">
                <img class="img-responsive" src="{{asset('assets/img/970x647/01.jpg')}}" alt="Image">
            </div>
            <div class="col-sm-6">
                <img class="img-responsive" src="{{asset('assets/img/970x647/03.jpg')}}" alt="Image">
            </div>
        </div>
        <!--// end row -->
    </div>


    <div>
        <div class="container content-lg">
            <div class="row text-center margin-b-40">
                <div class="col-sm-6 col-sm-offset-3">
                    {!! $story->text!!}
                </div>
            </div>
            <!--// end row -->

        </div>

    </div>        <!-- End Products -->


    @elseif($k==3)
    <!-- Promo Banner -->
    <div class="promo-banner">
        <div class="container-sm content-lg">
            {!!  $story->text!!}
        </div>
    </div>
    <!-- End Promo Banner -->

    @elseif($k==4)
    <div  class = "text-block-3">
        <div class="container content-lg">
            <div class="row text-center margin-b-40">
                <div class="col-sm-6 col-sm-offset-3">
                    {!! $story->text!!}
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    @endif

    @endforeach
    @endif



    <!-- Work -->
    <div id="work">
        <div class="content-md container">
            <!-- Masonry Grid -->
            <div class="masonry-grid row row-space-2">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>



                @if (isset ($portfolios) && is_object($portfolios ))
                    @foreach($portfolios as $k =>$portfolio)
                            <div class="masonry-grid-item col-xs-12 col-sm-6 {{($k==0) ? 'col-md-8 ' : 'col-md-4'}}   margin-b-4"  >
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="{!!asset('assets/img/' . $portfolio->image)  !!}" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Спрятать</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">{!! $portfolio->title !!}</h3>
                                    <span>{!! $portfolio->subtitle !!}</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 ">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            {!! $portfolio->text!!}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>

                @endforeach
                @endif

            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>
    <!-- End Work -->



    <!-- Testimonials -->
    <div class="content-md container">
        <div class="row">
            <div class="col-sm-9">
                <h2>Отзывы</h2>

                <!-- Swiper Testimonials -->
                <div class="swiper-slider swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">

                        @if (isset($reviewers))

                            @foreach($reviewers as $item)
                        <div class="swiper-slide">
                            <blockquote class="blockquote">
                                <div class="margin-b-20">
                            <h3> {{$item['title']}}</h3>
                                </div>
                                <div class="margin-b-20">
                                  <p>{{$item['text']}}</p>
                                </div>
                                <p><span class="fweight-700 color-link">{{$item['reviewer']}} </span>, {{$item['address']}} </p>
                            </blockquote>


                        </div>
                            @endforeach

                        @endif


                    </div>
                    <!-- End Swiper Wrapper -->

                    <!-- Pagination -->
                    <div class="swiper-testimonials-pagination"></div>
                </div>
                <!-- End Swiper Testimonials -->
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Testimonials -->

    <!-- Contact -->
    <div class="feedback-position">
        <div id="contact">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft delay-06s">
                    <h2 class="feedback-header">Форма обратной связи</h2>
                    <div class="form">
                        <form action="{{route('home') }}" method = "post">
                            <input class="input-text" type="text" name="name" value="Ваше Имя *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <input class="input-text" type="email" name="email" value="E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
                            <textarea class="input-text text-area" name="text" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Ваше Сообщение *</textarea>
                            <input class="input-btn" type="submit" value="Отправить">
                            <input class="input-btn" type="hidden"  name="_token" value="{{csrf_token()}}">
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <!--========== END PAGE LAYOUT ==========-->
