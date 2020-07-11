@extends('layouts.adm')

@section('content')

<section class="container py-5 mt-5 px-md-0 adm-pag">
    <h2 class="mb-0">Usuários</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" class="d-none d-md-table-cell">Nome Completo</th>
                    <th scope="col" class="d-none d-md-table-cell">CPF</th>
                    <th scope="col" class="d-none d-md-table-cell">RG</th>
                    <th scope="col" class="d-none d-md-table-cell">Email</th>
                    <th scope="col" class="d-none d-md-table-cell">Senha</th>
                    <th scope="col" class="d-none d-md-table-cell">Telefone</th>
                    <th scope="col" class="d-none d-md-table-cell">Excluir</th>
                    <th scope="col" class="d-md-none d-table-cell">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">001</td>
                    <td scope="row" class="d-none d-md-table-cell">Exemplilson da Silva 1</td>
                    <td scope="row" class="d-none d-md-table-cell">111.222.333-44</td>
                    <td scope="row" class="d-none d-md-table-cell">11.222.333-4</td>
                    <td scope="row" class="d-none d-md-table-cell">exemplison1@email.com.br</td>
                    <td scope="row" class="d-none d-md-table-cell">*********</td>
                    <td scope="row" class="d-none d-md-table-cell">(11)99999-0000</td>
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
                <tr>
                    <td scope="row">002</td>
                    <td scope="row" class="d-none d-md-table-cell">Exemplilson da Silva 2</td>
                    <td scope="row" class="d-none d-md-table-cell">111.222.333-45</td>
                    <td scope="row" class="d-none d-md-table-cell">11.222.333-5</td>
                    <td scope="row" class="d-none d-md-table-cell">exemplison2@email.com.br</td>
                    <td scope="row" class="d-none d-md-table-cell">*********</td>
                    <td scope="row" class="d-none d-md-table-cell">(11)99999-2222</td>
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
                <tr>
                    <td scope="row">003</td>
                    <td scope="row" class="d-none d-md-table-cell">Exemplilson da Silva 3</td>
                    <td scope="row" class="d-none d-md-table-cell">111.222.333-46</td>
                    <td scope="row" class="d-none d-md-table-cell">11.222.333-6</td>
                    <td scope="row" class="d-none d-md-table-cell">exemplison3@email.com.br</td>
                    <td scope="row" class="d-none d-md-table-cell">*********</td>
                    <td scope="row" class="d-none d-md-table-cell">(11)99999-3333</td>
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
            </tbody>
        </table>
        <!-- Modal - Conteúdo usuário -->
        <div class="modal fade" id="modalCont" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">ID - 000</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-header text-center">
                              Nome Completo
                            </div>
                            <div class="card-body">
                              <p class="card-text">Exemplilson da Silva X</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                CPF
                            </div>
                            <div class="card-body">
                                <p class="card-text">111.222.333-44</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                RG
                            </div>
                            <div class="card-body">
                                <p class="card-text">11.222.333-44</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Email
                            </div>
                            <div class="card-body">
                                <p class="card-text">exemplilson@email.com.br</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Senha
                            </div>
                            <div class="card-body">
                                <p class="card-text">*********</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Telefone
                            </div>
                            <div class="card-body">
                                <p class="card-text">(11)99999-0000</p>
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
        <div class="modal fade" id="modalDel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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