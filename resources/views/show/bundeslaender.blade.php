@extends('layout')
@section('content')
<section class="home" id="home">
                <img src="/img/allegra.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__data-title">Datenschutzerkl√§rung</h1>
                    </div>

                    <div class="home__social pb-5 mb-5">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>                  
                </div>
            </section>
            <section class="container"> 
            @foreach($regions as $region)
@if($region->Region == $ortsname)
    @foreach($ortat as $orte)
 
        @if ($orte->bundesland == $region->RegionShort)
          <p>  <a class="link-dark" href="/{{$orte->ort}}/bausachverstaendiger">Baugutachter {{$orte->ort}}</a><p>
       
        @endif
    @endforeach
@endif
@endforeach  


           
            </section>

@endsection