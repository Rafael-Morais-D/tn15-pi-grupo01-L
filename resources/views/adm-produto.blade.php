@extends('layouts.adm')

@section('content')
<section class="container py-5 mt-5 adm-pag">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Produtos</h2>
        <p>Adicionar um produto <a href="#" data-toggle="modal" data-target="#modalAdd"><i class="far fa-plus-circle text-dark"></i></a></p>
    </div>
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">REF</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">001PAOITA</td>
                    <td scope="row">Pão Italiano</td>
                    <td scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptatibus iusto vero corrupti. Rerum, earum? Facilis nulla dicta, fugit laboriosam, dolor voluptas natus eum esse, dolores officia illum quibusdam inventore.</td>
                    <td scope="row">12</td>
                    <td scope="row">Pães</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modalAddProduto">
                            <i class="fas fa-pencil-alt text-dark"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">002BLCHOCO</td>
                    <td scope="row">Bolo de Chocolate</td>
                    <td scope="row">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptatibus iusto vero corrupti. Rerum, earum? Facilis nulla dicta, fugit laboriosam, dolor voluptas natus eum esse, dolores officia illum quibusdam inventore.</td>
                    <td scope="row">25</td>
                    <td scope="row">Bolos</td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modalAddProduto">
                            <i class="fas fa-pencil-alt text-dark"></i>
                        </a>
                    </td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
        <!-- Modal - Editar produto -->
        <div class="modal fade" id="modalAddProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar produto</h5>
                </div>
                <br>
                <form class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="uploadImg">Imagem</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="pt">
                                <label class="custom-file-label" for="customFileLang">Escolher imagem</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNomeProduto">Produto</label>
                            <input type="text" class="form-control text-capitalize" placeholder="Nome do produto"
                                aria-describedby="adicionarProdutoHelp" id="inputNomeProduto" name="inputNomeProduto"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCategoria">Categoria</label>
                            <select class="custom-select">
                                <option value="1">Pães</option>
                                <option value="2">Bolos</option>
                                <option value="3">Cafés</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPreco">Preço</label>
                            <input type="number" class="form-control" placeholder="Preço do produto"
                                aria-describedby="adicionarProdutoHelp" id="inputPreco" name="inputPreco"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputREF">REF</label>
                            <input type="text" class="form-control text-uppercase" placeholder="001NOME"
                                aria-describedby="adicionarREF" id="inputREF" name="inputREF"
                                required>
                        </div>
                        <div class="form-group col-md-6">

                        <label for="inputDescricao">Descrição</label>
                            <input type="text" class="form-control" placeholder="Descrição do produto"
                                aria-describedby="adicionarDescricao" id="inputDescricao" name="inputDescricao"
                                required>
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
        <!-- Modal - Excluir produto -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir produto</h5>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir este produto?</p>
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
        <!-- Modal - Adicionar produto -->
        <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar produto</h5>
                </div>
                <br>
                <form class="container">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="uploadImg">Imagem</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="pt">
                                <label class="custom-file-label" for="customFileLang">Escolher imagem</label>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNomeProduto">Produto</label>
                            <input type="text" class="form-control text-capitalize" placeholder="Nome do produto"
                                aria-describedby="adicionarProdutoHelp" id="inputNomeProduto" name="inputNomeProduto"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCategoria">Categoria</label>
                            <select class="custom-select">
                                <option value="1">Pães</option>
                                <option value="2">Bolos</option>
                                <option value="3">Cafés</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPreco">Preço</label>
                            <input type="number" class="form-control" placeholder="Preço do produto"
                                aria-describedby="adicionarProdutoHelp" id="inputPreco" name="inputPreco"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputREF">REF</label>
                            <input type="text" class="form-control text-uppercase" placeholder="001NOME"
                                aria-describedby="adicionarREF" id="inputREF" name="inputREF"
                                required>
                        </div>
                        <div class="form-group col-md-6">

                        <label for="inputDescricao">Descrição</label>
                            <input type="text" class="form-control" placeholder="Descrição do produto"
                                aria-describedby="adicionarDescricao" id="inputDescricao" name="inputDescricao"
                                required>
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