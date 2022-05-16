@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
        <h1>Lista de usuarios</h1><br>
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>RFC</th>
                        <th>Notas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->phone }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->rfc }}</td>
                            <td>{{ $usuario->notes }}</td>
                            <td> 
                                <a href="{{ route('edit',[$usuario->id]) }}"><i class="bi bi-pencil-square"></i></a>
                                @if ($usuario->id != Auth::user()->id)
                                    <a href="{{ route('delete',[$usuario->id]) }}"><i class="bi bi-trash-fill"></i> </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

