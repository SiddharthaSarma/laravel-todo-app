<form method="post">
	{{csrf_field()}}
	<input type="text" name="todo" value="{{$todo->todo}}">
</form>