@extends ('backend.layouts.master')

@section ('title', 'Company Management')

@section('page-header')
    <h1>
        Company Management
        <small>Active Companies</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">{!! link_to_route('admin.company.index', 'Company Management') !!}</li>
    <li class="active">{{ isset($company->name) ? $company->name : 'Error' }}</li>

@stop

@section('content')

    @if (count($company))
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">{{ $company->name }}</h4>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6 pull-left"><a href="{{ $company->url }}">{{ parse_url($company->url, PHP_URL_HOST) }}</a></div>
            <div class="col-md-6 pull-right"><p class="text-right">{{ $company->location }}</p></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              {!! nl2br($company->notes_public) !!}
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              {!! nl2br($company->notes_private) !!}
            </div>
          </div>
          <br/>
          <div class="panel-footer">
            <div class="col-md-6 pull-left"><p class="text-muted">Created {{ $company->created_at->diffForHumans() }}</p></div>
            <div class="col-md-6 pull-right"><p class="text-muted text-right">Modified {{ $company->updated_at->diffForHumans() }}</p></div>
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

    <div class="clearfix"></div>

    @forelse ($jobs as $job)
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-6 pull-left"><h4>{{ $job->title }}</h4></div>
            <div class="col-md-6 pull-right">
              <p class="text-right">{{ $job->location }}</p>
              <p class="text-right"><a href="{{ $job->url }}">{{ parse_url($job->url, PHP_URL_HOST) }}</a></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              {!! nl2br($job->description) !!}
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              {!! nl2br($job->notes_public) !!}
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              {!! nl2br($job->notes_private) !!}
            </div>
          </div>
          <div class="panel-footer">
            <div class="col-md-6 pull-left"><p class="text-muted">Listed {{ $job->listed_at->diffForHumans() }}</p></div>
            <div class="col-md-6 pull-right"><p class="text-muted text-right">Modified {{ $job->updated_at->diffForHumans() }}</p></div>
          </div>
        </div>
      </div><!-- panel -->

    @empty
      <div class="panel panel-default">
        <div class="panel-body">
          <h4>No Jobs Found</h4>
        </div>
      </div><!-- panel -->
    @endforelse

@stop
