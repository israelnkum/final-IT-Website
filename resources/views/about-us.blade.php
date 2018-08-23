@extends('layouts.app')
@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{'storage/images/bg/bg3.jpg'}}">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-white font-36">About</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">Home</a></li>
                                <li class="active"><a href="/about-us">About us</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section About -->
        <section>
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Head of <span class="text-theme-colored2">Department</span></h2>
                            <img  src="{{'storage/images/gallery/lectures/Mr. Frank Amoani Arthur.jpg'}}" style="height: auto; width: 265px" alt="">
                        </div>
                        <div class="col-md-4">
                            <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">About<span class="text-theme-colored2"> ITSU</span></h2>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <p>
                                The Department of Information & Communication Technology,
                                as a servicing department, provides the platform for teaching
                                students to become literate in Information and Communication
                                Technology (ICT). The Department equips students of the entire
                                Polytechnic with basic skills in computing through a computer
                                literacy course.
                            </p>
                            <p class="hidden-md">
                                The Department is also running a non- tertiary
                                programme Diploma in Information Technology, based on the West Africa
                                Examinations Council’s (WAEC) syllabus.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Union<span class="text-theme-colored2"> President</span></h2>
                            <img class="img-fullwidth" src="{{'storage/images/gallery/newExecutives/clifford.jpg'}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Funfact -->
        <section class="layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg1.jpg" data-parallax-ratio="0.7">
            <div class="container pt-90 pb-90">
                <div class="row mt-30">
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-smile mb-20 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="500" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Happy Students</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-notebook mb-20 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="5" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Approved Courses</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-users mb-20 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="20" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Certified Teachers</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                        <div class="funfact text-center">
                            <i class="pe-7s-study mb-20 text-white"></i>
                            <h2 data-animation-duration="2000" data-value="20" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
                            <h5 class="text-white text-uppercase">Graduate Students</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Team -->
        <section id="team" class="bg-silver-deep">
            <div class="container">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-uppercase title">Qualified <span class="text-theme-colored2">Lectures</span></h2>
                            <p class="text-uppercase mb-0">We Have Highly Qualified Lectures</p>
                            <div class="double-line-bottom-theme-colored-2"></div>
                        </div>
                    </div>
                </div>
                <div class="row mtli-row-clearfix">
                   <?php
                    $dir = scandir("storage/images/gallery/lectures");

                    for ( $i = 2; $i<count($dir); $i++){
                    ?>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
                                <div class="team-thumb">
                                    <img class="img-fullwidth" alt="" src="{{'storage/images/gallery/lectures/'.$dir[$i]}}">
                                    <div class="team-overlay"></div>
                                    <ul class="styled-icons team-social icon-sm">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="team-details">
                                    <h2 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">
                                        <?php  $fileExt= explode(".",$dir[$i]);
                                        $fileAcutalExt = end($fileExt);

                                        echo '<h5 class="name">'.str_replace(".".$fileAcutalExt,"",$dir[$i]).'</h5>';
                                        ?>
                                    </h2>
                                    {{--<p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>--}}
                                </div>
                            </div>
                        </div>
                       <?php
                       }
                           ?>
                </div>
            </div>
        </section>
    </div>
    @endsection