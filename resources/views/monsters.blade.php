@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-dark">
                    <h class="card-header">Dashboard</h>
                    <div class="container-fluid">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                            <div class="carousel-inner row" role="listbox">
                                @foreach($monsters as $key => $monster)
                                    @if($loop->first)
                                        <div class="carousel-item col-md-4 active">
                                    @else
                                        <div class="carousel-item col-md-4">
                                    @endif
                                        <a href="{{route('monster', $key)}}">
                                            <div class="imageContainer w-100">
                                                <img class="image rounded w-100" src="{{$monster->__get('imgPath')}}" alt="">
                                                <p class="overlay w-100">
                                                    {{$monster->__get('name')}},
                                                    Level ({{$monster->__get('level')}}),
                                                    Hp ({{$monster->__get('hp')}}),
                                                    Atk ({{$monster->__get('atk')}}),
                                                    Def ({{$monster->__get('def')}}),
                                                    Eff: {{$monster->__get('effect')}}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <i class="carousel-control-prev-icon"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                                <i class="carousel-control-next-icon"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <style>
        /*
        CC 2.0 License Iatek LLC 2018
        Attribution required
        */

        @media (min-width: 768px) {

            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active + .carousel-item,
            .carousel-inner .active + .carousel-item + .carousel-item {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                transition: none;
                margin-right: initial;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }

        }
    </style>
@endsection

@section('script')
    <script>
        $('#carouselExample').on('slide.bs.carousel', function (e) {

            /*

            CC 2.0 License Iatek LLC 2018
            Attribution required

            */

            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 3;
            var totalItems = $('.carousel-item').length;

            if (idx >= totalItems-(itemsPerSlide-1)) {
                var it = itemsPerSlide - (totalItems - idx);
                for (var i=0; i<it; i++) {
                    // append slides to end
                    if (e.direction=="left") {
                        $('.carousel-item').eq(i).appendTo('.carousel-inner');
                    }
                    else {
                        $('.carousel-item').eq(0).appendTo('.carousel-inner');
                    }
                }
            }
        });
    </script>
@endsection