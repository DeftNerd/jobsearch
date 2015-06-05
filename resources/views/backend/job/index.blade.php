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
@stop

@section('content')

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
      <td><a href="/admin/company/{{ $job->company->slug }}">{{ $job->company->name }}</a></td>
      <td><a href="/admin/job/{{ $job->slug }}">{{ $job->title }}</a></td>
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

    <div class="pull-left">
        {{ $jobs->count() }} companies(s) total
    </div>

    <div class="pull-right">
      <a class="btn btn-default" href="/admin/job/create" role="button">Add Job</a>
    </div>

    <div class="clearfix"></div>
@stop
