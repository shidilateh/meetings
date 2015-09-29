@extends('app')

@section('content')
<div class="content">
	{!! Form::open(array('route' => 'my/route')) !!}
	<div class="form-group">	
		{!! Form::label('description', 'Description') !!}
		{!! Form::text('description', 'Best field ever!',array('class' => 'form-control')) !!}
	</div>
	{!! Form::close()!!}
</div>
@stop