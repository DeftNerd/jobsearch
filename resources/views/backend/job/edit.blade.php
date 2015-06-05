@extends ('backend.layouts.master')

@section ('title', 'Company Management')

@section('page-header')
    <h1>
        Company Management
        <small>{{ $company->name }} details</small>
    </h1>
@endsection

@section ('breadcrumbs')
<li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
<li class="active">{!! link_to_route('admin.company.index', 'Company Management') !!}</li>
<li class="active"><a href="/admin/company/{{ $company->slug }}">{{ $company->name }}</a></li>
<li class="active">Edit</li>
@stop

@section('content')

    @if (count($company))
			<div class="row">

				  <div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel-body">

							{!! Form::open(array('route' => array('admin.company.update', $company->slug), 'method' => 'PUT')) !!}
							<div class="form-group">
								{!! Form::label('Name') !!}
								{!! Form::text('name', $company->name,
										array('required',
													'class'=>'form-control')) !!}
							</div>

							<div class="form-group">
								{!! Form::label('URL') !!}
								{!! Form::text('url', $company->url,
										array('required',
													'class'=>'form-control')) !!}
							</div>

							<div class="form-group">
								{!! Form::label('Location') !!}
								{!! Form::text('location', $company->location,
										array('required',
													'class'=>'form-control')) !!}
							</div>

							<div class="form-group">
								{!! Form::label('Public Notes') !!}
								{!! Form::textarea('notes_public', $company->notes_public,
										array('required',
													'class'=>'form-control')) !!}
							</div>

							<div class="form-group">
								{!! Form::label('Private Notes') !!}
								{!! Form::textarea('notes_private', $company->notes_private,
										array('required',
													'class'=>'form-control')) !!}
							</div>

							<div class="form-group">
								{!! Form::submit('Edit Company',
										array('class'=>'btn btn-primary')) !!}
							</div>
							{!! Form::close() !!}

						</div><!--panel body-->
					</div><!-- panel -->
				</div><!-- col-md-10 -->
			</div><!-- row -->
			@endif
@endsection
