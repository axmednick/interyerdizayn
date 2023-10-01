@extends('layouts.app')
@section('content')
    <section class="headings">
        <div class="text-heading">
            <div class="container">
                <h1 class="text-center">BLOG</h1>
            </div>
        </div>
    </section>
    <div class="road">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="index.html">Home</a><span>»</span><span>BLOG</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION BLOG -->
    <section class="blog-section">
        <div class="container">
            <div class="news-wrap">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="news-item news-item-sm">
                            <a href="{{route('blogDetail',$blog->id)}}" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="resp-img" src="{{$blog->getFirstMediaUrl('main')}}" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="{{route('blogDetail',$blog->id)}}"><h3>{{$blog->title}}</h3></a>
                                <div class="dates">
                                    <span class="date">{{$blog->created_at->format('Y-m-d')}}</span>

                                </div>
                                <div class="news-item-descr">
                                    <p>{{$blog->description}}</p>                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


            </div>
            <nav aria-label="..." class="pt-5">
                {{$blogs->links()}}
            </nav>
        </div>
    </section>
    <!-- END SECTION BLOG -->
@endsection
