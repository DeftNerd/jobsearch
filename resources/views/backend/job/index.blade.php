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

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>URL</th>
            <th>Location</th>
            <th class="visible-lg">Created</th>
            <th class="visible-lg">Last Updated</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($companies as $company)
                <tr>
                    <td><a href="/admin/company/{{ $company->slug }}">{{ $company->name }}</a></td>
                    <td><a href="{{ $company->url }}">{{ parse_url($company->url, PHP_URL_HOST) }}</a></td>
                    <td>{{ $company->location }}</td>
                    <td class="visible-lg">{{ $company->created_at->diffForHumans() }}</td>
                    <td class="visible-lg">{{ $company->updated_at->diffForHumans() }}</td>
                    <td>
                      {!! Form::open(array('url' => '/admin/company/' . $company->slug, 'class' => 'pull-right')) !!}
                      {!! Form::hidden('_method', 'DELETE') !!}
                      {!! Form::submit('Delete', array('class' => 'btn btn-warning btn-sm')) !!}
                      {!! Form::close() !!}
                      <a class="btn btn-default btn-sm" href="/admin/company/{{ $company->slug }}/edit">Edit</a>

                    </td>
                </tr>
            @empty
              <tr>
                  <td colspan="6">No companies found</td>
              </tr>
            @endforelse
        </tbody>
    </table>

    <div class="pull-left">
        {{ $companies->count() }} companies(s) total
    </div>

    <div class="pull-right">
      <a class="btn btn-default" href="/admin/company/create" role="button">Add Company</a>
    </div>

    <div class="clearfix"></div>
@stop
