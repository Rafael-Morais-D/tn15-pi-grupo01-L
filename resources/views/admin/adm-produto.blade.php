@extends('layouts.adm')

@section('content')

@section('title')
    Bake & Go | Adm. Produto
@endsection

<section class="container py-5 mt-5 px-md-0 adm-pag">
    <div class="d-flex flex-wrap justify-content-between align-items-center">
        <h2 class="col-12 col-md-6 mb-0 px-0">Produtos</h2>
        <p class="col-12 col-md-6 mt-3 mt-md-0 px-0 text-md-right">Adicionar um produto <a href="#" data-toggle="modal" data-target="#modalAdd"><i class="far fa-plus-circle text-dark"></i></a></p>
    </div>
    <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" class="d-none d-md-table-cell">REF</th>
                    <th scope="col" class="d-none d-md-table-cell">Produto</th>
                    <th scope="col" class="d-none d-md-table-cell">Descrição</th>
                    <th scope="col" class="d-none d-md-table-cell">Preço</th>
                    <th scope="col" class="d-none d-md-table-cell">Unidade de medida</th>
                    <th scope="col" class="d-none d-md-table-cell">Categoria</th>
                    <th scope="col" class="d-none d-md-table-cell">Editar</th>
                    <th scope="col" class="d-none d-md-table-cell">Excluir</th>
                    <th scope="col" class="d-md-none d-table-cell">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">001</td>
                    <td scope="row" class="d-none d-md-table-cell">PAO-ITA</td>
                    <td scope="row" class="d-none d-md-table-cell">Pão Italiano</td>
                    <td scope="row" class="d-none d-md-table-cell">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptatibus iusto vero.</td>
                    <td scope="row" class="d-none d-md-table-cell">12,00</td>
                    <td scope="row" class="d-none d-md-table-cell">g</td>
                    <td scope="row" class="d-none d-md-table-cell">Pães</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalEdit">
                            <i class="fas fa-pencil-alt text-dark"></i>
                        </a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCont">
                            <i class="fas fa-eye mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalEdit">
                            <i class="fas fa-pencil-alt mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td scope="row">002</td>
                    <td scope="row" class="d-none d-md-table-cell">BL-CHOCO</td>
                    <td scope="row" class="d-none d-md-table-cell">Bolo de Chocolate</td>
                    <td scope="row" class="d-none d-md-table-cell">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptatibus iusto vero.</td>
                    <td scope="row" class="d-none d-md-table-cell">25,00</td>
                    <td scope="row" class="d-none d-md-table-cell">Unidade</td>
                    <td scope="row" class="d-none d-md-table-cell">Bolos</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalEdit">
                            <i class="fas fa-pencil-alt text-dark"></i>
                        </a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCont">
                            <i class="fas fa-eye mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalEdit">
                            <i class="fas fa-pencil-alt mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
        <!-- Modal - Conteúdo produto -->
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
                              REF
                            </div>
                            <div class="card-body">
                              <p class="card-text">CAT-NOME</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Produto
                            </div>
                            <div class="card-body">
                                <p class="card-text">Produto genérico</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Descrição
                            </div>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam voluptatibus iusto vero.</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Preço
                            </div>
                            <div class="card-body">
                                <p class="card-text">25,00</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Unidade de medida
                            </div>
                            <div class="card-body">
                                <p class="card-text">g</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Categoria
                            </div>
                            <div class="card-body">
                                <p class="card-text">ID Categoria</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary mb-0" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal - Editar produto -->
        <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                            <input type="text" class="form-control text-uppercase" placeholder="CAT-NOME"
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