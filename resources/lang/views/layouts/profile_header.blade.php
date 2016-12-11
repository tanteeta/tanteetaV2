<div class="row">
	<!--<link rel="stylesheet" href="{{ config('url') }}/assets/css/bootstrap-vertical.min.css">-->
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	
    <div class="col-xs-12 white header">
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
                <a href="#">
                <span class="fa fa-user"></span> Welcome {{ $info->first_name }}!</a>
            </div>
        </div>
        <div class="col-xs-12 bottom hidden-xs" style="color:#CC0000;" id="one">
            <a href="#" class="pull-right" style=" background:#FFF;" id="editProfile">
            <span class="fa fa-gears"></span> Edit Profile</a>
        </div>
    </div>
</div>