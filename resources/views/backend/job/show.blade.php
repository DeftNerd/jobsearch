@extends ('backend.layouts.master')

@section ('title', 'Company Management')

@section('page-header')
    <h1>
        Job Management
        <small>Active Jobs</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">{!! link_to_route('admin.job.index', 'Job Management') !!}</li>
    <li class="active">{{ isset($job->title) ? $job->title : 'Error' }}</li>

@stop

@section('content')

    @if (count($job))
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">{{ $job->title }} ({{ isset($job->title) ? $job->location : 'Unknown Location' }})</h4>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <blockquote>
                <p>{{ isset($job->description) ? nl2br($job->description) : 'No job description saved' }}</p>
                <footer>
                  Found at: <a href="{{ $job->url }}">{{ $job->url }}</a>.
                  @if ($job->listed_at)
                  Job posted {{ $job->listed_at->diffForHumans() }}
                  @endif
                </footer>
              </blockquote>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">Contact: {{ $job->contact_name }}</div>
            <div class="col-md-4">Email: {{ $job->contact_email }}</div>
            <div class="col-md-4">Phone: {{ $job->contact_phone }}</div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>{{ isset($job->notes_public) ? nl2br($job->notes_public) : 'No public notes saved' }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>{{ isset($job->notes_private) ? nl2br($job->notes_private) : 'No private notes saved' }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>{{ isset($job->cover_letter) ? nl2br($job->cover_letter) : 'No cover letter created' }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>{{ isset($job->resume_url) ? nl2br($job->resume_url) : 'No resume URL set' }}</p>
            </div>
          </div>

          <br/>
          <div class="panel-footer">
            <div class="col-md-6 pull-left"><p class="text-muted">Created {{ $job->created_at->diffForHumans() }}</p></div>
            <div class="col-md-6 pull-right"><p class="text-muted text-right">Modified {{ $job->updated_at->diffForHumans() }}</p></div>
          </div>
        </div>
      </div><!-- panel -->

    @else
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>Company not found</h4>
        </div>
      </div><!-- panel -->
    @endif

@stop
