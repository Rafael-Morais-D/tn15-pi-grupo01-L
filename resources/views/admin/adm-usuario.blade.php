@extends('layouts.adm')

@section('content')

<section class="container py-5 mt-5 px-md-0 adm-pag">
    <h2 class="mb-0">Usuários</h2>
    @if($users->isEmpty())
        <section class="row mx-2">
            <div class="col-12">
                <h3 class="text-center">Parece que ainda não temos nenhum usuário!</h3>
            </div>
        </section>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" class="d-none d-md-table-cell">Nome</th>
                    <th scope="col" class="d-none d-md-table-cell">Endereço</th>
                    <th scope="col" class="d-none d-md-table-cell">CEP</th>
                    <th scope="col" class="d-none d-md-table-cell">Cidade</th>
                    <th scope="col" class="d-none d-md-table-cell">UF</th>
                    <th scope="col" class="d-none d-md-table-cell">Email</th>
                    <th scope="col" class="d-none d-md-table-cell">Excluir</th>
                    <th scope="col" class="d-md-none d-table-cell">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{ $user->id }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->nome }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->endereco }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->cep }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->cidade }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->uf }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->email }}</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalDel">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCont">
                            <i class="fas fa-eye mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalDel">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Modal - Conteúdo usuário -->
        <div class="modal fade" id="modalCont{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ID - {{ $user->id }}</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-header text-center">
                              Nome Completo
                            </div>
                            <div class="card-body">
                              <p class="card-text">{{ $user->nome }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Endereço
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $user->endereco }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                CEP
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $user->cep }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                UF
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $user->uf }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Email
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $user->email }}</p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary mb-0" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal - Excluir usuário -->
        <div class="modal fade" id="modalDel{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir usuário</h5>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir este usuário?</p>
                    </div>
                    <div class="modal-body text-left">
                        <p>ID: {{ $user->id }}</p>
                        <p>Nome: {{ $user->nome }}</p>
                        <p>Email: {{ $user->email }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Cancelar</button>
                        <form action="/admin/adm-usuario/{{$user->id}}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button id="delete-contact" type="submit" class="btn btn-danger mb-0">Excluir</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @if(!empty(Request::get('success')))
        <div class="alert alert-success text-center col-md-12">
            {{ Request::get('success') }}
        </div>
    @endif
</section>

@endsection