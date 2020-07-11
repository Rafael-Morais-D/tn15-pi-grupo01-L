@extends('layouts.adm')

@section('content')

<section class="container py-5 mt-5 adm-pag">
    <h2 class="mb-0">Histórico de Pedidos</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">Pedido</th>
                    <th scope="col" class="d-none d-md-table-cell">Data</th>
                    <th scope="col" class="d-none d-md-table-cell">Cliente</th>
                    <th scope="col" class="d-none d-md-table-cell">Produto</th>
                    <th scope="col" class="d-none d-md-table-cell">Valor Total</th>
                    <th scope="col" class="d-none d-md-table-cell">Pagamento</th>
                    <th scope="col" class="d-none d-md-table-cell">Status</th>
                    <th scope="col" class="d-md-none d-table-cell">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="align-middle">001</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">05/06/2020</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">Exemplilson da Silva 1</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">Pão Italiano</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">R$45</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">
                        <select class="custom-select">
                            <option value="1">Aguardando pagamento</option>
                            <option value="2">Pago</option>
                        </select>
                    </td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">
                    <select class="custom-select">
                        <option value="1">Aguardando confirmação</option>
                        <option value="1">Preparando a massa</option>
                        <option value="2">No forno</option>
                        <option value="3">Pronto para entrega</option>
                        </select>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <i class="fas fa-eye mr-2"></i>
                        <i class="fas fa-pencil mr-2"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="align-middle">002</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">06/06/2020</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">Exemplilson da Silva 2</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">Bolo de Chocolate</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">R$35</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">
                        <select class="custom-select">
                            <option value="1">Aguardando pagamento</option>
                            <option value="2">Pago</option>
                        </select>
                    </td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">
                    <select class="custom-select">
                        <option value="1">Aguardando confirmação</option>
                        <option value="1">Preparando a massa</option>
                        <option value="2">No forno</option>
                        <option value="3">Pronto para entrega</option>
                        </select>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <i class="fas fa-eye mr-2"></i>
                        <i class="fas fa-pencil mr-2"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="align-middle">003</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">07/06/2020</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">Exemplilson da Silva 3</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">Pão de Queijo</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">R$25</td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">
                        <select class="custom-select">
                            <option value="1">Aguardando pagamento</option>
                            <option value="2">Pago</option>
                        </select>
                    </td>
                    <td scope="row" class="align-middle d-none d-md-table-cell">
                        <select class="custom-select">
                            <option value="1">Aguardando confirmação</option>
                            <option value="2">Preparando a massa</option>
                            <option value="3">No forno</option>
                            <option value="4">Pronto para entrega</option>
                        </select>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <i class="fas fa-eye mr-2"></i>
                        <i class="fas fa-pencil mr-2"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
            </tbody>
    </table>
</section>
                
@endsection