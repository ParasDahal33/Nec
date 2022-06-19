@extends('frontend.layouts.master')
@extends('frontend.layouts.header')
@extends('frontend.layouts.footer')


@section('contact_status')
class='active'
@endsection

@section('homepage_or_others')
class='banner1'
@endsection

@section('site-content')

<!-- map -->
<div class="map">
	<div class="container">
	<h3 class="w3l_header w3_agileits_header two">Contact <span>Us</span></h3>
		<div class="map-agile">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415650.6082293166!2d148.8007935764926!3d-35.52231558352957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164cdfa09b104b%3A0xe75844385c6e7803!2sAustralian+Capital+Territory%2C+Australia!5e0!3m2!1sen!2sin!4v1496644554880"></iframe>
		</div>
	</div>
</div>
<!-- //map -->

<!-- call -->
<div class="number">
	<div class="container">
		<div class="col-md-6 callleft">
			
			<h3>Get in touch, we will call you</h3>
			<form action="{{url('/store_contact')}}" method="post">
					<div class="control-group form-group">
						@csrf
                        <div class="controls">
                            <label class="contact-p1">Full Name:</label> 
                            <input type="text" class="form-control" name="fullname" id="fullname">
                            <p class="help-block"></p>
                        </div>
                    </div>	
                   
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email">
							<p class="help-block"></p>
						</div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send</button>	
			</form>
		</div>
		<div class="col-md-6 callright">
				<h4 class="w3l-contact">Connect With Us</h4>
				<p class="contact-agile1"><strong>Phone :</strong> +1 (100)222-23-33</p>
				<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">info@example.com</a></p>
				<p class="contact-agile1"><strong>Address :</strong> 132 New Lenox, 868 1st Avenue,4th United States.</p>													

			<form action="" method="post">
				<input type="tel" placeholder="Enter your number" required="">
				<input type="submit" value="call me now">
			</form>
		</div>
		<div class="clearfix"></div>	
	</div>
</div>
<!-- //call -->
@endsection