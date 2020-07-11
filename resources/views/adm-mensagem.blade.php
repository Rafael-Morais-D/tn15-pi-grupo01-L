@extends('layouts.adm')

@section('content')

<section class="container email-mensagem py-5 mt-5 adm-pag">
    <h2 class="mb-0">Mensagens</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" class="d-none d-md-table-cell">Nome</th>
                    <th scope="col" class="d-none d-md-table-cell">Email</th>
                    <th scope="col-2" class="d-none d-md-table-cell">Mensagem</th>
                    <th scope="col" class="d-none d-md-table-cell">Excluir</th>
                    <th scope="col" class="d-md-none d-table-cell">Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">001</td>
                    <td scope="row" class="d-none d-md-table-cell">Exemplilson da Silva 1</td>
                    <td scope="row" class="d-none d-md-table-cell">
                    <a href="mailto:exemplison1@email.com.br?subject=Dúvida%20sobre%20os%20pães" title="Resposta rápida">exemplison1@email.com.br</a>
                    </td>
                    <td scope="row" class="d-none d-md-table-cell">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris neque, vehicula et finibus a, euismod volutpat est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi et eros ante. Suspendisse consequat luctus libero et sollicitudin. Aenean tempor accumsan mollis. Duis lacinia, magna non fermentum aliquam, velit felis gravida urna, eget semper elit odio at sem. Vestibulum ac convallis orci, ultricies suscipit orci. Nam lobortis in ligula ac pellentesque. Cras aliquam tempor diam, a feugiat sapien porttitor sed. Curabitur ut tortor accumsan, aliquam arcu nec, finibus tellus. Vivamus blandit ornare odio molestie pulvinar. Sed non purus nulla. Phasellus in odio molestie, molestie ipsum a, feugiat massa.</P>
                    </td>
                    <td scope="row" class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <i class="fas fa-eye mr-2"></i>
                        <i class="fas fa-pencil mr-2"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
                <tr>
                    <td scope="row">002</td>
                    <td scope="row" class="d-none d-md-table-cell">Exemplilson da Silva 2</td>
                    <td scope="row" class="d-none d-md-table-cell">
                        <a href="mailto:exemplison2@email.com.br?subject=Dúvida%20sobre%20os%20pães" title="Resposta rápida">exemplison2@email.com.br</a></td>
                    <td scope="row" class="d-none d-md-table-cell">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris neque, vehicula et finibus a, euismod volutpat est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi et eros ante.</P>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <i class="fas fa-eye mr-2"></i>
                        <i class="fas fa-pencil mr-2"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
                <tr>
                    <td scope="row">003</td>
                    <td scope="row" class="d-none d-md-table-cell">Exemplilson da Silva 3</td>
                    <td scope="row" class="d-none d-md-table-cell">
                        <a href="mailto:exemplison3@email.com.br?subject=Dúvida%20sobre%20os%20pães" title="Resposta rápida">exemplison3@email.com.br</a>
                    </td>
                    <td scope="row" class="d-none d-md-table-cell">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mauris neque, vehicula et finibus a, euismod volutpat est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi et eros ante. Suspendisse consequat luctus libero et sollicitudin. Aenean tempor accumsan mollis. Duis lacinia, magna non fermentum aliquam, velit felis gravida urna, eget semper elit odio at sem.</P>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modal">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <i class="fas fa-eye mr-2"></i>
                        <i class="fas fa-pencil mr-2"></i>
                        <i class="fas fa-trash-alt"></i>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Modal - Excluir mensagem -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir mensagem</h5>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir esta mensagem?</p>
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
</section>

@endsection