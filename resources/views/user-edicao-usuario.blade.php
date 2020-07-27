@extends('layouts.user')

@section('content')

<div class="container-fluid py-5 mt-5">
    <div class="form-cadastro">
        <div class="col-lg-6 mx-auto">
            <div class="card card-body">
                <h3 class="text-center mb-4">Editar meu perfil</h3>
                <fieldset>
                    <form action="/user-edicao-usuario/{{ $user->id }}" method="POST">     
                        @csrf
                        {{ method_field('PUT')}}
                    <div class="form-group has-error">
                        <input type="text" class="form-control" aria-describedby="nomeCadastroHelp" id="inputNome" name="inputNome" value="{{$user->nome}}" required>
                    </div>
                    <div class="form-group has-error">
                        <input type="text" class="form-control text-capitalize" placeholder="Alterar Endereço Atual" aria-describedby="enderecoHelp" id="inputEndereco" name="inputEndereco" value="{{$user->endereco}}" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" placeholder="CEP" name="inputCep" value="{{$user->cep}}" required>
                        </div>
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control text-capitalize" placeholder="Cidade"  name="inputCidade" value="{{$user->cidade}}" required>
                        </div>
                        <div class="form-group col-md-2">
                            <select class="form-control" name="inputUF" id="inputUF" required>
                                <option disabled="" selected="">UF</option>
                                <option value="AC"{{$user->uf=='AC' ? 'selected':''}}>AC</option>
                                <option value="AL"{{$user->uf=='AL' ? 'selected':''}}>AL</option>
                                <option value="AM"{{$user->uf=='AM' ? 'selected':''}}>AM</option>
                                <option value="AP"{{$user->uf=='AP' ? 'selected':''}}>AP</option>
                                <option value="BA"{{$user->uf=='BA' ? 'selected':''}}>BA</option>
                                <option value="CE"{{$user->uf=='CE' ? 'selected':''}}>CE</option>
                                <option value="DF"{{$user->uf=='DF' ? 'selected':''}}>DF</option>
                                <option value="ES"{{$user->uf=='ES' ? 'selected':''}}>ES</option>
                                <option value="GO"{{$user->uf=='GO' ? 'selected':''}}>GO</option>
                                <option value="MA"{{$user->uf=='MA' ? 'selected':''}}>MA</option>
                                <option value="MG"{{$user->uf=='MG' ? 'selected':''}}>MG</option>
                                <option value="MS"{{$user->uf=='MS' ? 'selected':''}}>MS</option>
                                <option value="MT"{{$user->uf=='MT' ? 'selected':''}}>MT</option>
                                <option value="PA"{{$user->uf=='PA' ? 'selected':''}}>PA</option>
                                <option value="PB"{{$user->uf=='PB' ? 'selected':''}}>PB</option>
                                <option value="PE"{{$user->uf=='PE' ? 'selected':''}}>PE</option>
                                <option value="PI"{{$user->uf=='PI' ? 'selected':''}}>PI</option>
                                <option value="PR"{{$user->uf=='PR' ? 'selected':''}}>PR</option>
                                <option value="RJ"{{$user->uf=='RJ' ? 'selected':''}}>RJ</option>
                                <option value="RN"{{$user->uf=='RN' ? 'selected':''}}>RN</option>
                                <option value="RO"{{$user->uf=='RO' ? 'selected':''}}>RO</option>
                                <option value="RR"{{$user->uf=='RR' ? 'selected':''}}>RR</option>
                                <option value="RS"{{$user->uf=='RS' ? 'selected':''}}>RS</option>
                                <option value="SC"{{$user->uf=='SC' ? 'selected':''}}>SC</option>
                                <option value="SE"{{$user->uf=='SE' ? 'selected':''}}>SE</option>
                                <option value="SP"{{$user->uf=='SP' ? 'selected':''}}>SP</option>
                                <option value="TO"{{$user->uf=='TO' ? 'selected':''}}>TO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <input type="text" class="form-control input-lg" placeholder="Email"  aria-describedby="emailHelp" id="inputEmail" name="inputEmail" value="{{$user->email}}" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="password" name="inputSenha" class="form-control{{$errors->has('inputSenha') ? ' is-invalid':''}}" placeholder="Senha" aria-describedby="senhaHelp" id="inputSenha"> 
                            <div class="invalid-feedback">{{ $errors->first('inputSenha') }}</div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control{{$errors->has('inputConfirma') ? ' is-invalid':''}}" placeholder="Confirma senha" aria-describedby="ConfirmaHelp" id="inputConfirma" name="inputConfirma">
                            <div class="invalid-feedback">{{ $errors->first('inputConfirma') }}</div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <input type="submit" class="btn btn-primary text-center" value="Confirmar">
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>

@if(!empty(Request::get('success')))
    <div class="alert alert-success text-center col-md-12">

        {{ Request::get('success') }}
    </div>
@endif

@endsection