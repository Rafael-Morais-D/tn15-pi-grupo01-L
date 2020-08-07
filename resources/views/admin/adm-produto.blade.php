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
                                                <p class="card-text"></p>
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
                                <div class="modal-content col-12">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Editar produto - ID {{ $produto->id }}</h5>
                                    </div>
                                    <br>
                    
                                    <form action="/admin/adm-produto/{{$produto->id}}" method="POST" enctype="multipart/form-data" class="container">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputNome">Nome</label>
                                                <input id="inputNome" class="form-control" name="nome" type="text" placeholder="Nome do produto" aria-describedby="adicionarProdutoHelp" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputImagem">Imagem</label>
                                                <input id="inputImagem" class="form-control" name="imagem" type="text" placeholder="Imagem teste" aria-describedby="adicionarImagemHelp" required>
                                                {{-- <label for="uploadImg">Imagem</label>
                                                <div class="custom-file">
                                                    <input type="file" name="imagem" class="form-control" id="uploadImg" placeholder="Inserir imagem" aria-describedby="adicionarImagemHelp" required>
                                                    <label class="custom-file-label" for="uploadImg">Escolher imagem</label>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputRef">REF</label>
                                                <input id="inputRef" class="form-control text-uppercase" name="ref" type="text" placeholder="CAT-PRD" aria-describedby="adicionarRefHelp" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputCategoria">Categoria</label>
                                                <input id="inputCategoria" class="form-control" name="categoria_id" type="number" placeholder="Categoria do produto" aria-describedby="adicionarCategoriaHelp" required>
                                                {{-- <select id="inputCategoria" name="categoria" class="custom-select" placeholder="Categoria do produto" aria-describedby="adicionarCategoriaHelp" required>
                                                    @foreach ($categorias as $categoria)
                                                        <option>{{ $categoria->categoria }}</option>
                                                    @endforeach
                                                </select> --}}
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputPreco">Preço</label>
                                                <input id="inputPreco" class="form-control" name="preco" type="number" placeholder="Preço" aria-describedby="adicionarPrecoHelp" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputUnidadeMedida">Unidade de Medida</label>
                                                <input id="inputUnidadeMedida" class="form-control" name="unidadeMedida" type="text" placeholder="Unidade de medida" aria-describedby="adicionarUnidadeMedidaHelp" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputDescricao">Descrição</label>
                                                <textarea id="inputDescricao" class="form-control" name="descricao" placeholder="Descrição do produto" aria-describedby="adicionarDescricaoHelp" required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer pr-0">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Editar</button>
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
                                        <form action="/admin/adm-produto/{{$produto->id}}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button id="excluir-produto" type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
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

                <form action="adm-produto" method="POST" enctype="multipart/form-data" class="container">
                    @csrf
                    {{ method_field('POST') }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNome">Nome</label>
                            <input id="inputNome" class="form-control" name="nome" type="text" placeholder="Nome do produto" aria-describedby="adicionarProdutoHelp" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputImagem">Imagem</label>
                            <input id="inputImagem" class="form-control" name="imagem" type="text" placeholder="Imagem teste" aria-describedby="adicionarImagemHelp" required>
                            {{-- <label for="uploadImg">Imagem</label>
                            <div class="custom-file">
                                <input type="file" name="imagem" class="form-control" id="uploadImg" placeholder="Inserir imagem" aria-describedby="adicionarImagemHelp" required>
                                <label class="custom-file-label" for="uploadImg">Escolher imagem</label>
                            </div> --}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputRef">REF</label>
                            <input id="inputRef" class="form-control text-uppercase" name="ref" type="text" placeholder="CAT-PRD" aria-describedby="adicionarRefHelp" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCategoria">Categoria</label>
                            <input id="inputCategoria" class="form-control" name="categoria_id" type="number" placeholder="Categoria do produto" aria-describedby="adicionarCategoriaHelp" required>
                            {{-- <select id="inputCategoria" name="categoria" class="custom-select" placeholder="Categoria do produto" aria-describedby="adicionarCategoriaHelp" required>
                                @foreach ($categorias as $categoria)
                                    <option>{{ $categoria->categoria }}</option>
                                @endforeach
                            </select> --}}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPreco">Preço</label>
                            <input id="inputPreco" class="form-control" name="preco" type="number" placeholder="Preço" aria-describedby="adicionarPrecoHelp" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputUnidadeMedida">Unidade de Medida</label>
                            <input id="inputUnidadeMedida" class="form-control" name="unidadeMedida" type="text" placeholder="Unidade de medida" aria-describedby="adicionarUnidadeMedidaHelp" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputDescricao">Descrição</label>
                            <textarea id="inputDescricao" class="form-control" name="descricao" placeholder="Descrição do produto" aria-describedby="adicionarDescricaoHelp" required></textarea>
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

    @if(!empty(Request::get('success')))
        <div class="alert alert-success text-center col-md-12">
            {{ Request::get('success') }}
        </div>
    @endif

</section>

@endsection