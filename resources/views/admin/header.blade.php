
    <!-- Title -->

        <div class="container">
            <div class="margin-b-40">
        <h2 class="text-center page-header">{{$title}}</h2>
    </div>
        </div>

    <!--/Title -->


<!-- Container -->
    <div class="container">
        <div class="row text-center ">
        <div class="col-md-3 table-bordered padding-t-10 ">
            <a  href="{{route('pages')}}">
                    <h5>Страницы</h5>
                </a>

        </div>
            <div class="col-md-3 table-bordered ">
            <a  href="{{route('portfolio')}}">
                    <h5>Порфолио</h5>
                </a>
            </div>
                <div class="col-md-3 table-bordered">
            <a href="{{route('story')}}">
                    <h5>История</h5>
                </a>
                </div>
                    <div class="col-md-3 table-bordered">
            <a href="{{route('review')}}">
                    <h5>Отзывы</h5>
                </a>
                </div>
</div>

    </div>
