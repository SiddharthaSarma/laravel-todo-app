<form method="post">
	{{csrf_field()}}
	<input type="text" name="todo">
</form>

@foreach ($todos as $todo)
	{{$todo->todo}}
	<hr>
@endforeach