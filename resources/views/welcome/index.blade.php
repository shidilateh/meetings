@extends('app')

@section('content')
<div class="content">
	{{$data}}
	{!! Form::open(array('url' => 'my/route')) !!}
	<div class="form-group">	
		{!! Form::label('description', 'Description') !!}
		{!! Form::text('description', null,array('class' => 'form-control')) !!}
	</div>
	{!! Form::close()!!}
</div>
@stop