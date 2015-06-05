@extends ('backend.layouts.master')

@section ('title', 'Add New Company')

@section('page-header')
    <h1>
        Company Management
        <small>Add New Company</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">{!! link_to_route('admin.company.index', 'Company Management') !!}</li>
    <li class="active"><a href="/admin/company/create">Add New Company</a></li>
@stop

@section('content')
<div class="row">

  <div class="col-xs-12">

    <div class="panel panel-default">
      <div class="panel-body">
        {!! Form::open(array('url' => 'admin/company', 'class' => 'form', 'novalidate' => 'novalidate')) !!}
        <div class="form-group">
          {!! Form::label('Name') !!}
          {!! Form::text('name', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Company Name')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('URL') !!}
          {!! Form::text('url', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Company Website')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Location') !!}
          {!! Form::text('location', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'City, St, Country')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Public Notes') !!}
          {!! Form::textarea('notes_public', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Public Note')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Private Notes') !!}
          {!! Form::textarea('notes_private', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Private Note')) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Add Company',
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
      </div>

    </div><!-- panel -->

  </div>
</div>
@endsection
