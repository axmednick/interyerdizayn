@extends('layouts.app')
@section('content')

    <!-- SLIDER START -->
    <div id="rev_slider_26_1_wrapper " class="rev_slider_wrapper fullscreen-container home-rev-slider mb-0"
         data-alias="mask-showcase" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_26_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
                @foreach($sliders as $slider)

                    <!-- SLIDE 1 -->
                    <li data-index="rs-7{{$loop->iteration}}" data-transition="fade" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                        data-masterspeed="300" data-thumb="images/slider/p-1.jpg" data-rotate="0"
                        data-saveperformance="off" data-title="" data-param1="1" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{$slider->getFirstMediaUrl('image')}}" data-bgcolor='#f8f8f8' style='' alt=""
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                             data-bgparallax="off" class="rev-slidebg" data-no-retina>

                        <!-- LAYER 1  right image overlay dark-->
                        <div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup"
                             id="slide-73-layer-1" data-x="['right','right','right','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['0','0','0','0']" data-fontweight="['100','100','400','400']"
                             data-width="['full','full','full','full']" data-height="['full','full','full','full']"
                             data-whitespace="nowrap" data-type="shape" data-basealign="slide"
                             data-responsive_offset="off" data-responsive="off"
                             data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:0;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             style="z-index: 6;text-transform:left;background-color:rgba(0,0,0,0.5);">
                        </div>

                        <!-- LAYERS 2 number block-->
                        <div class="tp-caption rev-btn  tp-resizeme slider-block sx-bg-primary" id="slide-73-layer-2"
                             data-x="['left','left','left','center']" data-hoffset="['60','60','30','0']"
                             data-y="['middle','middle','middle','top']" data-voffset="['-220','-220','-220','50']"
                             data-fontweight="['600','600','600','600']" data-fontsize="['120','120','80','80']"
                             data-lineheight="['120','120','80','80']" data-height="none" data-whitespace="nowrap"
                             data-type="button" data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                             data-textAlign="['left','left','left','center']" data-paddingtop="[20,20,20,20]"
                             data-paddingright="[10,10,10,10]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[10,10,10,10]"
                             style="z-index: 10; font-family: 'Poppins', sans-serif;">{{$loop->iteration}}</div>

                        <!-- LAYER 3  Thin text title-->
                        <div class="tp-caption   tp-resizeme slider-tag-line" id="slide-74-layer-3"
                             data-x="['left','left','left','center']" data-hoffset="['60','60','30','0']"
                             data-y="['middle','middle','middle','top']" data-voffset="['-80','-80','-80','170']"
                             data-fontsize="['64','64','60','40']" data-lineheight="['74','74','70','50']"
                             data-width="['700','650','620','380']" data-height="none" data-whitespace="nowrap"
                             data-type="text" data-responsive_offset="on" data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['left','left','left','center']" data-paddingtop="[10,10,10,10]"
                             data-paddingright="[20,20,20,0]" data-paddingbottom="[10,10,10,10]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 10; font-weight:200; letter-spacing:10px; color: #fff;font-family: 'Poppins', sans-serif; text-transform:uppercase">{{$slider->title}}</div>

                        <!-- LAYER 4  Bold Title-->
                        <div class="tp-caption   tp-resizeme" id="slide-74-layer-4"
                             data-x="['left','left','left','center']" data-hoffset="['60','60','30','0']"
                             data-y="['middle','middle','middle','top']" data-voffset="['10','10','10','230']"
                             data-fontsize="['64','64','60','40']" data-lineheight="['74','74','70','50']"
                             data-width="['700','700','700','700']" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['left','left','left','center']" data-paddingtop="[20,20,20,20]"
                             data-paddingright="[20,20,20,10]" data-paddingbottom="[30,30,30,30]"
                             data-paddingleft="[0,0,0,10]"
                             style="z-index: 10; text-transform:uppercase; letter-spacing:10px; white-space: normal;font-weight: 600; color: #fff;font-family: 'Poppins', sans-serif;">{{$slider->sub_title}}</div>

                        <!-- LAYER 5  Paragraph-->
                        <div class="tp-caption   tp-resizeme" id="slide-74-layer-5"
                             data-x="['left','left','left','center']" data-hoffset="['60','60','30','0']"
                             data-y="['middle','middle','middle','top']" data-voffset="['90','90','90','300']"
                             data-fontsize="['20','20','20','20']" data-lineheight="['30','30','30','30']"
                             data-width="['600','600','600','380']" data-height="none" data-whitespace="normal"
                             data-type="text" data-responsive_offset="on" data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                             data-textAlign="['left','left','left','center']" data-paddingtop="[20,20,20,20]"
                             data-paddingright="[20,20,20,20]" data-paddingbottom="[30,30,30,30]"
                             data-paddingleft="[0,0,0,0]"
                             style="z-index: 10; white-space: normal; color: #fff;font-family: 'Poppins', sans-serif;">{{$slider->description}}</div>
                        @if($slider->button_url && $slider->button_text)
                            <!-- LAYER 6  Read More-->
                            <div class="tp-caption rev-btn  tp-resizeme" id="slide-74-layer-6"
                                 data-x="['left','left','left','center']" data-hoffset="['60','60','30','0']"
                                 data-y="['middle','middle','middle','top']" data-voffset="['180','180','180','410']"
                                 data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                 data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                                 data-textAlign="['left','left','left','center']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                 data-paddingleft="[0,0,0,0]" style="z-index:9; line-height:30px;"><a
                                    href="{{$slider->button_url}}"
                                    class="site-button-secondry btn-half"><span> {{$slider->button_text}}</span></a>
                            </div>
                        @endif
                        <!-- LAYER 7 left dark Block -->
                        <div class="tp-caption rev-btn  tp-resizeme rev-slider-white-block" id="slide-74-layer-7"
                             data-x="['right','right','left','right']" data-hoffset="['870','570','0','870']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full" data-height="full" data-whitespace="nowrap" data-type="button"
                             data-responsive_offset="on" data-frames='[{"from":"y:[-0%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":0,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":0,"to":"y:[-0%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                             data-textAlign="['left','left','left','left']" data-paddingtop="[250,250,250,250]"
                             data-paddingright="[250,150,150,150]" data-paddingbottom="[250,250,250,250]"
                             data-paddingleft="[250,150,250,250]"
                             style="z-index: 6; width:6000px;background-color:{{$slider->color}} ;height:100vh;"></div>

                        <!-- Border left Part -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-74-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full" data-height="full" data-whitespace="nowrap"
                             data-visibility="['on','on','off','off']" data-type="shape" data-basealign="slide"
                             data-responsive_offset="off" data-responsive="off"
                             data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             style="z-index:8;background-color:rgba(0, 0, 0, 0);border-left:40px solid #eef1f2;"></div>

                        <!-- Border bottom Part -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-74-layer-7"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full" data-height="full" data-whitespace="nowrap"
                             data-visibility="['on','on','off','off']" data-type="shape" data-basealign="slide"
                             data-responsive_offset="off" data-responsive="off"
                             data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             style="z-index:8;background-color:rgba(0, 0, 0, 0);border-bottom:80px solid #eef1f2;"></div>
                    </li>

                @endforeach

            </ul>
            <div class="tp-bannertimer"></div>
            <!-- left side social bar-->
            <div class="slide-left-social">
                <ul class="clearfix">

                    @if($setting->facebook)
                        <li><a href="{{$setting->facebook}}" class="sx-title-swip" data-hover="Linkedin">Facebook</a>
                        </li>
                    @endif
                    @if($setting->linkedin)
                        <li><a href="{{$setting->linkedin}}" class="sx-title-swip" data-hover="Linkedin">Linkedin</a>
                        </li>
                    @endif
                    @if($setting->instagram)
                        <li><a href="{{$setting->instagram}}" class="sx-title-swip" data-hover="Linkedin">Instagram</a>
                        </li>
                    @endif
                    @if($setting->youtube)
                        <li><a href="{{$setting->youtube}}" class="sx-title-swip" data-hover="Linkedin">Youtube</a></li>
                    @endif
                    @if($setting->whatsapp)
                        <li><a href="{{$setting->whatsapp}}" class="sx-title-swip" data-hover="Linkedin">Whatsapp</a>
                        </li>
                    @endif

                </ul>
            </div>

        </div>
    </div>
    <!-- SLIDER END -->

    <!-- START SECTION RECENTLY WORKS -->
    <section class="recently portfolio bg-white-3">
        <div class="container-fluid recently-slider">
            <div class="section-title">
                <h3>Son işlərimiz</h3>
                <h2>Works</h2>
            </div>
            <div class="portfolio right-slider">
                <div class="owl-carousel home5-right-slider">

                    @foreach($projects as $project)
                        <a href="{{route('projectDetail',$project->id)}}" class="recent-16" data-aos="fade-up">
                            <div class="recent-img16 img-center"
                                 style="background-image: url({{$project->getFirstMediaUrl('main')}});"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">{{$project->title}}</div>

                            </div>
                            <div class="view-proper">Daha ətraflı</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION RECENTLY WORKS -->

    <!-- START SECTION INFO-HELP -->
    <section class="info-help h18">
        <div class="container">
            <div class="row info-head">
                <div class="col-lg-12 col-md-8 col-xs-8">
                    <div class="info-text" data-aos="fade-up">
                        <h3 class="text-center mb-0">Why Choose Us</h3>
                        <p class="text-center mb-4 p-0">We offer perfect interior services</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION INFO-HELP -->

    <!-- START SECTION INFO -->
    <section _ngcontent-bgi-c3="" class="featured-boxes-area">
        <div _ngcontent-bgi-c3="" class="container">
            <div _ngcontent-bgi-c3="" class="featured-boxes-inner">
                <div _ngcontent-bgi-c3="" class="row m-0">
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-fb7756"><img src="images/icons/i-5.svg"
                                                                                     width="85" height="85" alt="">
                            </div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Interior for Home</h3>
                            <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra
                                maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                                         href="project-details.html">Read More</a></div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-facd60"><img src="images/icons/i-6.svg"
                                                                                     width="85" height="85" alt="">
                            </div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Trusted by thousands</h3>
                            <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra
                                maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                                         href="project-details.html">Read More</a></div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-1ac0c6"><img src="images/icons/i-7.svg"
                                                                                     width="85" height="85" alt="">
                            </div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">Financing made easy</h3>
                            <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra
                                maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                                         href="project-details.html">Read More</a></div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-lg-3 col-sm-6 col-md-6 p-0" data-aos="fade-up">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon"><img src="images/icons/i-8.svg" width="85"
                                                                        height="85" alt=""></div>
                            <h3 _ngcontent-bgi-c3="" class="mt-5">24/7 support</h3>
                            <p _ngcontent-bgi-c3="">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn"
                                                         href="project-details.html">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION INFO -->

    <!-- START SECTION PROJECTS -->
    <section class="portfolio bg-white-5">
        <div class="container">
            <div class="section-title">
                <h3>Latest</h3>
                <h2>Projects</h2>
            </div>
            <div class="filters-group">
                <ul>
                    <li class="active" data-filter="*">Show All</li>
                    @foreach($categories as $category)
                        <li data-filter=".{{$category->slug}}">{{$category->name}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="row portfolio-items">
                @foreach($portfolioImages as $image)
                    <div class="item col-lg-4 col-md-6 {{$image['slug']}}">
                        <div class="single-portfolio">
                            <div class="portfolio-img">
                                <img src="{{$image['image']}}" alt=""/>
                                <div class="portfolio-view">
                                    <div class="item-wrap">
                                        <a class="img-poppu" href="{{$image['image']}}"
                                           data-rel="lightcase:myCollection:slideshow">
                                            <span class="plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-text">
                                <a href="#"><h4>Project</h4></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="item col-lg-4 col-sm-6 col-xs-12 landscapes last-item two"></div>
            </div>
        </div>
        <div class="box bg-3 mt-0">
            <a href="wide-no-gutter-project-4.html"
               class="button button--wayra button--border-thick button--text-upper button--size-s">View All</a>
        </div>
    </section>
    <!-- END SECTION PROJECTS -->

    <!-- START SECTION INFO-HELP -->
    <section class="info-help h17">
        <div class="container">
            <div class="row info-head">
                <div class="col-lg-6 col-md-8 col-xs-8" data-aos="fade-right">
                    <div class="info-text">
                        <h3>Living room design</h3>
                        <h5 class="mt-3">Price: $400</h5>
                        <p class="pt-2">We Help you design the best places and offer near you. Bring to the table
                            win-win survival strategies to ensure proactive domination going forward.</p>
                        <div class="inf-btn pro">
                            <a href="contact.html" class="btn btn-pro btn-secondary btn-lg">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION INFO-HELP -->

    <!-- START SECTION TESTIMONIALS -->
    <section class="testimonials bg-white-3">
        <div class="container">
            <div class="section-title">
                <h3>Happy</h3>
                <h2>Customers</h2>
            </div>
            <div class="owl-carousel style1">
                <div class="test-1" data-aos="zoom-in">
                    <h3>Lisa Smith</h3>
                    <img src="images/testimonials/ts-1.jpg" alt="">
                    <h6 class="mt-2">New York</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec,
                        suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1" data-aos="zoom-in">
                    <h3>Jhon Morris</h3>
                    <img src="images/testimonials/ts-2.jpg" alt="">
                    <h6 class="mt-2">Los Angeles</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec,
                        suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1" data-aos="zoom-in">
                    <h3>Mary Deshaw</h3>
                    <img src="images/testimonials/ts-3.jpg" alt="">
                    <h6 class="mt-2">Chicago</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec,
                        suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1" data-aos="zoom-in">
                    <h3>Gary Steven</h3>
                    <img src="images/testimonials/ts-4.jpg" alt="">
                    <h6 class="mt-2">Philadelphia</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec,
                        suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1" data-aos="zoom-in">
                    <h3>Cristy Mayer</h3>
                    <img src="images/testimonials/ts-5.jpg" alt="">
                    <h6 class="mt-2">San Francisco</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec,
                        suscipit tortor et sapien donec.</p>
                </div>
                <div class="test-1" data-aos="zoom-in">
                    <h3>Ichiro Tasaka</h3>
                    <img src="images/testimonials/ts-6.jpg" alt="">
                    <h6 class="mt-2">Houston</h6>
                    <ul class="starts text-center mb-2">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star-o"></i>
                        </li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec,
                        suscipit tortor et sapien donec.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIALS -->

    <!-- START SECTION BLOG -->
    <section class="blog-section bg-white-5">
        <div class="container">
            <div class="section-title">
                <h3>Latest</h3>
                <h2>News</h2>
            </div>
            <div class="news-wrap">
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-right">
                        <div class="news-item news-item-sm">
                            <a href="{{route('blogDetail',$blog->id)}}" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="resp-img" src="{{$blog->getFirstMediaUrl('main')}}" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="{{route('blogDetail',$blog->id)}}"><h3>{{$blog->title}}</h3></a>
                                <span class="date">{{$blog->created_at->format('Y-m-d')}}</span>
                                <div class="news-item-descr">
                                    <p>{{substr($blog->description,0,90)}}....</p>
                                </div>
                                <div class="news-item-bottom">
                                    <a href="{{route('blogDetail',$blog->id)}}" class="news-link">Read more...</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->

@endsection
