<div class="row">
    <div class="col-xs-12 header">
        <div class="col-xs-12 visible-xs mob-top"><i class="fa fa-phone"></i>&nbsp; 08037141630</div>
        <div class="col-xs-12 top">
            <a href="/"><img src="{{ config('url') }}/images/logo/logo.jpg"></a>
            <div class="menu-button visible-xs">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div class="pull-right">
                <span class="hidden-xs"><i class="fa fa-phone"></i>&nbsp; 08037141630</span>
                <a href="#">Login</a>
            </div>
        </div>
        <div class="col-xs-12 bottom hidden-xs">
        @foreach($categories as $category)
            <a href="/courses?cat={{ $category }}" style="text-transform: capitalize;">{{ $category }}</a>
        @endforeach
        <!--
            <a href="#">Computer basics</a>
            <a href="#">Software development</a>
            <a href="#">Mobile app development</a>
            <a href="#">Web development</a>
            <a href="#">Graphic design</a>
            <a href="#">Animation</a>
        -->
        </div>
    </div>
</div>