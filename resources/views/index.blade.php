@extends('layouts.app')

@section('content')

@section('title')
    Bake & Go
@endsection

  <section class="banner">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0" data-aos="fade-up" data-aos-duration="1500">Baked & fresh</h1>
        <h2 class="mx-auto mt-2 mb-5" data-aos="fade-up" data-aos-duration="1500">Do pão de fermentação natural ao pão francês, não importa a hora, nós iremos até você.</h2>
      </div>
    </div>
  </section>
  <!-- Section com produtos-->
  <section class="container-fluid catProdutos" style="max-width: 1360px">
    <div class="col-lg-10 mx-auto col-12 text-center mb-3">
      <h3 class="mt-5 mb-4 text-uppercase"><i class="fal fa-wheat fa-lg mt-4 mr-3"></i>Conheça nossos produtos<i class="fal fa-wheat fa-lg ml-3"></i></h3>
      <hr class="accent my-5">
    </div>

    <div class="row mx-1" data-aos="fade-up" data-aos-duration="1500">
      <div class="row col-md-12 text-center p-0 my-0 mx-0 ml-lg-4 ml-xl-5">
        <div class="col-lg-6 my-auto text-center text-lg-right">
          @for ($i = 0; $i < 3; $i++)
            <div class="card mb-2">
              <div class="row no-gutters m-0">
                <div class="col-md-4">
                  <img src="{{ $produtos[$i]->imagem != null ? asset($produtos[$i]->imagem) : asset('img/def.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                  <div class="card-body text-left">
                    <span class="float-right">R${{ $produtos[$i]->preco }}/<small>{{ $produtos[$i]->unidadeMedida }}</small></span>
                    <h5 class="text-truncate" title="{{ $produtos[$i]->nome }}">{{ $produtos[$i]->nome }}</h5>
                    <p class="text-truncate">{{ $produtos[$i]->descricao }}</p>           
                    <div class="input-group mb-3 mt-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text" id="inputGroup-sizing-default" for="quantidade{{ $produtos[$i]->id }}"><small>Qtd</small></label>
                        </div>
                        <input type="text" name="quantidade{{ $produtos[$i]->id }}" id="quantidade{{ $produtos[$i]->id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"placeholder="Quanto vai querer? Ex.: 200g">
                    </div>
                    <span class="float-right">
                      <a href="/cesta-compras" class="btn btn-primary float-right mb-3 mb-md-0">Add a Cesta</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
        <div class="col-lg-5 col-md-mx-auto">
          <img class="img-fluid" src="{{ asset("img/03_bakeandgo.jpg") }}" alt="Conheça nosso pão artesanal, feito com fermetação natural.">
        </div>
      </div>
    </div>

    <div class="row mx-1" data-aos="fade-up" data-aos-duration="1500">
      <div class="row col-md-12 text-center p-0 my-0 mx-0 ml-lg-4 ml-xl-5">
        <div class="col-lg-6 w-100 my-auto text-center text-lg-left">
          @for ($i = 0; $i < 3; $i++)
            <div class="card mb-2">
              <div class="row no-gutters m-0">
                <div class="col-md-4">
                  <img src="{{ $produtos[$i]->imagem != null ? asset($produtos[$i]->imagem) : asset('img/def.png') }}" class="card-img">
                </div>
                <div class="col-md-8">
                  <div class="card-body text-left">
                    <span class="float-right">R${{ $produtos[$i]->preco }}/<small>{{ $produtos[$i]->unidadeMedida }}</small></span>
                    <h5 class="text-truncate" title="{{ $produtos[$i]->nome }}">{{ $produtos[$i]->nome }}</h5>
                    <p class="text-truncate">{{ $produtos[$i]->descricao }}</p>           
                    <div class="input-group mb-3 mt-4">
                        <div class="input-group-prepend">
                            <label class="input-group-text" id="inputGroup-sizing-default" for="quantidade{{ $produtos[$i]->id }}"><small>Qtd</small></label>
                        </div>
                        <input type="text" name="quantidade{{ $produtos[$i]->id }}" id="quantidade{{ $produtos[$i]->id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"placeholder="Quanto vai querer? Ex.: 200g">
                    </div>
                    <span class="float-right">
                      <a href="/cesta-compras" class="btn btn-primary float-right mb-3 mb-md-0">Add a Cesta</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
        <div class="col-12 col-lg-5 col-md order-lg-first">
          <img class="img-fluid" src="{{ asset("img/05_bakeandgo.jpg") }}" alt="Conheça nosso bolo de chocolate com frutas vermelhas.">
        </div>
      </div>
    </div>
    
    <hr class="accent my-5">
    <div class="col-12 mt-5 mb-5 text-center p-0">
      <i class="fal fa-wheat fa-lg mr-1 mr-md-3"></i><a href="/produtos" class="btn btn-primary col-10 col-md-3 py-2 py-md-3"><h3 class="mb-0">VEJA TODOS OS NOSSOS DELICIOSOS PRODUTOS!</h3></a><i class="fal fa-wheat fa-lg ml-1 ml-md-3"></i>
    </div>
    <hr class="accent my-5">
  </section>

      <!-- Menu -->
      <!-- <section class="menu-produtos">
        <div class="container">
          <div class="row-menu">
            {{-- @foreach ($produtosMenu as $produtoMenu) --}}
            <div class="col-lg-10 mx-auto col-12 text-center mb-3">
              <h3 class="mt-5 mb-4 text-uppercase"><i class="fal fa-wheat fa-lg mt-4 mr-3"></i>Menu<i class="fal fa-wheat fa-lg ml-3"></i></h3>
              <hr class="accent my-5">
              </div>
              <div class="card-columns" data-aos="fade-up" data-aos-duration="1500">
                <div class="card card-body">
                  <div class="d-flex justify-content-between align-items-start">
                    <h3 class="text-truncate sliding-u-l-r-l">Pão Italiano</h3>
                    <h4>R$12</h4>
                  </div>
                  <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod inventore, voluptatibus fugiat eveniet atque optio? Facere sequi rerum error doloremque quas ea qui earum, tempora ex ipsa facilis quod itaque?</p>
                    <div class="options">
                      <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                      <select class="qtd" name="qtd">
                        <option selected value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                      </select>
                      <span class="float-right">
                        <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                      </span>
                    </div>  
                  </div>
                  <div class="card card-body">
                    <div class="d-flex justify-content-between align-items-start">
                      <h3 class="text-truncate sliding-u-l-r-l">Bagel</h3>
                      <h4>R$8</h4>
                    </div>
                    <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium porro a temporibus asperiores vitae alias, cumque eligendi deserunt, unde, quam saepe inventore distinctio mollitia sequi aliquam iusto sit facilis cupiditate!</p>
                    <div class="options">
                      <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                      <select class="qtd" name="qtd">
                        <option selected value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                      </select>
                      <span class="float-right">
                        <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                      </span>
                    </div>
                  </div>
                  <div class="card card-body">
                    <div class="d-flex justify-content-between align-items-start">
                      <h3 class="text-truncate sliding-u-l-r-l">Cheesecake</h3>
                      <h4>R$14</h4>
                    </div>
                    <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem facere nemo laboriosam architecto, magnam sunt veritatis neque autem quod libero illum unde eius expedita impedit sit perferendis. Ipsa, aliquam atque.</p>
                    <div class="options">
                      <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                      <select class="qtd" name="qtd">
                        <option selected value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                      </select>
                      <span class="float-right">
                        <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                      </span>
                      </div>
                    </div>
                    <div class="card card-body">
                      <div class="d-flex justify-content-between align-items-start">
                        <h3 class="text-truncate sliding-u-l-r-l">Croissant</h3>
                        <h4>R$10</h4>
                      </div>
                      <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores delectus, iusto earum nesciunt similique nulla ullam hic explicabo! Explicabo ullam rem suscipit corporis, molestias non totam. Dolorum laboriosam debitis odit.</p>
                      <div class="options">
                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                        <select class="qtd" name="qtd">
                          <option selected value=1>1</option>
                          <option value=2>2</option>
                          <option value=3>3</option>
                          <option value=4>4</option>
                          <option value=5>5</option>
                          <option value=6>6</option>
                          <option value=7>7</option>
                          <option value=8>8</option>
                          <option value=9>9</option>
                          <option value=10>10</option>
                        </select>
                        <span class="float-right">
                          <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                        </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-5 mb-3 text-center">
                    <a href="/produtos" class="btn btn-primary mb-5">VER MENU</a>
                  </div>
                  </div>
                  {{-- @endforeach --}}
                  </section> -->

                  <!-- Section - Contador -->
                  <section class="counter-section img" id="section-counter">
                  <div class="container">
                    <div class="row justify-content-center py-5 mx-0 mx-md-5">
                      <div class="col-md-12">
                        <div class="row" data-aos="fade-up" data-aos-duration="1500">
                          <div class="col-md-4 d-flex justify-content-center counter-wrap animate">
                            <div class="block-18 text-center">
                              <div class="text">
                                <strong class="number" data-number="1202">1202</strong>
                                <span class="mt-2">Pães assados este mês</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center counter-wrap animate">
                              <div class="block-18 text-center">
                                <div class="text">
                                  <strong class="number" data-number="476">476</strong>
                                  <span class="mt-2">Entregas realizadas</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center counter-wrap animate">
                              <div class="block-18 text-center">
                                <div class="text">
                                  <strong class="number" data-number="625">625</strong>
                                  <span class="mt-2">Clientes satisfeitos</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!-- Section - Atendimento -->
                  <section class="catAtendimento">
                    <div class="row py-4 mx-0 mx-md-5" data-aos="fade-up" data-aos-duration="1500">
                      <div class="col-lg-6 w-100 my-auto mb-4 text-lg-left">
                        <h3>Das nossas mão para sua mesa!</h3>          
                        <h4>Peça também pelo <a href="#">WhatsApp<i class="ic-wa fab fa-whatsapp fa-lg text-dark ml-2"></a></i></h4>
                        <h4 class="mt-5 mb-2">Atendimento e delivery</h4>
                        <p class="mb-0">Segunda — Sexta, das 9h às 17h</p>
                        <p class="mb-5">Sábado — Domingo, das 10h às 16h</p>    
                        </div>                 
                        <div class="col-lg-6 order-lg-first">
                          <img class="img-fluid" src="{{ asset("img/07_bakeandgo.jpg") }}" alt="Faça seu pedido também pelo WhatsApp.">
                        </div>
                      </div>
                    </section>
                    
@endsection