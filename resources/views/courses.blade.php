@extends('layouts.base_courses')
@section('title', 'Tanteeta - All Courses')

@section('content')

<div class="row">
    <div class="all-courses">
        <div class="search-form visible-xs">
            <form method="post" action="">
                <input type="search" placeholder="What do you want to learn?">
                <button type="submit"><span class="fa fa-search"></span></button>
            </form>
        </div>
        <div class="col-sm-10 right">
            <h3 class="title">All courses</h3><hr>
        <!--
            <div class="col-md-3 col-sm-4 col-xs-6 course">
                <a href="course.blade.php">
                    <div class="img" style="background-image:url('images/backgrounds/courses/1.png')"></div>
                    <div class="text">
                        <b>Computer Programming for kids</b>
                        <span class="type"><i class="fa fa-tag"></i> Recommended course package</span>
                        <span><i class="fa fa-user"></i> 8 years - 16 years</span>
                        <span><i class="fa fa-clock-o"></i> 60 hours</span>
                    </div>
                </a>
            </div>
        -->

            @foreach($all as $one)
                    <div class="col-md-3 col-sm-4 col-xs-6 course">
                        <a href="/course/{{ $one->id }}">
                            <div class="img" style="background-image:url('{{ config('app.url') }}/images/courses/{{ $one->img }}')"></div>
                            <div class="text">
                                <b>{{ $one->title }}</b>
                                <span class="type"><i class="fa fa-tag"></i> {{ $one->type . ' course package'  }}</span>
                                <span><i class="fa fa-user"></i> {{ $one->age_range }} years old</span>
                                <span><i class="fa fa-clock-o"></i> {{ $one->duration. ' hours'}}</span>
                                
                            </div>
                        </a>
                    </div>
                @endforeach
            <div class="col-md-12 col-xs-12">
                <nav style="position:relative;left:18px;">
                    <ul class="pagination">
                        {{ $all->links() }}
                    </ul>
                </nav>
            </div>

        </div>

        <div class="col-sm-2 left hidden-xs">
            <!-- 
            <div class="course-list col-sm-12 col-xs-8">
                <h4 class="title">Course list</h4>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel">
                        <a class="heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#Computerbasics" aria-expanded="true" aria-controls="Computerbasics">
                          Computer basics <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span>
                        </a>
                        <div id="Computerbasics" class="collapse list" role="tabpanel" aria-labelledby="headingOne">
                            <a href="#">Microsoft Word</a>
                            <a href="#">Microsoft Powerpoint</a>
                            <a href="#">Autocad</a>
                            <a href="#">Microsoft word</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#Softwaredevelopment" aria-expanded="false" aria-controls="Softwaredevelopment">
                          Software development <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span>
                        </a>
                        <div id="Softwaredevelopment" class="collapse list" role="tabpanel" aria-labelledby="headingTwo">
                            <a href="#">C#</a>
                            <a href="#">Java</a>
                            <a href="#">Python</a>
                            <a href="#">Ruby</a>
                            <a href="#">C++</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#Mobileappdevelopment" aria-expanded="false" aria-controls="Mobileappdevelopment">
                          Mobile app development <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span>
                        </a>
                        <div id="Mobileappdevelopment" class="collapse list" role="tabpanel" aria-labelledby="headingTwo">
                            <a href="#">C#</a>
                            <a href="#">Java</a>
                            <a href="#">Python</a>
                            <a href="#">Ruby</a>
                            <a href="#">C++</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#Webdevelopment" aria-expanded="false" aria-controls="Webdevelopment">
                          Web development <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span>
                        </a>
                        <div id="Webdevelopment" class="collapse list" role="tabpanel" aria-labelledby="headingTwo">
                            <a href="#">C#</a>
                            <a href="#">Java</a>
                            <a href="#">Python</a>
                            <a href="#">Ruby</a>
                            <a href="#">C++</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#Graphicdesign" aria-expanded="false" aria-controls="Graphicdesign">
                          Graphic design <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span>
                        </a>
                        <div id="Graphicdesign" class="collapse list" role="tabpanel" aria-labelledby="headingTwo">
                            <a href="#">C#</a>
                            <a href="#">Java</a>
                            <a href="#">Python</a>
                            <a href="#">Ruby</a>
                            <a href="#">C++</a>
                        </div>
                    </div>
                    <div class="panel">
                        <a class="heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#Animation" aria-expanded="false" aria-controls="Animation">
                          Animation <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span>
                        </a>
                        <div id="Animation" class="collapse list" role="tabpanel" aria-labelledby="headingTwo">
                            <a href="#">C#</a>
                            <a href="#">Java</a>
                            <a href="#">Python</a>
                            <a href="#">Ruby</a>
                            <a href="#">C++</a>
                        </div>
                    </div>
                </div>
            </div>
 -->
            <div class="help col-sm-12 col-xs-4">
                <img src="images/admin/1.jpg">
                <div class="text">
                    <b>Bukumi</b> is in charge of courses.<br>
                    Call her on <span>09030001991</span> for help or clearification
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="row">
    <div class="col-xs-12 benefits" style="background-image:url('images/backgrounds/benefits.png')">
        <div class="col-md-4 inner">
            <div class="icon"><img src="images/icon/1.png"></div>
            <h2>Learn from experts</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation.
        </div>
        <div class="col-md-4 inner">
            <div class="icon"><img src="images/icon/2.png"></div>
            <h2>Well structured courses</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation.
        </div>
        <div class="col-md-4 inner">
            <div class="icon"><img src="images/icon/3.png"></div>
            <h2>Pocket friendly tuition</h2>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation.
        </div>

        <div class="col-xs-12 faq">
            <div class="inner">
                <h2>Frequently asked questions</h2>
                <div class="row">
                    <div class="col-xs-6 item">
                        <b>1. What is your name?</b>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </div>
                    <div class="col-xs-6 item">
                        <b>2. What is your name?</b>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco.
                    </div>
                    <div class="col-xs-6 item">
                        <b>3. What is your name?</b>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor.
                    </div>
                    <div class="col-xs-6 item">
                        <b>4. What is your name?</b>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisiat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@stop