@extends ('backend.layouts.master')

@section ('title', 'Add New Job')

@section('page-header')
    <h1>
        Job Management
        <small>Add New Job</small>
    </h1>
@endsection

@section ('breadcrumbs')
    <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">{!! link_to_route('admin.job.index', 'Job Management') !!}</li>
    <li class="active"><a href="/admin/job/create">Add New Job</a></li>
@stop

@section('content')
<div class="row">

  <div class="col-xs-12">

    <div class="panel panel-default">
      <div class="panel-body">
        {!! Form::open(array('url' => 'admin/job', 'class' => 'form', 'novalidate' => 'novalidate')) !!}

        @if (isset($company_slug))
          <div class="form-group">
            {!! Form::label('Company') !!}
            {!! Form::select('company_slug', $companies, $company_slug) !!}
          </div>
        @else
        <div class="form-group">
          {!! Form::label('Company') !!}
          {!! Form::select('company_slug', $companies) !!}
        </div>
        @endif

        <div class="form-group">
          {!! Form::label('Title') !!}
          {!! Form::text('title', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Job Title')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('URL') !!}
          {!! Form::text('url', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Job Listing URL')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Job Description') !!}
          {!! Form::textarea('description', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Job Description')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Location') !!}
          {!! Form::text('location', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'City, St, Country')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Contact Name') !!}
          {!! Form::text('contact_name', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'First Last')) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Contact Email') !!}
          {!! Form::text('contact_email', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'somebody@somewhere.com')) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Contact Phone') !!}
          {!! Form::text('contact_phone', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'All Digits')) !!}
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
          {!! Form::label('Cover Letter') !!}
          {!! Form::textarea('cover_letter', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Cover Letter')) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Resume URL') !!}
          {!! Form::text('resume_url', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'https://resumonk/deftnerd')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Job Listed At') !!}
          {!! Form::text('listed_at', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'2015-01-20')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Application Stage') !!}
          {!! Form::select('stage', array(
            'researching' => 'Researching',
            'drafting' => 'Drafting Application',
            'applied' => 'Application Sent',
            'introductions' => 'Initial Communications',
            'interviews' => 'Interviewing',
            'negotiations' => 'Negotiating Acceptance',
            'rejection' => 'Rejection Followup',
            'closed' => 'Closed',
          ), 'researching') !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Add Job',
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
      </div>

    </div><!-- panel -->

  </div>
</div>
@endsection
