@extends('frontend.layouts.master')
@extends('frontend.layouts.header')
@extends('frontend.layouts.footer')


@section('about_status')
class='active'
@endsection

@section('homepage_or_others')
class='banner1'
@endsection
@section('site-content')

<!-- about -->
<div class="about">
	<div class="container">
	<h3 class="w3l_header w3_agileits_header two">About   <span>Us</span></h3>
		<div class="ab-agile">
			<div class="col-md-6 aboutleft">
				<p class="para1">
				<?php 
					if (empty($aboutus))
					{
				?>
					<h4>No data to be displayed</h4>
				<?php
					}
					else
					{
						 echo $aboutus['aboutus'];
					}
				?>
				</p>
			</div>
			<div class="col-md-6 aboutright">
			<?php 
					if (empty($aboutus))
					{
				?>
					<h4>No Image to be displayed</h4>
				<?php
					}
					else
					{
				?>
						<img src="{{asset('/storage/aboutus').'/'.$aboutus['image']}}" alt="" />
				<?php
					}
				?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about -->

<!-- services -->
<div class="services-1 jarallax">
	<div class="container">
		<div class="col-md-3 servicegrid1">
			<h3>Machinery</h3>
			<i class="fa fa-rocket" aria-hidden="true"></i>
			<p> Proin tempor pulvinar sodalesaet. Vivamus lobortis nisi hendrerit mollis finibus ipsum et. </p>
		</div>
		<div class="col-md-3 servicegrid1">
			<h3>Solid Fuels</h3>
			<i class="fa fa-ship" aria-hidden="true"></i>
			<p> Proin tempor pulvinar sodalesaet. Vivamus lobortis nisi hendrerit mollis finibus ipsum et. </p>
		</div>
		<div class="col-md-3 servicegrid1">
			<h3>Pharmaceutical</h3>
			<i class="fa fa-arrows-alt" aria-hidden="true"></i>
			<p> Proin tempor pulvinar sodalesaet. Vivamus lobortis nisi hendrerit mollis finibus ipsum et. </p>
		</div>
		<div class="col-md-3 servicegrid1">
			<h3>Gas Revolution</h3>
			<i class="fa fa-simplybuilt" aria-hidden="true"></i>
			<p> Proin tempor pulvinar sodalesaet. Vivamus lobortis nisi hendrerit mollis finibus ipsum et. </p>
		</div>
		<div class="clearfix"></div>	
	</div>
</div>
<!-- //services -->

<!-- team -->
<div class="team">
	<div class="container">
		<h3 class="w3l_header w3_agileits_header two">Our   <span>Team</span></h3>
		<div class="teamgrids">

		<?php
		if (count($team_members)==0)
		{
		?>

			<h4> no team members to display </h4>";
		<?php
		}
		else
		{
		?>

			@foreach($team_members as $item) 

				<div class="col-md-3 teamgrid1">
					<img src="{{asset('/storage/team_members').'/'.$item->image}}" alt="" />
					<img src="{{asset('/frontend')}}" alt="" />
					<div class="teaminfo">
						<h3>{{$item->member_name}}</h3>
						<div class="team-social">
							<a href="{{$item->facebook}}"><i class="fa fa-facebook"></i></a>
							<a href="{{$item->twitter}}"><i class="fa fa-twitter"></i></a>
							<a href="{{$item->linkedin}}"><i class="fa fa-linkedin"></i></a>
							<a href="{{$item->pinterest}}"><i class="fa fa-pinterest-p"></i></a>
						</div>
						<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>{{$item->member_role}}</p>
						<p><i class="fa fa-phone" aria-hidden="true"></i>{{$item->contact}}</p>
						<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">{{$item->email}}</a></p>
					</div>
				</div>
			@endforeach

		<?php
		}
		?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->
@endsection