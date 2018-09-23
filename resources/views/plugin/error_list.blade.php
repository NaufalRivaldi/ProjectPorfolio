@if($errors->any())
	<br>
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $txt)
				<li>{{$txt}}</li>
			@endforeach
		</ul>
	</div>
@endif