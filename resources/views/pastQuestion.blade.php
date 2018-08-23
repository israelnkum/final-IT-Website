@extends('layouts.app')
@section('content')
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="storage/images/bg/past.jpg">
            <div class="container pt-120 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="text-white font-36">Past Questions</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="/">Home</a></li>
                                <li class="active"><a href="/about-us">Past Questions</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Section: Team -->
        <section id="pastQuestions">
            <div class="container pb-50">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-2">
                            <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-question-circle-o mr-10"></i><span class="text-theme-colored2">Level</span></h3>
                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="certificationAccordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="hndHeading">
                                        <h6 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#certificationAccordion" href="#hndPanel" aria-expanded="false" aria-controls="hndCollapse">
                                               Hnd
                                            </a>
                                        </h6>
                                    </div>

                                    {{--begin Hnd panel--}}
                                    <div id="hndPanel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hndHeading">
                                        <div class="panel-body">
                                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled-lvl accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="hndAccordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading " role="tab" id="hndLevel100Heading">
                                                        <h6 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#hndAccordion" href="#hndLevel100Panel" aria-expanded="false" aria-controls="hndCollapse">
                                                                Level 100
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="hndLevel100Panel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hndLevel100Heading">
                                                        <div class="panel-body">
                                                            {{--Begin Level 100 Semester accordion--}}
                                                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled-lvl-sms accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="hndSemesterAccordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading " role="tab" id="hndLevel100SemIHeading">
                                                                        <h6 class="panel-title">

                                                                            {!! Form::open(['action'=>'HndLevel100Controller@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester I',['name'=>'btnLvl100sem1','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab" id="hndLevel100SemIIHeading">
                                                                        <h6 class="panel-title">
                                                                            {!! Form::open(['action'=>'HndLevel100Controller@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester II',['name'=>'btnLvl100sem2','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>{{-- End Hnd Level 100 Semester accordion--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="hndLevel200Heading">
                                                        <h6 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#hndAccordion" href="#hndLevel200Panel" aria-expanded="false" aria-controls="hndLevel100Collapse">
                                                                Level 200
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="hndLevel200Panel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hndLevel200Heading">
                                                        <div class="panel-body">
                                                            {{--Begin Level 100 Semester accordion--}}
                                                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled-lvl-sms accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="hndSemesterAccordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading " role="tab" id="hndLevel100SemIHeading">
                                                                        <h6 class="panel-title">
                                                                            {!! Form::open(['action'=>'HndLevel100Controller@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester I',['name'=>'btnLvl200sem1','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab" id="hndLevel100SemIIHeading">
                                                                        <h6 class="panel-title">
                                                                            {!! Form::open(['action'=>'HndLevel100Controller@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester II',['name'=>'btnLvl200sem2','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>{{-- End Hnd Level 100 Semester accordion--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="hndLevel300Heading">
                                                        <h6 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#hndAccordion" href="#hndLevel300Panel" aria-expanded="false" aria-controls="hndLevel300PanelCollapse">
                                                                Level 300
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="hndLevel300Panel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hndLevel300Heading">
                                                        <div class="panel-body">
                                                            {{--Begin Level 100 Semester accordion--}}
                                                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled-lvl-sms accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="hndSemesterAccordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading " role="tab" id="hndLevel100SemIHeading">
                                                                        <h6 class="panel-title">
                                                                            {!! Form::open(['action'=>'HndLevel100Controller@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester I',['name'=>'btnLvl300sem1','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab" id="hndLevel100SemIIHeading">
                                                                        <h6 class="panel-title">
                                                                            {!! Form::open(['action'=>'HndLevel100Controller@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester II',['name'=>'btnLvl300sem2','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div>{{-- End Hnd Level 100 Semester accordion--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>{{--end Hnd panel--}}
                                        </div>
                                    </div>
                                </div>



                                {{--diploma --}}
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="diplomaHeading">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#certificationAccordion" href="#diplomaPanel" aria-expanded="false" aria-controls="diplomaCollapse">
                                               Diploma
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="diplomaPanel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="diplomaHeading" >
                                        <div class="panel-body">
                                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled-lvl accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="diplomaAccordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading " role="tab" id="hndLevel100Heading">
                                                        <h6 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#diplomaAccordion" href="#diplomaLevel100Panel" aria-expanded="false" aria-controls="hndCollapse">
                                                                Level 100
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="diplomaLevel100Panel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hndLevel100Heading">
                                                        <div class="panel-body">
                                                            {{--Begin Diploma Level 100 Semester accordion--}}
                                                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled-lvl-sms accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="hndSemesterAccordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading " role="tab" id="hndLevel100SemIHeading">
                                                                        <h6 class="panel-title">

                                                                            {!! Form::open(['action'=>'diplomaController@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester I',['name'=>'diplomaLvl100sem1','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab" id="hndLevel100SemIIHeading">
                                                                        <h6 class="panel-title">
                                                                            {!! Form::open(['action'=>'diplomaController@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester II',['name'=>'diplomaLvl100sem2','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div> {{--End Hnd Level 100 Semester accordion--}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="hndLevel200Heading">
                                                        <h6 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#diplomaAccordion" href="#diplomaLevel200Panel" aria-expanded="false" aria-controls="hndLevel100Collapse">
                                                                Level 200
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="diplomaLevel200Panel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hndLevel200Heading">
                                                        <div class="panel-body">
                                                            {{--Begin Level 100 Semester accordion--}}
                                                            <div class="panel-group accordion-stylished-left-border accordion-icon-filled-lvl-sms accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="hndSemesterAccordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading " role="tab" id="hndLevel100SemIHeading">
                                                                        <h6 class="panel-title">
                                                                            {!! Form::open(['action'=>'diplomaController@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester I',['name'=>'diplomaLvl200sem1','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab" id="hndLevel100SemIIHeading">
                                                                        <h6 class="panel-title">
                                                                            {!! Form::open(['action'=>'diplomaController@store','method'=>'POST']) !!}
                                                                            {{Form::submit('Semester II',['name'=>'diplomaLvl200sem2','class'=>'btn btn-primary  text-dark'])}}
                                                                            {!! Form::close() !!}
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </div> {{--End Hnd Level 100 Semester accordion--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>{{--end Hnd panel--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="btechHeading">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#certificationAccordion" href="#btechPanel" aria-expanded="false" aria-controls="btechCollapse">
                                               BTECH
                                            </a>
                                        </h6>
                                    </div>
                                    <div id="btechPanel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="btechHeading">
                                        <div class="panel-body">
                                           Coming Soon
                                        </div>
                                    </div>
                                </div>
                            </div>{{--end Certificate --}}
                        </div>
                        <div class="col-md-10">
                            <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-paper-plane mr-10"></i>Past<span class="text-theme-colored2">Question</span></h3>

                            @if(
                            isset($_POST['btnLvl100sem1']) || isset($_POST['btnLvl100sem2']) || isset($_POST['btnLvl200sem1']) || isset($_POST['btnLvl200sem2']) || isset($_POST['btnLvl300sem1']) || isset($_POST['btnLvl300sem2']))
                                <div class="text-center ">
                                    <h4 class="text-danger text-uppercase line-height-1 mt-0 mt-sm-30">{{$head}}</h4>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"></i><span class="text-theme-colored2">Regular</span></h4>
                                    <h5 class="text-danger  line-height-1 mt-0 mt-sm-10">End of Semester</h5>
                                    @for($i = 0; $i<count($lecData); $i++)
                                        <a target="_blank" href="{{$path.$lecData[$i]}}">{{$lecData[$i]}}
                                            <a download="{{$path.$lecData[$i]}}" href="{{$path.$lecData[$i]}}"><i class="fa fa-download"></i></a>
                                        </a><br>
                                        @endfor

                                    <h5 class="text-danger  line-height-1 mt-15 mt-sm-10">Mid Semester</h5>
                                    @for($i = 0; $i<count($lvl100Sem1MidSemData); $i++ )
                                        <a target="_blank" href="{{$midSemPath.$lvl100Sem1MidSemData[$i]}}">{{$lvl100Sem1MidSemData[$i]}}
                                            <a download="{{$midSemPath.$lvl100Sem1MidSemData[$i]}}" href="{{$midSemPath.$lvl100Sem1MidSemData[$i]}}"><i class="fa fa-download"></i></a>
                                        </a><br>
                                    @endfor
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"></i><span class="text-theme-colored2">Evening</span></h4>
                                    <h5 class="text-danger  line-height-1 mt-0 mt-sm-10">End of Semester</h5>
                                    @for($i = 0; $i<count($lvl100Sem1EveningData); $i++ )
                                        <a target="_blank" href="{{$lvl100Sem1EveningDataPath.$lvl100Sem1EveningData[$i]}}">{{$lvl100Sem1EveningData[$i]}}
                                            <a download="{{$lvl100Sem1EveningDataPath.$lvl100Sem1EveningData[$i]}}" href="{{$lvl100Sem1EveningDataPath.$lvl100Sem1EveningData[$i]}}"><i class="fa fa-download"></i></a>
                                        </a><br>
                                    @endfor

                                    <h5 class="text-danger  line-height-1 mt-15 mt-sm-10">Mid Semester</h5>

                                    @for($i = 0; $i<count($newData4); $i++ )
                                        <a target="_blank" href="{{$newData4Path.$newData4[$i]}}">{{$newData4[$i]}}
                                            <a download="{{$newData4Path.$newData4[$i]}}" href="{{$newData4Path.$newData4[$i]}}"><i class="fa fa-download"></i></a>
                                        </a><br>
                                    @endfor
                                </div>
                        @endif

                            @if(isset($_POST['diplomaLvl100sem1']) || isset($_POST['diplomaLvl100sem2']) || isset($_POST['diplomaLvl200sem1']) || isset($_POST['diplomaLvl200sem2']))
                                <div class="text-center ">
                                    <h4 class="text-danger text-uppercase line-height-1 mt-0 mt-sm-30">{{$head}}</h4>
                                    <hr>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"></i><span class="text-theme-colored2">Regular</span></h4>
                                    <h5 class="text-danger  line-height-1 mt-0 mt-sm-10">End of Semester</h5>
                                    @for($i = 0; $i<count($lecData); $i++)
                                        <a target="_blank" href="{{$path.$lecData[$i]}}">{{$lecData[$i]}}
                                            <a download="{{$path.$lecData[$i]}}" href="{{$path.$lecData[$i]}}"><i class="fa fa-download"></i></a>
                                        </a><br>
                                    @endfor

                                    <h5 class="text-danger  line-height-1 mt-15 mt-sm-10">Mid Semester</h5>
                                    @for($i = 0; $i<count($lvl100Sem1MidSemData); $i++ )
                                        <a target="_blank" href="{{$midSemPath.$lvl100Sem1MidSemData[$i]}}">{{$lvl100Sem1MidSemData[$i]}}
                                            <a download="{{$midSemPath.$lvl100Sem1MidSemData[$i]}}" href="{{$midSemPath.$lvl100Sem1MidSemData[$i]}}"><i class="fa fa-download"></i></a>
                                        </a><br>
                                    @endfor
                                </div>

                            @else
                                {{--<h1 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30">Select Your Level</h1>--}}
                                @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection