@extends('layouts.app')

@section('content')

        <main class="container-fluid py-5 mt-5">
            <header class="topo-pagina" id="topoCarrinho">
                <h2 class="py-4 text-center">Pagamento</h2>
            </header>
            <section class="container">

            <form class="col-12 mb-3" id="pagamentoForm" action="#" method="#">

                <!-- DADOS DO PEDIDO -->
                <div class="card card-body mb-3">
                    <h3 class="col-12 text-center text-info py-3 text-dark">Dados do pedido</h3>
                    <p class="mb-3 text-center">Confira abaixo as informações do seu pedido</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Produto</th>
                                <th scope="col" class="d-none d-md-table-cell">Preço Unitário</th>
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
                                <td class="cart-unit-price d-none d-md-table-cell">R$12,00</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="d-flex align-items-start justify-content-start flex-column flex-lg-row">
                                        <img src="{{ asset('img/05_bakeandgo.jpg') }}" alt="Produto 04" width="65px" height="auto" class="mr-3">
                                        <div class="text-left">
                                            <h5 class="my-1"><span class="cart-qtd">2</span> Bolo de Chocolate com frutas vermelhas</h5>
                                            <small class="text-muted my-1">REF: 002BLCHOCO</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart-unit-price d-none d-md-table-cell">R$25,00</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Subtotal</th>
                                <th scope="col">Cupom de desconto</th>
                                <th scope="col">Frete</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >R$37,00</td>
                                <td >R$0,00</td>
                                <td >R$9,99</td>
                                <td >R$46,99</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ENDEREÇO DE COBRANÇA -->
                <div class="card card-body mb-3">
                    <h3 class="col-12 text-center text-info py-3 text-dark">Endereço de entrega</h3>
                    <p class="mb-3 text-center">Preencha os campos abaixo com os dados do endereço de entrega</p>
                    <fieldset>
                        <div class="form-group has-error">
                            <input class="form-control input-lg text-capitalize" placeholder="Nome Completo" name="nome" type="text">
                        </div>
                        <div class="form-row flex-wrap">
                            <div class="form-group has-error col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="E-mail" aria-describedby="emailHelp" id="inputEmail" name="inputEmail" required>
                            </div>
                            <div class="form-group has-error col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="CPF" aria-describedby="cpfHelp" id="inputCPF" name="inputCPF" required>
                            </div>
                        </div>
                        <div class="form-row flex-wrap">
                            <div class="form-group has-error col-12 col-md-8">
                                <input type="text" class="form-control text-capitalize" placeholder="Endereço" aria-describedby="enderecoHelp" id="inputEndereco" name="inputEndereco" required>
                            </div>
                            <div class="form-group has-error col-12 col-md-1">
                                <input type="text" class="form-control" placeholder="Nº" aria-describedby="numeroHelp" id="inputNumero" name="inputNumero" required>
                            </div>
                            <div class="form-group has-error col-12 col-md-3">
                                <input type="text" class="form-control text-capitalize" placeholder="Complemento" aria-describedby="complementoHelp" id="inputComplemento" name="inputComplemento" required>
                            </div>
                        </div>
                        <div class="form-row flex-wrap">
                            <div class="form-group col-md-3 col-12">
                                <input type="text" class="form-control" placeholder="CEP" name="inputCep" required>
                            </div>
                            <div class="form-group col-md-7 col-12">
                                <input type="text" class="form-control text-capitalize" placeholder="Cidade" name="inputCidade" required>
                            </div>
                            <div class="form-group col-md-2 col-12">
                                <select class="form-control" name="inputUF" id="inputUF" required>
                                <option disabled="" selected="">UF</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <textarea class="form-control" placeholder="Observações (ex.: deixar na portaria)" name="observacaoPedido" id="observacaoPedido" rows="3" aria-describedby="#observacaoPedidoHelp"></textarea>
                        </div>
                    </fieldset>
                </div>

                <!-- DADOS DE PAGAMENTO -->
                <div class="card card-body mb-3">
                    <h3 class="col-12 text-center text-info py-3 text-dark">Dados de pagamento</h3>
                    <p class="mb-3 text-center">Preencha os campos abaixo com os dados de pagamento</p>
                    <fieldset>
                        <div class="form-group has-error">
                            <label for="nomeTitular">Nome do titular do cartão</label>
                            <input type="text" class="form-control text-capitalize" placeholder="Nome Completo" aria-describedby="nomeTitular" id="nomeTitular" name="nomeTitular" required>
                        </div>
                        <div class="form-row flex-wrap">
                            <div class="form-group has-error col-md-6 col-12">
                                <label for="numeroCartao">Número do cartão</label>
                                <input type="text" class="form-control" placeholder="1234 5678 9012 3456" aria-describedby="numeroCartao" id="numeroCartao" name="numeroCartao" required>
                            </div>
                            <div class="form-group has-error col-md-3 col-12">
                                <label for="codSeguranca">Código de segurança</label>
                                <input type="text" class="form-control" placeholder="123" aria-describedby="codSeguranca" id="codSeguranca" name="codSeguranca" required>
                            </div>
                            <div class="form-group has-error col-md-3 col-12">
                                <label for="dataVencimento">Data de vencimento</label>
                                <input type="month" class="form-control" aria-describedby="dataVencimento" id="dataVencimento" name="dataVencimento" required>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <button type="submit" class="btn btn-info float-right col-lg-3 mt-3 mb-5" form="pagamentoForm">Finalizar Compra</button>
            </form>
            </section>
        </main>

@endsection