@extends('layouts.app')

@section('content')

<h1>Home page</h1>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Fnacybox</h2>
                <a href="https://github.com/fancyapps/fancybox" target="_blank">More Info</a>
                {{-- fancybox --}}
                    <a href="https://images.pexels.com/photos/3494913/pexels-photo-3494913.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" data-fancybox="gallery" data-caption="Caption #2">
                        <img src="https://images.pexels.com/photos/3494913/pexels-photo-3494913.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                    </a>
                    <a href="https://images.pexels.com/photos/3494913/pexels-photo-3494913.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" data-fancybox="gallery" data-caption="Caption #2">
                        <img src="https://images.pexels.com/photos/3494913/pexels-photo-3494913.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
                    </a>
                    <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            {{-- slick carousel --}}
                <h2>Slick carousel</h2>
                <a href="https://kenwheeler.github.io/slick/" target="_blank">More Info</a>
            <div class="your-class">
                <div>
                <img src="https://images.pexels.com/photos/3341605/pexels-photo-3341605.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-fluid">
                </div>
                <div>
                <img src="https://images.pexels.com/photos/3586249/pexels-photo-3586249.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-fluid">
                </div>
                <div>
                <img src="https://images.pexels.com/photos/3527542/pexels-photo-3527542.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" class="img-fluid">
                </div>
            </div>
            <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-auto">
                {{-- vide model --}}
                <h2>Video Model</h2>
                <video-model
                imgurl="https://images.pexels.com/photos/3527542/pexels-photo-3527542.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                videolink="https://www.youtube.com/embed/rMNAdHqGMhs">
                </video-model>

                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <section class="py-5">
                    <div class="container">
                    <div class="row justify-content-center">
                    {{-- fontawesome --}}
                        <h1><i class="fab fa-facebook-f"></i></h1>
                    </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<br>




@endsection