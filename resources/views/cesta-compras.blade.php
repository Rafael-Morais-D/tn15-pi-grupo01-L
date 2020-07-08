@extends('layouts.app');

@section('content')

    <main class="container-fluid py-5 mt-5">
            <header class="topo-pagina" id="topoCarrinho">
                <h2 class="col-12 text-center py-4">Cesta de Compras</h2>
            </header>
            <section class="container">
                <div class="row-cesta mr-2 ml-2">
                    <form class="col-12 mb-3 link-continuar" id="carrinhoForm" action="pagamento.php" method="post">
                        <p class="mb-5 text-center">Confira abaixo os produtos selecionados, clique em Finalizar Compra ou <a href="">continue comprando</a></p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Produto</th>
                                    <th scope="col" class="d-none d-md-table-cell">Preço Unitário</th>
                                    <th scope="col">Preço Total</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <div class="d-flex align-items-start justify-content-start flex-column flex-lg-row">
                                            <img src="{{ asset('img/03_bakeandgo.jpg') }}" alt="Produto 04" width="65px" height="auto" class="mr-3">
                                            <div class="text-left">
                                                <h5 class="my-1"><span class="cart-qtd">1</span> Pão Italiano</h5>
                                                <small class="text-muted my-0">REF: 001PAOITA</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-unit-price d-none d-md-table-cell">R$12</td>
                                    <td class="cart-subtotal-price">R$12</td>
                                    <td>
                                        <a href="#" class="ml-3" data-toggle="modal" data-target="#modalProduto01"><i class="fas fa-pencil-alt text-dark"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#modal"><i class="fas fa-trash-alt text-dark"></i>
                                    </td>
                                    <!-- Modal Produto 01 -->
                                    <div class="modal fade mt-5" id="modalProduto01" tabindex="-1" role="dialog" aria-labelledby="modalProduto01Label" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalProduto01Label">Adicionar</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="formProduto01Edit">
                                                        <div class="form-row">
                                                            <div class="form-group col">
                                                                <label for="quantidadeProduto01">Quantidade</label>
                                                                <input type="number" class="form-control" id="quantidadeProduto01" step="1" min="1" value="1" form="carrinhoForm" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix mb-0">
                                                            <button data-dismiss="modal" class="btn btn-primary">Atualizar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Modal Produto 01 -->
                                    <!-- Modal - Excluir Produto 01 -->
                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Excluir produto</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Deseja realmente excluir da cesta de compras?</p>
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
                                    <!-- /Modal - Excluir Produto 01 -->
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="d-flex align-items-start justify-content-start flex-column flex-lg-row">
                                            <img src="{{ asset('img/05_bakeandgo.jpg') }}" alt="Produto 04" width="65px" height="auto" class="mr-3">
                                            <div class="text-left">
                                                <h5 class="my-1"><span class="cart-qtd">2</span> Bolo de Chocolate com frutas vermelhas</h5>
                                                <small class="text-muted my-0">REF: 002BLCHOCO</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-unit-price d-none d-md-table-cell">R$25</td>
                                    <td class="cart-subtotal-price">R$25</td>
                                    <td>
                                        <a href="#" class="ml-3" data-toggle="modal" data-target="#modalProduto01"><i class="fas fa-pencil-alt text-dark"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#modal"><i class="fas fa-trash-alt text-dark"></i>
                                    </td>
                                    <!-- Modal Produto 02 -->
                                    <div class="modal fade mt-5" id="modalProduto01" tabindex="-1" role="dialog" aria-labelledby="modalProduto01Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalProduto01Label">Item 02</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="formProduto01Edit">
                                                        <div class="form-row">
                                                            <div class="form-group col">
                                                                <label for="quantidadeProduto01">Quantidade</label>
                                                                <input type="number" class="form-control" id="quantidadeProduto01" step="1" min="1" value="1" form="carrinhoForm" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix mb-0">
                                                            <button data-dismiss="modal" class="mx-auto my-auto btn btn-info btn-md col-md-3 mb-0">Atualizar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Modal Produto 02 -->
                                    <!-- Modal - Excluir Produto 02 -->
                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Excluir produto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Deseja realmente excluir da cesta de compras?</p>
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
                                    <!-- /Modal - Excluir Produto 02 -->
                                </tr>
                            </tbody>
                        </table>
                            <div class="form-group d-inline-block">
                                <label for="cupomDesconto">Cupom de Desconto</label>
                                <div>
                                    <input type="text" class="form-control col-lg-12 text-uppercase" name="cupomDesconto" id="cupomDesconto" placeholder="INSIRA SEU CUPOM">
                                </div>
                            </div>
                                <button type="submit" class="btn btn-info float-right col-lg-3 mt-3 mb-5" form="carrinhoForm">Finalizar Compra</button>
                    </form>
                </div>
            </section>
        </main>

@endsection