@extends('frontend.layouts.master')
@extends('frontend.layouts.header')
@extends('frontend.layouts.footer')


@section('projects_status')
class='active'
@endsection

@section('homepage_or_others')
class='banner1'
@endsection

@section('site-content')

<!-- gallery -->
	<div class="gallery agile" id="gallery">
		<div class="container">
				<h3 class="w3l_header w3_agileits_header two">Our   <span>Projects</span></h3>
			<div class="agile_gallery_grids w3-agile">
				<ul class="clearfix demo">
				<?php
				if(is_null($projects))
				{
				?>
						<h1>No projects to show</h1>
				<?php
				}
				else
				{
				?>

				@foreach($projects as  $project)
					<li>
						<div class="gallery-grid1">
							<img src="{{asset('/storage/projects').'/'.$project->image}}"  alt=" " class="img-responsive" />
							<div class="p-mask">
									<h4>{{$project->title}}</h4>
									<p>{{$project->description}}</p>
							</div>
						</div>
					</li>
				@endforeach

				<?php
				}
				?>

				</ul>
			
			</div>
		</div>
	</div>
<!-- //gallery -->
@endsection
