@extends('layouts.user')

@section('content')

<section class="container py-5 mt-5 adm-pag">
    <h2 class="mb-0">Meus Pedidos</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">Pedido</th>
                    <th scope="col">Data</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Valor Total</th>
                    <th scope="col">Pagamento</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="align-middle">001</td>
                    <td scope="row" class="align-middle">05/06/2020</td>
                    <td scope="row" class="align-middle">Pão Italiano</td>
                    <td scope="row" class="align-middle">R$45</td>
                    <td scope="row" class="align-middle">Aguardando pagamento</td>
                    <td scope="row" class="align-middle">Aguardando confirmação</td>
                </tr>
                <tr>
                    <td scope="row" class="align-middle">002</td>
                    <td scope="row" class="align-middle">06/06/2020</td>
                    <td scope="row" class="align-middle">Bolo de Chocolate</td>
                    <td scope="row" class="align-middle">R$35</td>
                    <td scope="row" class="align-middle">Pago</td>
                    <td scope="row" class="align-middle">Preparando a massa</td>
                </tr>
                <tr>
                    <td scope="row" class="align-middle">003</td>
                    <td scope="row" class="align-middle">07/06/2020</td>
                    <td scope="row" class="align-middle">Pão de Queijo</td>
                    <td scope="row" class="align-middle">R$25</td>
                    <td scope="row" class="align-middle">Pago</td>
                    <td scope="row" class="align-middle">No forno</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@endsection