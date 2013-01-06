@extends('layout/master')

@section('sidebar')
	{{ $index }}
@stop

@section('content')
	<div class="contribute">
		Please support the project by sending all typographic and functional fixes as pull requests to the repository at <a href="http://github.com/laravel/docs" title="Laravel Documentation Repository">http://github.com/laravel/docs</a>.<br /><br />
		Thank you for being an active member of the Laravel community!
	</div>
	{{ $chapter }}
@stop
