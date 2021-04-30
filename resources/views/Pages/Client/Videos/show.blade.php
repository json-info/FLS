<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Perfect - Responsive HTML5 Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('includes.Client.style')

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('client/images/loader.gif') }}" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    @include('includes.Client.nav');
        <div class="container" style="margin: 10%;">
            <div class="row">
                @foreach ($videos as $video)
                    @if ($video->category_id == $id)
                            <div class="col-md-4" >
                                <div class="card" style="width: 18rem; margin: 2%;">
                                    <iframe src="/image/{{ $video->image }}" frameborder="0" style="width: 100%; height: 100%;"></iframe>
                                    <div class="card-body">
                                      <h5 class="card-title" style="text-align: center">{{ $video->name }}</h5>
                                      
                                    </div>
                                  </div>
                            </div>
                       
                    @endif
                @endforeach
            
            </div>
        </div>
    @include('includes.Client.footer')

    @include('includes.Client.script');
</body>

</html>