@extends('frontend.layouts.master')

@section('content')
	<div class="row">

		<div class="col-xs-12">

			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-question"></i> About this site</div>

				<div class="panel-body">
					<p>My name is Adam Brown and I'm looking for a job. I am a developer, full-stack engineer, and DevOps specialist that is currently surviving the weather in Austin, TX. I love to engineer services and systems that are resilient and elegant. I continually look for ways to create new things, expand my skills, and continue to learn. My family and I are willing to relocate</p>
					<p>In order to organize the job search and to show off my development skills, I've created this site.</p>
					<p>You can view my general resume <a href="https://www.resumonk.com/deftnerd">hosted on Resumonk</a>
				</div>

			</div><!-- panel -->

		</div>

		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-globe"></i> Places I've Applied</div>
				<div class="panel-body">
					<span>TODO - Insert world-wide map here</span>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-dashboard"></i> Job Search Statistics</div>
				<div class="panel-body">
					<span>TODO - Insert some awesome widgets here</span>
				</div>
			</div>
		</div>

		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Jobs I've Applied For</div>
					<div class="panel-body">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Company</th>
										<th>Position</th>
										<th>Location</th>
										<th>Stage</th>
										<th>Last Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Dummy Company 1</td>
										<td>Dummy Job Title</td>
										<td>Anytown, US</td>
										<td>Research</td>
										<td>1 day ago</td>
									</tr>
									<tr>
										<td>Dummy Company 2</td>
										<td>Dummy Job Title</td>
										<td>Anytown, US</td>
										<td>Research</td>
										<td class="warning">2 day ago</td>
									</tr>
									<tr>
										<td>Dummy Company 3</td>
										<td>Dummy Job Title</td>
										<td>Anytown, US</td>
										<td>Application</td>
										<td class="danger">3 days ago</td>
									</tr>
									<tr>
										<td>Dummy Company 4</td>
										<td>Dummy Job Title</td>
										<td>Anytown, US</td>
										<td>Introductions</td>
										<td>1 day ago</td>
									</tr>
									<tr>
										<td>Dummy Company 5</td>
										<td>Dummy Job Title</td>
										<td>Anytown, US</td>
										<td>Interviews</td>
										<td>1 day ago</td>
									</tr>
									<tr>
										<td>Dummy Company 6</td>
										<td>Dummy Job Title</td>
										<td>Anytown, US</td>
										<td>Negotiations</td>
										<td>1 day ago</td>
									</tr>
									<tr>
										<td>Dummy Company 7</td>
										<td>Dummy Job Title</td>
										<td>Anytown, US</td>
										<td>Rejection Followup</td>
										<td>1 day ago</td>
									</tr>
									<tr>
										<td><s>Dummy Company 8</s></td>
										<td><s>Dummy Job Title</s></td>
										<td><s>Anytown, US</s></td>
										<td><s>Closed</s></td>
										<td><s>4 days ago</s></td>
									</tr>


								</tbody>
							</table>
					</div>
				</div>
			</div>

		@role('Administrator')
		    <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-home"></i> Role Based</div>

                    <div class="panel-body">
                        You can see this because you have the role of 'Administrator'!
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
		@endrole

	</div><!-- row -->
@endsection
