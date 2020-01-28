@extends('layouts.app')

@section('content')

<h1>Home page</h1>



{{-- fancybox --}}
<a href="https://images.pexels.com/photos/3494913/pexels-photo-3494913.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" data-fancybox="gallery" data-caption="Caption #2">
	<img src="https://images.pexels.com/photos/3494913/pexels-photo-3494913.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
</a>

<br>
{{-- slick carousel --}}

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

{{-- vide model --}}
<video-model
imgurl="https://images.pexels.com/photos/3527542/pexels-photo-3527542.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
videolink="https://www.youtube.com/embed/rMNAdHqGMhs"></video-model>

<section class="py-5">
 <div class="container">
  <div class="row justify-content-center">
   {{-- fontawesome --}}
      <h1><i class="fab fa-facebook-f"></i></h1>
  </div>
 </div>
</section>
@endsection