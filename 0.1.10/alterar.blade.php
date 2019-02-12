@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alterar Cliente</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="/clientes/alterardb" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" value="{{ $cliente->nome }}" name="nome" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" value="{{ $cliente->email }}" name="email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" value="{{ $cliente->telefone }}" name="telefone" class="form-control">
                                </div>

                                <input type="hidden" name="id" value="{{ $cliente->id }}">
                                <div>
                                    <button class="btn btn-primary">Cadastrar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection