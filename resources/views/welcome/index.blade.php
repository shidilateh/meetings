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

@section('footer')
<div class="content">
	<div class="menu-btm">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Two Option</a></li>
			<li><a href="#">Third Option</a></li>
			<li><a href="#">Fourth Option</a></li>
		</ul>
	</div>
</div>
@stop