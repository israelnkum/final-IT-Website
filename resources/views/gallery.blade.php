@extends('layouts.app')
@section('content')

    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{'storage/images/bg/gallery.jpg'}}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-white font-36">Gallery</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">Home</a></li>
                                <li class="active"><a href="/gallery">Gallery</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Grid 3 -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Portfolio Filter -->
                            <div class="portfolio-filter">
                                <a href="#" class="active" data-filter="*">All</a>
                                <a href="#lectures" class="" data-filter=".lectures">Lectures</a>
                                <a href="#new-executives" class="" data-filter=".new-executives">New executives</a>
                                <a href="#old-executives" class="" data-filter=".old-executives">Old Executives</a>
                                <a href="#handing-over" class="" data-filter=".handing-over">Handing Over</a>
                                <a href="#trip" class="" data-filter=".trip">Trip</a>
                                <a href="#others" class="" data-filter=".others">Others</a>
                            </div>
                            <!-- End Portfolio Filter -->

                            <!-- Portfolio Gallery Grid -->
                            <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">
                                                                <!-- Portfolio Item Start -->

                                @foreach($newExecutives as $exe)
                                    <div class="gallery-item new-executives">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="{{asset('storage/images/gallery/newExecutives/'.$exe)}}" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">Sample Title</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="{{asset('storage/images/gallery/newExecutives/'.$exe)}}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                @foreach($newLectures as $lect)
                                    <div class="gallery-item lectures">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="{{asset('storage/images/gallery/lectures/'.$lect)}}" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">Sample Title</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="{{asset('storage/images/gallery/lectures/'.$lect)}}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                @foreach($oldExeData as $old)
                                    <div class="gallery-item old-executives">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="{{asset('storage/images/gallery/oldExecutives/'.$old)}}" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">Sample Title</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="{{asset('storage/images/gallery/oldExecutives/'.$old)}}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                @foreach($handingOverData as $hand)
                                    <div class="gallery-item handing-over">
                                        <div class="thumb">
                                            <img class="img-fullwidth" src="{{asset('storage/images/gallery/handingOver/'.$hand)}}" alt="project">
                                            <div class="overlay-shade"></div>
                                            <div class="text-holder">
                                                <div class="title text-center">Sample Title</div>
                                            </div>
                                            <div class="icons-holder">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                        <a href="{{asset('storage/images/gallery/handingOver/'.$hand)}}" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                <div class="gallery-item trip">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/1.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-item others">
                                    <div class="thumb">
                                        <img class="img-fullwidth" src="images/gallery/1.jpg" alt="project">
                                        <div class="overlay-shade"></div>
                                        <div class="text-holder">
                                            <div class="title text-center">Sample Title</div>
                                        </div>
                                        <div class="icons-holder">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                                                    <a href="images/gallery/1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Portfolio Gallery Grid -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @endsection