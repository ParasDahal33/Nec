@section('footer')
<!--footer -->
<div class="footer-w3">
            <div class="container">
                <div class="footer-top">
                    <div class="col-md-3 footer-w3layouts">
                        <div class="footer-title">
                            <h2>About Us</h2>
                        </div>
                        <div class="footer-text">
                            <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.  lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci ultrices posuere cubilia Curae.</p>
                        </div>
                    </div>
                    <div class="col-md-3 footer-w3agile">
                        <div class="footer-title">
                            <h3>Office Hour</h3>
                        </div>
                        <div class="footer-office-hour">
                            <ul>
                                <li class="hd">Opening Days :</li>
                                <li>Monday – Friday : 9am to 20 pm</li>
                                <li>Saturday : 9am to 17 pm</li>
                            </ul>
                            <ul>
                                <li class="hd">Vacations :</li>
                                <li>All Sunday Days</li>
                                <li>All Official Holidays</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 footer-agileits">
                        <div class="footer-title">
                            <h3>Service List</h3>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Machinery & Tools</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Coal & Solid Fuels</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Industrial Chemicals</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Pharmaceutical Research</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Aerospace & Defence</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Oil and Gas Revolution</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 footer-w3-agile">
                        <div class="footer-title">
                            <h3>Subscribe</h3>
                        </div>
                        <p>Vivamus magna justo, lacinia eget consectetur sed.</p>
                       <form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<input type="submit" class="submit"  value="">
					</form>
                       
                    </div>
                </div>
                
            </div>
        </div>
<!-- //footer -->
<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="copyrighttop">
			<ul>
				<li><h4>Follow us on:</h4></li>
				<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a class="facebook" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="copyrightbottom">
			<p>© 2017 Fabricator. All Rights Reserved | Design By <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //copyright -->
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Fabricator
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="{{ asset('frontend/images/v2.jpg')}}" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
@endsection