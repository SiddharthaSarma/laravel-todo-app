<form method="post">
	{{csrf_field()}}
	<input type="text" name="todo">
</form>

@foreach ($todos as $todo)
	{{$todo->todo}} <a href="{{route('todos.delete', ['id' => $todo->id])}}">Delete</a>
	<hr>
@endforeach