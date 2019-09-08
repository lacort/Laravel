@extends('layouts.app')

@section('content')
<a href="/users/create">Novo Usuario</a>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Ações</th>
    
    </tr>
    @foreach($users as $user)
    <tr>
        <th>{{$user->id}}</th>
        <th>{{$user->name}}</th>
        <th>{{$user->email}}</th>
        <th>
            <a href="users/edit/{{$user->id}}">[Editar]</a>
            <a href="users/destroy/{{$user->id}}">[Excluir]</a>
        </th>
    
    </tr>
    @endforeach

</table>
<?php
if ($user->count()> 0)
{
    echo $users->links();
}
?>

@endsection