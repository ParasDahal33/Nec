@extends('frontend.layouts.master')
@extends('frontend.layouts.header')
@extends('frontend.layouts.footer')

@section('index_status')
class='active'
@endsection

@section('homepage')
class='banner jarallax'
@endsection

@section('homepage_or_others')
class='agile_dot_info one'
@endsection


@section('homepage_header_content')
		<div class="w3layouts-banner">
				<div class="container">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>High Quality Materials In All Solutions </h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>We Provide Extended Maintenance</h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
								</li>
								<li>
									<div class="agileits_w3layouts_banner_info">
										<h3>High Quality Materials In All Solutions </h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
								</li>
							</ul>
						</div>
				</section>
			
				</div>
			</div>
@endsection

@section('site-content')
<div class="w3layouts_bottom">
		<div class="container">
			<div class="col-md-9 w3layouts_getin_info">
				<h3>Are Looking for Industrial Projects?</h3>
			</div>
			<div class="col-md-3 w3layouts_getin">
				<a href="{{url('/contact')}}">Get In Touch</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header w3_agileits_header two">Our <span>Services</span></h3>
			</div>
		<div class="agile_wthree_inner_grids">
				<?php
				if(count($services)==0)
				{
				?>
					<h4>No data to show</h4>
				<?php
				}
				else{
				?>
				@foreach($services as $service)
					<div class="col-md-4 agileits_banner_bottom_left">
						<div class="agileinfo_banner_bottom_pos">
							<div class="w3_agileits_banner_bottom_pos_grid">
								<div class="col-xs-3 wthree_banner_bottom_grid_left">
									<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
									<i class="fa {{$service->icon}}" aria-hidden="true"></i>									</div>
								</div>
								<div class="col-xs-9 wthree_banner_bottom_grid_right">
									<h4 class="sub_service_agileits">{{$service->title}}</h4>
									<p><?php echo "$service->description"?></p>
									<div class="agileits-button two service">
										<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" data-toggle="modal" data-target="#myModal" role="button">Read More »</a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				@endforeach
				<?php
				}
				?>
	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> 
	<!-- //services -->
<!-- abt -->
<div class="abt-agile">
	<div class="col-md-6 abt_agile_left">
	</div>
	<div class="col-md-6 abt_agile_right">
		<div class="wthree_head_section">
				<h3 class="w3l_header w3_agileits_header two">Our <span>Skills</span></h3>
				
				<?php
				if (empty($skilldescription))
				{
				?>
					<h6>No data to show</h6>
				<?php
				}
				else{
					?>
						<p><?php echo $skilldescription['skilldescription'];?></p>
					<?php
				}
				?>
			</div>
			<div class="wthree_skills">				
				<?php
				if (count($skillname)==0)
				{
				?>
					<h6>No data to show</h6>
				<?php
				}
				else{
					?>
					@foreach($skillname as $skill)
							<h6>{{$skill->skillname}} <span>{{$skill->skillpercentage}} % </span></h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped active" style="width: {{$skill->skillpercentage}}%">
								</div>
							</div>
					@endforeach
					<?php
				}
				?>
		
			</div>

	</div>
	<div class="clearfix"></div>
</div>
<!-- abt -->
<!-- projects -->
<div class="projects_w3ls">
	<div class="container">
		<h3 class="w3l_header w3_agileits_header two">Our Running <span>Projects</span></h3>
		<div class="projects_w3ls_top">
			<?php
			if(count($projects)==0)
			{
			?>
			<h4>No projects</h4>
			<?php
			}
			else
			{
			?>
			@foreach($projects as $project)
				<div class="col-md-4 col-sm-4 projects_w3ls_left">
							<img class="img-responsive" src="{{asset('/storage/projects').'/'.$project->image}}" alt="">
                            <h4>{{$project->title}}</h4>
                             <div class="stn"><strong>Client : </strong> {{$project->client}}</div>
                            <div class="ltn"><strong>Deadline : </strong> {{$project->deadline}}</div>
							<?php 
						 		$description=Str::of($project['description'])->words(20);
								 echo "<p>".$description."</p>";
							?>
                            <!-- <p>{{$description}}</p> -->
                            <div class="agileits-button two service">
								<a class="btn btn-primary btn-lg hvr-underline-from-left" href="{{url('/projects')}}" role="button">Read More »</a>
							</div>
                    </div>
			@endforeach

			<?php } ?>
					<div class="clearfix"></div>
                </div>
	</div>
</div>
<!-- //projects -->
<!-- stats -->
	<div class="stats" id="stats">
		<div class="container">
			<div class="agile_inner_info_stats">
				<div class="col-md-4 w3layouts_stats_left w3_counter_grid">
					<i class="fa fa-laptop" aria-hidden="true"></i>
					<p class="counter">145</p>
					<h3>Clients Services</h3>
				</div>
				<div class="col-md-4 w3layouts_stats_left w3_counter_grid1">
					<i class="fa fa-smile-o" aria-hidden="true"></i>
					<p class="counter">265</p>
					<h3>Large Crew</h3>
				</div>
				<div class="col-md-4 w3layouts_stats_left w3_counter_grid3">
					<i class="fa fa-user" aria-hidden="true"></i>
					<p class="counter">205</p>
					<h3>Investors</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //stats -->
<!-- clients-->
	<div class="clients">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header two">What   <span>People Say</span></h3>
			<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
						

								<?php
								if(count($testimony)==0)
								{
								?>
									<h4>No testimony given</h4>
								<?php
								}
								else
								{
								?>
								@foreach($testimony as $review)
									<div class="col-md-4 client-grids">
									<?php 
											$statement=Str::of($review['testimony'])->words(12);
											echo "<p>". $statement."</p>";
									?>

										<!-- <p>{{$review->testimony}}</p> -->
										<div class="col-md-5 c-img">
											<img src="{{asset('thumbnail').'/'.$review->image}}"  alt="" />		
										</div>
										<div class="col-md-7 c-info">
											<h4>{{$review->client_name}}</h4>
											<h5>{{$review->client_number}}</h5>
										</div>
										<div class="agileits-button two service">
										<a class="btn btn-primary btn-lg hvr-underline-from-left" id= "click_testimony" href="#" role="button">Read More »</a>
																			</div>
										<div class="clearfix"></div>
									</div>
								@endforeach

								<?php } ?>
								
								<div class="clearfix"></div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="col-md-4 client-grids">
									<p>In vitae tincidunt turpis. Proin in euismod dolor. Sed eget tellus venenatis, molestie lorem tempus, viverra ante vulputate.</p>
									<div class="col-md-5 c-img">
										<img src="{{asset('frontend/images/c4.jpg')}}"  alt="" />								
									</div>
									<div class="col-md-7 c-info">
										<h4>Daniel</h4>
										<h5>Client4</h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 client-grids">
									<p>In vitae tincidunt turpis. Proin in euismod dolor. Sed eget tellus venenatis, molestie lorem tempus, viverra ante vulputate.</p>
									<div class="col-md-5 c-img">
										<img src="{{asset('frontend/images/c5.jpg')}}"  alt="" />								
									</div>
									<div class="col-md-7 c-info">
										<h4>Johnson</h4>
										<h5>Client5</h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 client-grids">
									<p>In vitae tincidunt turpis. Proin in euismod dolor. Sed eget tellus venenatis, molestie lorem tempus, viverra ante vulputate.</p>
									<div class="col-md-5 c-img">
										<img src="{{asset('frontend/images/c6.jpg')}}"  alt="" />								
									</div>
									<div class="col-md-7 c-info">
										<h4>Scarllet</h4>
										<h5>Client6</h5>
									</div>
									<div class="clearfix"></div>
								</div>
						
								<div class="clearfix"></div>
							</div>
						</article>
					</div>
				</div>
		</div>
	</div>
<!--//clients-->

<script>
  $('#click_testimony').on('click',function(e)
  {
    e.preventDefault();
    var self =$(this);
    console.log(self.data('title'));
	Swal.fire({
  title: 'Sweet!',
  text: 'Modal with a custom image.',
  imageUrl: 'https://unsplash.it/400/200',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
})
  
  })
  </script>

@endsection
