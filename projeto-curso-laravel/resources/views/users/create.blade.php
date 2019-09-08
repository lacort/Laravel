@extends('layouts.app')

@section('content')

<form method="post"  action="/users/create">
@csrf
<label>Nome</label><br>
<input type="text" name ="name"><br>

<label>Email</label><br>
<input type="text" name="email"><br>

<label>Password</label><br>
<input type="password" name="password"><br>
<br>

<input type="submit" value="Salvar">
</form>


@endsection