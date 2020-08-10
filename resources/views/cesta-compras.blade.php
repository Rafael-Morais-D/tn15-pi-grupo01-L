@extends('layouts.app')

@section('content')

@section('title')
    Bake & Go | Cesta de Compras
@endsection

<section class="container-fluid py-5 mt-5">
    <div class="topo-pagina" id="topoCarrinho">
        <h2 class="col-12 text-center py-4">Cesta de Compras</h2>
    </div>
    @if(session('mensagem-sucesso'))
    <section class="row">
        <div class="col-12">
            <div class="message alert alert-success text-center">
                {{ session('mensagem-sucesso') }}
            </div>
        </div>
    </section>
    @endif
    @if(session('mensagem-falha'))
    <section class="row">
        <div class="col-12">
            <div class="message alert alert-danger text-center">
                {{ session('mensagem-falha') }}
            </div>
        </div>
    </section>
    @endif
    <section class="container">
        <div class="row-cesta mr-2 ml-2">
            <form class="col-12 mb-3 link-continuar" id="carrinhoForm" action="/pagamento" method="#">
                <p class="mb-5 text-center">Confira abaixo os produtos selecionados, clique em Finalizar Compra ou <a href="/">continue comprando</a></p>
                @forelse ($pedidos as $pedido)
                    <div class="col-12 text-center">
                        <div id="table" class="tableCarrinho">
                            <table class="table text-center mt-3 tableCarrinho">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col" colspan="2" class="text-left"><h4 class="mb-0">Itens selecionados</h4></th>
                                        <th scope="col">Qtd</th>
                                        <th scope="col">Preço Unitário</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_pedido = 0;
                                    @endphp
                                    @foreach ($pedido->pedido_produtos as $pedido_produto)
                                        
                                    <tr>
                                        <td colspan="2">
                                            <div class="d-flex align-items-start justify-content-start flex-column flex-lg-row">
                                                <img src="{{$pedido_produto->produto->imagem}}" width="65" height="auto" alt="" class="mr-3">
                                                <div class="text-left">
                                                    <h5 class="my-1"> {{$pedido_produto->produto->nome}}</h5>
                                                    <small class="text-muted my-0">REF {{$pedido_produto->produto->id}}</small><br>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="align-middle setas-add-cart">
                                                <a href="#" class="" onclick="cestaRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 1)">
                                                    <i class="far fa-minus-circle"></i>
                                                </a>
                                                <span>{{$pedido_produto->qtd}}</span>
                                                <a href="#" class="" onclick="cestaAdicionarProduto({{ $pedido_produto->produto_id }})">
                                                    <i class="far fa-plus-circle"></i>
                                                </a>
                                            </div>
                                            <small><a href="#" onclick="cestaRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 0)" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Remover produto da cesta de compras">Remover produto</a></small>
                                        </td>
                                        <td class="align-middle">R${{number_format($pedido_produto->produto->preco, 2, ',','.')}}</td>
                                        @php
                                            $total_produto = $pedido_produto->valor - $pedido_produto->descontos;
                                            $total_pedido += $total_produto;
                                        @endphp
                                        <td class='align-middle  font-weight-bold'>R${{number_format($total_produto, 2, ',','.')}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3"></td>
                                        <td class="align-middle font-weight-bold">Total</td>
                                        <td class="align-middle font-weight-bold">R${{number_format($total_pedido, 2, ',','.')}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-inline">
                            <div class="form-group col-md-6">
                                <label for="cupomDesconto" class="col-auto pl-0 mt-3 mb-5">Cupom de Desconto</label>
                                <div class="mt-3 mb-5">
                                    <input type="text" class="form-control" name="cupomDesconto" id="cupomDesconto" placeholder="INSIRA SEU CUPOM">
                                </div>
                            </div>
                                <form action="{{route('pagina.finalizar')}}" method='get'>
                                    <button type='submit' class="btn btn-info float-right col-lg-6 mt-3 mb-5">Finalizar Compra</button>
                                </form>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 p-0 text-center">
                        <div class="my-4 p-5 p-auto">
                            <h4>Não há itens na sua cesta de compras ainda!</h4>
                            <a class="text-secondary" href="/">Volte para a página inicial.</a>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <form id="form-remover-produto" method="POST" action="{{ route('cesta-compras.remover')}}">
                @csrf
                {{ method_field('DELETE') }}
                <input type="hidden" name="pedido_id">
                <input type="hidden" name="produto_id">
                <input type="hidden" name="item">
            </form>
            <form id="form-adicionar-produto" method="POST" action="{{ route('cesta-compras.adicionar')}}">
            @csrf 
            <input type="hidden" name="id">
        </form>
    </section>

@push('scripts')
    <script  src='./js/cesta-compras.js'></script>
@endpush

@endsection