@extends('layouts.adm')

@section('content')

<section class="container py-5 mt-5 px-md-0 adm-pag">
    <div class="d-flex flex-wrap justify-content-between align-items-center">
        <h2 class="col-12 col-md-6 mb-0 px-0">Categorias</h2>
        <p class="col-12 col-md-6 mt-3 mt-md-0 px-0 text-md-right">Adicionar uma categoria <a href="#" data-toggle="modal" data-target="#modalAdd"><i class="far fa-plus-circle text-dark"></i></a></p>
    </div>
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" class="d-none d-md-table-cell">Categoria</th>
                    <th scope="col" class="d-none d-md-table-cell">Editar</th>
                    <th scope="col" class="d-none d-md-table-cell">Excluir</th>
                    <th scope="col" class="d-md-none d-table-cell">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">001</td>
                    <td scope="row" class="d-none d-md-table-cell">Pães</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCategoria">
                            <i class="fas fa-pencil-alt text-dark"></i>
                        </a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalDel">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCont">
                            <i class="fas fa-eye mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalCategoria">
                            <i class="fas fa-pencil-alt mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalDel">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">002</td>
                    <td scope="row" class="d-none d-md-table-cell">Bolos</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCategoria">
                            <i class="fas fa-pencil-alt text-dark"></i>
                        </a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalDel">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCont">
                            <i class="fas fa-eye mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalCategoria">
                            <i class="fas fa-pencil-alt mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalDel">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">003</td>
                    <td scope="row" class="d-none d-md-table-cell">Salgados</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCategoria">
                            <i class="fas fa-pencil-alt text-dark"></i>
                        </a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalDel">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCont">
                            <i class="fas fa-eye mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalCategoria">
                            <i class="fas fa-pencil-alt mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalDel">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Modal - Editar categoria -->
        <div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar categoria</h5>
                </div>
                <br>
                <form class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputID">ID</label>
                            <input type="number" class="form-control" placeholder="000"
                                aria-describedby="adicionarID" id="inputID" name="inputID"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCategoria">Categoria</label>
                            <select class="custom-select">
                                <option value="1">Pães</option>
                                <option value="2">Bolos</option>
                                <option value="3">Salgados</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer pr-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <!-- Modal - Conteúdo categoria -->
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
                              Categoria
                            </div>
                            <div class="card-body">
                              <p class="card-text">Categoria genérica</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary mb-0" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal - Excluir categoria -->
        <div class="modal fade" id="modalDel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir categoria</h5>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir esta categoria?</p>
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
        <!-- Modal - Adicione uma categoria -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adicionar categoria</h5>
                    </div>
                    <form class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputID">ID</label>
                            <input type="number" class="form-control" placeholder="000"
                                aria-describedby="adicionarID" id="inputID" name="inputID"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCategoria">Categoria</label>
                            <select class="custom-select">
                                <option value="1">Pães</option>
                                <option value="2">Bolos</option>
                                <option value="3">Salgados</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer pr-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
</section>

@endsection