@extends('layouts.base_courses')
@section('title', 'courses')

@section('content')

    <div class="row">
        <div class="all-courses">
            <div class="col-sm-2 left hidden-xs">
                <div class="course-list col-sm-12 col-xs-8">
                    <h4 class="title">Single Course List</h4>
                    @foreach($single as $sin)
                        <p style="padding-left: 10px;"><a href="/course/{{ $sin->id }}">{{  $sin->title }}</a></p>
                    @endforeach
                </div>
                <div class="help col-sm-12 col-xs-4">
                    <img src="images/admin/1.jpg">
                    <div class="text">
                        <b>Bukumi</b> is in charge of courses.<br>
                        Call her on <span>08169500949</span> for help or clearification
                    </div>
                </div>
            </div>
            <div class="col-sm-10 right">
                <h3 class="title" style="text-transform:capitalize;">{{ $name or 'All' }} Courses <i style="color:#999999;font-size:70%;text-transform:lowercase;">{{ $search or '' }}</i></h3><hr>
 
                @foreach($all as $one)
                    <div class="col-md-3 col-sm-4 col-xs-6 course">
                        <a href="/course/{{ $one->id }}">
                            <div class="img" style="background-image:url('{{ config('app.url') }}/images/backgrounds/courses/1.png')"></div>
                            <div class="text">
                                <b>{{ $one->title }}</b>

                                <div style="margin-top: 30px;">
                                <span class="type"><i class="fa fa-tag"></i> {{ $one->type . ' course package'  }}</span>
                                <span><i class="fa fa-user"></i> 8 - 16 years old</span>
                                <span><i class="fa fa-clock-o"></i> {{ $one->duration. ' hours'}}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <style type="text/css">
                    ul.pagination li a {color: #cc0000;}
                </style>
                <nav style="position:relative;left:18px;">
                    <ul class="pagination">
                        {{ $all->links() }}
                    </ul>
                </nav>
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

                <div class="paginate col-xs-12">
                    <a href="#" class="pull-left"><span class="fa fa-long-arrow-left"></span></a>
                    16 <i>of</i> 68 <i>courses</i>
                    <a href="#" class="pull-right"><span class="fa fa-long-arrow-right"></span></a>
                </div>
            -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 benefits" style="background-image:url('{{ config('app.url') }}/images/backgrounds/benefits.png')">
            <div class="col-md-4 inner">
                <div class="icon"><img src="{{ config('app.url') }}/images/icon/1.png"></div>
                <h2>Learn from experts</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation.
            </div>
            <div class="col-md-4 inner">
                <div class="icon"><img src="{{ config('app.url') }}/images/icon/2.png"></div>
                <h2>Well strutured courses</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation.
            </div>
            <div class="col-md-4 inner">
                <div class="icon"><img src="{{ config('app.url') }}/images/icon/3.png"></div>
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

@stop