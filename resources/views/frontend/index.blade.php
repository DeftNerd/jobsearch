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
			<table class="table table-bordered table-striped">
				<caption>Jobs I'm Interested In</caption>
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
				@forelse ($jobs as $job)
					<tr>
						<td>{{ $job->company->name }}</td>
						<td>{{ $job->title }}</td>
						<td>{{ $job->location }}</td>
						<td>{{ $job->stage }}</td>
						<td>{{ $job->updated_at->diffForHumans() }}</td>
					</tr>
				@empty
					<tr>
						<td colspan="5">No jobs found</td>
					</tr>
				@endforelse
				</tbody>
			</table>

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
