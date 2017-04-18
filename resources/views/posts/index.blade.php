@extends('layouts.master')

@section('content')
		<h1>test</h1>
		Post ID: {{ id }}

		{{ $date }}
		@foreach ($posts as $post )
			<div>
				<div class='title'>
					{{ $loop->index + 1}}
					{{ $post['title'] }}
				</div>
				<div class='body'>
					{{ $post['body'] }}
				</div>
			</div>
		@endforeach
@endsection