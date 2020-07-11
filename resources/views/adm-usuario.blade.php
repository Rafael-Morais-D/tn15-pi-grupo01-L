@extends('layouts.adm')

@section('content')

<section class="container py-5 mt-5 adm-pag">
    <h2 class="mb-0">Usuários</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" class="d-none d-md-table-cell">Nome Completo</th>
                    <th scope="col" class="d-none d-md-table-cell">Email</th>
                    <th scope="col" class="d-none d-md-table-cell">CPF</th>
                    <th scope="col" class="d-none d-md-table-cell">Excluir</th>
                    <th scope="col" class="d-md-none d-table-cell">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">001</td>
                    <td scope="row" class="d-none d-md-table-cell">Exemplilson da Silva 1</td>
                    <td scope="row" class="d-none d-md-table-cell">exemplison1@email.com.br</td>
                    <td scope="row" class="d-none d-md-table-cell">111.222.333-44</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <i class="fas fa-eye mr-2"></i>
                        <i class="fas fa-pencil mr-2"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
                <tr>
                    <td scope="row">002</td>
                    <td scope="row" class="d-none d-md-table-cell">Exemplilson da Silva 2</td>
                    <td scope="row" class="d-none d-md-table-cell">exemplison2@email.com.br</td>
                    <td scope="row" class="d-none d-md-table-cell">111.222.333-45</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <i class="fas fa-eye mr-2"></i>
                        <i class="fas fa-pencil mr-2"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
                <tr>
                    <td scope="row">003</td>
                    <td scope="row" class="d-none d-md-table-cell">Exemplilson da Silva 3</td>
                    <td scope="row" class="d-none d-md-table-cell">exemplison3@email.com.br</td>
                    <td scope="row" class="d-none d-md-table-cell">111.222.333-46</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <i class="fas fa-eye mr-2"></i>
                        <i class="fas fa-pencil mr-2"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Modal - Excluir usuário -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir usuário</h5>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir este usuário?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Cancelar</button>
                        <a href="#">
                            <button type="button" class="btn btn-danger mb-0">Excluir</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection