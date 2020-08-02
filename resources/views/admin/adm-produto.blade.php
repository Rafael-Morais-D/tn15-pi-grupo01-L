@extends('layouts.adm')

@section('content')

<section class="container py-5 mt-5 px-md-0 adm-pag">
    <div class="d-flex flex-wrap justify-content-between align-items-center">
        <h2 class="col-12 col-md-6 mb-0 px-0">Produtos</h2>
        <a href="#" class="text-dark" data-toggle="modal" data-target="#modalAdd"><p class="col-12 col-md-6 mt-3 mt-md-0 px-0 text-md-right">Adicionar um produto <i class="far fa-plus-circle text-dark"></i></a></p>
    </div>
    @if($produtos->isEmpty())
        <section class="row mx-2">
            <div class="col-12">
                <h3 class="text-center">Parece que ainda não temos nenhum produto!</h3>
            </div>
        </section>
    @else
        <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" class="d-none d-md-table-cell">REF</th>
                        <th scope="col" class="d-none d-md-table-cell">Produto</th>
                        <th scope="col" class="d-none d-md-table-cell">Imagem</th>
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
                    @foreach ($produtos as $produto)
                        <tr>
                            <td scope="row">{{ $produto->id }}</td>
                            <td scope="row" class="d-none d-md-table-cell">{{ $produto->ref }}</td>
                            <td scope="row" class="d-none d-md-table-cell">{{ $produto->nome }}</td>
                            <td scope="row" class="d-none d-md-table-cell">{{ $produto->imagem }}</td>
                            <td scope="row" class="d-none d-md-table-cell">{{ $produto->descricao }}</td>
                            <td scope="row" class="d-none d-md-table-cell">{{ $produto->preco }}</td>
                            <td scope="row" class="d-none d-md-table-cell">{{ $produto->unidadeMedida }}</td>
                            <td scope="row" class="d-none d-md-table-cell">{{ $produto->categoria_id }}</td>
                            <td class="d-none d-md-table-cell">
                                <a href="#" data-toggle="modal" data-target="#modalEdit{{ $produto->id }}">
                                    <i class="fas fa-pencil-alt text-dark"></i>
                                </a>
                            </td>
                            <td class="d-none d-md-table-cell">
                                <a href="#" data-toggle="modal" data-target="#modalDel{{ $produto->id }}">
                                    <i class="fas fa-trash-alt text-dark"></i>
                                </a>
                            </td>
                            <td scope="col" class="d-md-none d-table-cell">
                                <a href="#" data-toggle="modal" data-target="#modalCont{{ $produto->id }}">
                                    <i class="fas fa-eye mr-2 text-dark"></i>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#modalEdit{{ $produto->id }}">
                                    <i class="fas fa-pencil-alt mr-2 text-dark"></i>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#modalDel{{ $produto->id }}">
                                    <i class="fas fa-trash-alt text-dark"></i>
                                </a>
                            </td>
                        </tr>

                        <!-- Modal - Conteúdo produto -->
                        <div class="modal fade" id="modalCont{{ $produto->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">ID - {{ $produto->id }}</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header text-center">
                                            REF
                                            </div>
                                            <div class="card-body">
                                            <p class="card-text">{{ $produto->ref }}</p>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header text-center">
                                                Produto
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{ $produto->nome }}</p>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header text-center">
                                                Descrição
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{ $produto->descricao }}</p>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header text-center">
                                                Preço
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">R$ {{ $produto->preco }}0</p>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header text-center">
                                                Unidade de medida
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{ $produto->unidadeMedida }}</p>
                                            </div>
                                        </div>
                                        <div class="card mt-3">
                                            <div class="card-header text-center">
                                                Categoria
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{ $categoria->categoria[$produto->categoria_id] }}</p>
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
                        <div class="modal fade" id="modalEdit{{ $produto->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <div class="modal fade" id="modalDel{{ $produto->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

                    @endforeach

                </tbody>
            </table>
        </div>
    @endif
        
    <!-- Modal - Adicionar produto -->
    <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adicionar produto</h5>
                </div>
                <br>
                <form action="/admin/adm-produto" method="POST" enctype="multipart/form-data" class="container">
                    @csrf
                    {{ method_field('POST') }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNomeProduto">Produto</label>
                            <input type="text" class="form-control text-capitalize" placeholder="Nome do produto"
                                aria-describedby="adicionarProdutoHelp" id="inputNomeProduto" name="nome"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="uploadImg">Imagem</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="customFileLang" lang="pt">
                                <label class="custom-file-label" for="customFileLang">Escolher imagem</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCategoria">Categoria</label>
                            <select name="categoria_id" class="custom-select">
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option> 
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPreco">Preço</label>
                            <input type="number" class="form-control" placeholder="Preço do produto"
                                aria-describedby="adicionarProdutoHelp" id="inputPreco" name="preco"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputREF">REF</label>
                            <input type="text" class="form-control text-uppercase" placeholder="CAT-NOME"
                                aria-describedby="adicionarREF" id="inputREF" name="ref"
                                required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputUnidadeMedida">Unidade de medida</label>
                            <input type="text" class="form-control" placeholder="Unidade de medida do produto"
                                aria-describedby="adicionarUnidadeMedida" id="inputUnidadeMedida" name="unidadeMedida"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputDescricao">Descrição</label>
                            <textarea class="form-control" placeholder="Descrição do produto"
                                aria-describedby="adicionarDescricao" id="inputDescricao" name="descricao"
                                required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer pr-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection