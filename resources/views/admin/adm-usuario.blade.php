@extends('layouts.adm')

@section('content')

<section class="container py-5 mt-5 px-md-0 adm-pag">
    <h2 class="mb-0">Usuários</h2>
    @if($users->isEmpty())
        <section class="row mx-2">
            <div class="col-12">
                <h3 class="text-center">Parece que ainda não temos nenhum usuário!</h3>
            </div>
        </section>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" class="d-none d-md-table-cell">Nome</th>
                    <th scope="col" class="d-none d-md-table-cell">CPF</th>
                    <th scope="col" class="d-none d-md-table-cell">Endereço</th>
                    <th scope="col" class="d-none d-md-table-cell">CEP</th>
                    <th scope="col" class="d-none d-md-table-cell">Cidade</th>
                    <th scope="col" class="d-none d-md-table-cell">UF</th>
                    <th scope="col" class="d-none d-md-table-cell">Email</th>
                    <th scope="col" class="d-none d-md-table-cell">Editar</th>
                    <th scope="col" class="d-none d-md-table-cell">Excluir</th>
                    <th scope="col" class="d-md-none d-table-cell">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{ $user->id }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->nome }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->cpf }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->endereco }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->cep }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->cidade }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->uf }}</td>
                    <td scope="row" class="d-none d-md-table-cell">{{ $user->email }}</td>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalEdit{{ $user->id }}">
                            <i class="fas fa-pencil-alt text-dark"></i>
                        </a>
                    <td class="d-none d-md-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalDel{{ $user->id }}">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                    <td scope="col" class="d-md-none d-table-cell">
                        <a href="#" data-toggle="modal" data-target="#modalCont">
                            <i class="fas fa-eye mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalEdit{{ $user->id }}">
                            <i class="fas fa-pencil-alt mr-2 text-dark"></i>
                        </a>
                        <a href="#" data-toggle="modal" data-target="#modalDel{{ $user->id }}">
                            <i class="fas fa-trash-alt text-dark"></i>
                        </a>
                    </td>
                </tr>
        <!-- Modal - Conteúdo usuário -->
        <div class="modal fade" id="modalCont" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confira abaixo os dados</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-header text-center">
                              Nome Completo
                            </div>
                            <div class="card-body">
                              <p class="card-text">{{ $user->nome }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                              CPF
                            </div>
                            <div class="card-body">
                              <p class="card-text">{{ $user->cpf }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                              RG
                            </div>
                            <div class="card-body">
                              <p class="card-text">{{ $user->rg }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Endereço
                            </div>
                            <div class="card-body ">
                                <p class="card-text">{{ $user->endereco }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                CEP
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $user->cep }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                UF
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $user->uf }}</p>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header text-center">
                                Email
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $user->email }}</p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary mb-0" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal - Editar usuário -->
        <div class="modal fade text-left" id="modalEdit{{ $user->id }}" role="dialog" tabindex="-1"  aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel">Editar usuário #ID{{ $user->id }}</h5>
                    </div>
                    <form action="admin/adm-usuario/{{$user->id}}" method="POST">
                    @csrf
                    {{ method_field('PUT')}} 
                    <form class="container">
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputNome">Nome Completo</label>
                                    <input type="text" class="form-control" id="inputNome" name="inputNome" value="{{$user->nome}}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCPF">CPF</label>
                                    <input type="number" class="form-control{{$errors->has('inputCPF') ? ' is-invalid':''}}" placeholder="Insira seu CPF" aria-describedby="CPFCadastroHelp" id="inputCPF" name="inputCPF" value="{{ old('inputCPF') }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputRG">RG</label>                                        
                                    <input type="number" class="form-control{{$errors->has('inputRG') ? ' is-invalid':''}}" placeholder="Insira seu RG" aria-describedby="RGCadastroHelp" id="inputRG" name="inputRG" value="{{ old('inputRG') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEndereco">Endereço</label>
                                <input type="text" class="form-control" placeholder="Insira seu endereço"  id="inputEndereco" name="inputEndereco" value="{{$user->endereco}}" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputCep">CEP</label>
                                    <input type="text" class="form-control" placeholder="01234-567" name="inputCep" value="{{$user->cep}}" required>
                                </div>
                                <div class="form-group col-md-7">
                                    <label for="inputCidade">Cidade</label>
                                    <input type="text" class="form-control" placeholder="São Paulo" name="inputCidade" value="{{$user->cidade}}" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputUF">UF</label>
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
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" placeholder="Insira seu email"  id="inputEmail" name="inputEmail" value="{{$user->email}}" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputSenha">Senha</label>
                                    <input type="password" name="inputSenha" class="form-control{{$errors->has('inputSenha') ? ' is-invalid':''}}" placeholder="Senha" aria-describedby="senhaHelp" id="inputSenha">
                                    <div class="invalid-feedback">{{ $errors->first('inputSenha') }}</div> 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputConfirma">Confirma Senha</label>
                                    <input type="password" class="form-control{{$errors->has('inputConfirma') ? ' is-invalid':''}}" placeholder="Confirma senha" aria-describedby="ConfirmaHelp" id="inputConfirma" name="inputConfirma">
                                    <div class="invalid-feedback">{{ $errors->first('inputConfirma') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center mb-3">
                            <button type="submit" class="btn btn-primary">Editar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal - Excluir usuário -->
        <div class="modal fade" id="modalDel{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir usuário</h5>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir este usuário?</p>
                    </div>
                    <div class="modal-body text-left">
                        <p>ID: {{ $user->id }}</p>
                        <p>Nome: {{ $user->nome }}</p>
                        <p>Email: {{ $user->email }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Cancelar</button>
                        <form action="/admin/remove/{{$user->id}}" method="POST">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button id="delete-contact" type="submit" class="btn btn-danger mb-0">Excluir</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </tbody>
</table>
@if(!empty(Request::get('success')))
<div class="alert alert-success text-center col-md-12">
{{ Request::get('success') }}
</div>
@endif
</section>

@endsection