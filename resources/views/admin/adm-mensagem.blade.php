@extends('layouts.adm')

@section('content')

@section('title')
    Bake & Go | Adm. Mensagem
@endsection

<section class="container email-mensagem py-5 mt-5 px-md-0 adm-pag">
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
                @foreach ($messages as $message)
                <tr>
                    <td scope="row">{{ $message->id }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $message->nome }}</td>
                    <td scope="row" class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalResp{{ $message->id }}">{{ $message->email }}</a>

                    </td>
                    <td scope="row" class="d-none d-md-table-cell">
                        <p>{{ $message->mensagem }}</p>
                    </td>
                    <td scope="row" class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalDel{{ $message->id }}">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCont{{ $message->id }}">
                            <i class="fas fa-eye mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalDel{{ $message->id }}">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>
                <!-- Modal - Conteúdo mensagem -->
                <div class="modal fade" id="modalCont{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">ID - {{ $message->id }}</h5>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-header text-center">
                                    Nome Completo
                                    </div>
                                    <div class="card-body">
                                    <p class="card-text">{{ $message->nome }}</p>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header text-center">
                                        Email
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $message->email }}</p>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-header text-center">
                                        Mensagem
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $message->mensagem }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary mb-0" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal - Resposta rápida -->

                <div class="modal fade text-left" id="modalResp{{ $message->id }}" role="dialog" tabindex="-1"  aria-labelledby="modalMessageLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">

                        <div id="carouselModal{{$message->id}}" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">

                            <div class="carousel-inner">

                                <div class="carousel-item active" id="carrosselMessageItem">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalMessageLabel">Mensagem de {{ $message->nome }}</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>Nome</h5>
                                                    <p>{{ $message->nome }}</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <h5>E-mail</h5>
                                                    <p>{{ $message->email }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5>Mensagem</h5>
                                                    <p>{{ $message->mensagem }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center py-4">
                                            <a href="#carouselModal{{$message->id}}" role="button" class="btn btn-primary" data-slide="next">Responder</a>

                                        </div>
                    
                                    </div>
                                </div>

                                <div class="carousel-item" id="carroselSendItem">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalSentLabel">Enviar mensagem para {{ $message->nome }}</h5>
                                        </div>
                                        <form method='post' action='/sendemail/send'>
                                            <div class="modal-body">
                                                @csrf
                                                <input type="hidden" name="id" id="" value="{{$message->id}}">
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Destinatário:</label>
                                                    <input type="text" readonly class="form-control" id="inputNome" name="inputNome" value="{{ $message->nome }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                                    <input type="email" readonly class="form-control" id="inputEmail" name="inputEmail" value="{{ $message->email }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Mensagem:</label>
                                                    <textarea class="form-control" id="message-text" rows="7" name="inputConteudo"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center py-3 mt-0">
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </form>
                    
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>


                <!-- Modal - Excluir mensagem -->
                <div class="modal fade" id="modalDel{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                <form action="/admin/removeMessage/{{ $message->id }}" method="POST">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger mb-0">Excluir</button>
                                </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $messages->links() }}
        </div>
    </div>

        @if(!empty(Request::get('success')))
        <div class="alert alert-success text-center col-md-12 mt-5">
            {{ Request::get('success') }}
        </div>
        @endif
    </section>

@endsection