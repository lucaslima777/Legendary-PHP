@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <table class="table table-bordered table-strip">
                       <thead>
                            <tr>
                               <th>Id</th>
                               <th>Nome</th>
                               <th>Email</th>
                               <th>Telefone</th>
                               <th>Config</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td>
                                        <a href="/clientes/alterar/{{$cliente->id}}" class="btn btn-warning">Alterar</a>

                                    @if (Auth::user()->name === 'admin')
                                        <a href="/clientes/excluir/{{$cliente->id}}" class="btn btn-danger">Excluir</a>
                                    @endif
                                    </td>
                                </tr>
                           @endforeach
                       </tbody>
                   </table>

                   {{$clientes->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection