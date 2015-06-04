@extends('frontend.layouts.master')

@section('content')
<div class="row">

  <div class="col-xs-12">

    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-question"></i> Contact Me</div>

      <div class="panel-body">
        {!! Form::open(array('route' => 'contactme_store', 'class' => 'form', 'novalidate' => 'novalidate')) !!}
        <div class="form-group">
          {!! Form::label('Your Name') !!}
          {!! Form::text('name', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Your name')) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Your E-mail Address') !!}
          {!! Form::text('email', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Your e-mail address')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Your Message') !!}
          {!! Form::textarea('message', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Your message')) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Contact Us!',
              array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
      </div>

    </div><!-- panel -->

  </div>
</div>
@endsection
