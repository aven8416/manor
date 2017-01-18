

<!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">







            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container js_nav-item">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
                    @if(isset($menu))
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav navbar-nav-right">
                        @foreach($menu as $item)
                        <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#{{$item['alias']}}">{{$item['title']}}</a></li>
                            @endforeach
                    </ul>
                </div>
            </div>
        @endif
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->



@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}

    </div>


@endif


@if(count($errors) > 0)
    <div class="alert alert-danger">

        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>

@endif
