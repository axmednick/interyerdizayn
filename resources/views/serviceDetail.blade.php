@extends('layouts.app')
@section('content')

    <section class="headings">
        <div class="text-heading">
            <div class="container">
                <h1 class="text-center">{{$service->title}}</h1>
            </div>
        </div>
    </section>
    <div class="road">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{route('index')}}">Home</a><span>»</span><span>{{$service->name}}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION BLOG -->
    <section class="blog blog-section bg-white list-side">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 blog-pots">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="news-item details no-mb2">
                                <a class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{$service->getFirstMediaUrl('image')}}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text details pb-0">
                                    <a ><h3>{{$service->name}}</h3></a>

                                    <div class="news-item-descr big-news details visib mb-0">

                                        {!! $service->content !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection
