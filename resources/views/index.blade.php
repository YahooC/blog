@extends('layout.main')

@section('message')
	<ul>

	@foreach($record as $message)
		@if($message->id % 2 ==0)
			<li class="even">
		@else
			<li class="odd">
		@endif
				<p>
					<strong>{{$message->username}}</strong>
					<em>於 {{$message->created_at}}留言</em>
				</p>
				<p>
					{{$message->message}}
				</p>
			</li>
	@endforeach
	</ul>
@endsection

@section('pages')
	<div>
	<lu class="pagination">
	
	@for($i=1;$i<=7;$i++)
		<li class="pagination-item"><a href="{{url('/show')}}/{{$i}}">{{ $i }}</a></li>
	@endfor
	
	</lu>
	</div>
@endsection