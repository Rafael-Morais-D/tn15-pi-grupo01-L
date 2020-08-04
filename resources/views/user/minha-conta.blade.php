@extends('layouts.user')

@section('content')

@section('title')
    Bake & Go | Minha Conta
@endsection

<section class="container minha-conta py-5 mt-5 adm-pag">
    <div class="d-flex flex-wrap justify-content-between align-items-center link-continuar">
        <h2 class="col-12 col-md-6 mb-0 px-0">Minha Conta</h2>
        <a href="/" class="col-12 col-md-6 mt-3 mt-md-0 px-0 text-md-right">Continuar comprando</a>
    </div>
    <hr class="accent my-4">
    @foreach ($users as $user)
    <h3 class="mb-4 text-center">Olá, {{ Auth::user()->nome }}.</h3>
    <div class="form-cadastro">
        <div class="col-lg-7 mx-auto">
            <div class="card card-body">
                <fieldset>
                    <div class="form-group has-error">
                        <input class="form-control input-lg" value="{{ Auth::user()->nome }}" readonly name="nome" type="text">
                    </div>
                    <div class="form-group has-error">
                        <input type="text" class="form-control" value="{{ Auth::user()->endereco }}" readonly aria-describedby="enderecoHelp" id="inputEndereco" name="inputEndereco" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" placeholder="{{ Auth::user()->cep }}" readonly name="inputCep" required>
                        </div>
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control" placeholder="{{ Auth::user()->cidade }}" readonly name="inputCidade" required>
                        </div>
                        <div class="form-group col-md-2">
                            <select class="form-control" name="inputUF" id="{{ Auth::user()->uf }}" readonly required>
                                <option value="SP" readonly>SP</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <input class="form-control input-lg" value="{{ Auth::user()->email }}" readonly name="email" type="text">
                    </div>
                    <div class="col-12 text-center mt-4">
                        <a href="#" data-toggle="modal" data-target="#modalEdit{{ Auth::user()->id }}">
                            <button class="btn btn-primary btn-minha-conta text-center">Editar meu perfil</button></a>
                    </div>

                    <!-- Modal - Editar usuário -->
                    <div class="modal fade text-left" id="modalEdit{{ Auth::user()->id }}" role="dialog" tabindex="-1"  aria-labelledby="modalEditLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalEditLabel">Editar usuário - ID {{ Auth::user()->id }}</h5>
                                </div>
                                <form action="/user/minha-conta/{{$user->id}}" method="POST" class="container">
                                    {{ method_field('PUT') }}
                                    @csrf
                                    <form class="container">
                                        <div class="modal-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputNome">Nome Completo</label>
                                                    <input type="text" name="inputNome" value="{{$user->nome}}" class="form-control" id="inputNome" placeholder="{{$user->nome}}" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCPF">CPF</label>
                                                    <input type="number" name="inputCPF" value="{{$user->cpf}}" class="form-control" id="inputCPF" placeholder="{{$user->cpf}}" readonly aria-describedby="CPFCadastroHelp">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputRG">RG</label>                                        
                                                    <input type="number" name="inputRG" value="{{$user->rg}}" class="form-control" id="inputRG" placeholder="{{$user->rg}}" readonly aria-describedby="RGCadastroHelp">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEndereco">Endereço</label>
                                                <input type="text" name="inputEndereco" value="{{$user->endereco}}" class="form-control" id="inputEndereco" placeholder="{{$user->endereco}}" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-3">
                                                    <label for="inputCep">CEP</label>
                                                    <input type="text" name="inputCep" value="{{$user->cep}}" class="form-control" id="inputCep" placeholder="{{$user->cep}}" required>
                                                </div>
                                                <div class="form-group col-md-7">
                                                    <label for="inputCidade">Cidade</label>
                                                    <input type="text" name="inputCidade" value="{{$user->cidade}}" class="form-control" id="inputCidade" placeholder="{{$user->cidade}}" required>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputUF">UF</label>
                                                    <select name="inputUF" value="{{$user->uf}}" class="form-control" id="inputUF" placeholder="{{$user->uf}}" required>
                                                        <option disabled="">UF</option>
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
                                                <input type="email" name="inputEmail" value="{{$user->email}}" class="form-control" id="inputEmail" placeholder="{{$user->email}}" required>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputSenha">Nova senha</label>
                                                    <input type="password" name="inputSenha" value="{{ old('inputSenha') }}" class="form-control" id="inputSenha" placeholder="Nova senha" aria-describedby="senhaHelp">
                                                    <div class="invalid-feedback">{{ $errors->first('inputSenha') }}</div> 
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputConfirma">Confirmar nova senha</label>
                                                    <input type="password" name="inputSenha" value="{{ old('inputSenha') }}" class="form-control" id="inputConfirma" placeholder="Confirmar nova senha" aria-describedby="ConfirmaHelp">
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
                    </fieldset>
                </div>
            </div>
        </div>
        @if(!empty(Request::get('success')))
                <div class="alert alert-success text-center col-md-12 mt-5">
                    {{ Request::get('success') }}
                </div>
            @endif
        @endforeach
    </section>

@endsection