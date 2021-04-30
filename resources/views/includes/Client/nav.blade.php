    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href=""><img src="{{ asset('client/images/logo.png') }}" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="/">Home</a></li>
                        <li><a class="nav-link" href="">About</a></li>
                        <li><a class="nav-link" href="{{ route('watch.index') }}">watch</a></li>
                    </ul>
                </div>
                {{-- <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="{{ asset('client/images/search_icon.png') }}" alt="#" />
                    </a>
                </div> --}}
            </div>
        </nav>
    </header>
    <!-- End header -->
