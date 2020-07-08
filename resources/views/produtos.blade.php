@extends('layouts.app')

@section('content')

    <div id="carouselpao" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselpao" data-slide-to="0" class="active"></li>
            <li data-target="#carouselpao" data-slide-to="1"></li>
            <li data-target="#carouselpao" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/produtos/slide2.png') }}" alt="Pão rústico" class='tales'>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/produtos/slide1.png') }}" alt="Mesa de Pães" class='tales'>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/produtos/pao/pao2.jpg') }}" alt="Massa de Pão" class='tales'>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselpao" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselpao" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <section>
        <div class="row">
            <div class="col-lg-4 mx-auto text-center">
                <h2>Menu</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt.</p>
                <hr>
                <p> Pagamento Online </p>
                <span class="badge badge-secondary">Cartão de Débito</span>
                <span class="badge badge-secondary">Cartão de Crédito </span>
                <hr>
                <p> Pagamento na Entrega </p>
                <hr>
                <span class="badge badge-secondary">Sem Lactose </span>
                <i style='font-size:24px' class='fas'>&#xf7ef;</i>
                <br>
                <span class="badge badge-secondary">Vegetariano </span>
                <i style='font-size:24px' class='fas'>&#xf06c;</i>
            </div>
        </div>
    </section>
    <section class="paes">
        <div class="col-lg-10 mx-auto col-12 text-left mb-3">
            <h2 class="mb-4">Pães e Doces</h2>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/produtos/pao/pao.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span class="float-right">R$8</span>
                        <h5 class="text-truncate">Pão Rústico</h5>
                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                        <select class="qtd mb-3" name="qtd">
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
                        <span class="float-right" style='padding: 10px'>
                            <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/produtos/pao/baguete.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span class="float-right">R$5</span>
                        <h5 class="card-title">Baguete</h5>
                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                        <select class="qtd mb-3" name="qtd">
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
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/produtos/pao/croissant2.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <span class="float-right">R$6</span>
                        <h5 class="card-title">Croissant</h5>
                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                        <select class="qtd mb-3" name="qtd">
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
        </section>
        <section class="paes">
            <div class="col-lg-10 mx-auto col-12 text-left mb-3">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/produtos/pao/cheesecake.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <span class="float-right">R$12</span>
                            <h5 class="text-truncate">Cheesecake</h5>              
                            <!--<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>-->
                            <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                            <select class="qtd mb-3" name="qtd">
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
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/produtos/pao/brownie.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <span class="float-right">R$8</span>
                            <h5 class="card-title">Brownie</h5>
                            <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                            <select class="qtd mb-3" name="qtd">
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
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('img/produtos/pao/bagel.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <span class="float-right">R$5</span>
                            <h5 class="card-title">Bagel</h5>
                            <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                            <select class="qtd mb-3" name="qtd">
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
            </section>
            <section class="paes">
                <div class="col-lg-10 mx-auto col-12 text-left mb-3">
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/produtos/pao/paoitaliano.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="float-right">R$12</span>
                                <h5 class="text-truncate">Pão Italiano</h5>              
                                <!--<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>-->
                                <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                <select class="qtd mb-3" name="qtd">
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
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/produtos/pao/bolo.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <span class="float-right">R$25</span>
                                <h5 class="card-title">Bolo de Chocolate com Frutas Vermelhas</h5>
                                <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                <select class="qtd mb-3" name="qtd">
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
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/produtos/pao/paodequeijo.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <span class="float-right">R$5</span>
                                <h5 class="card-title">Pão de Queijo</h5>
                                <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                <select class="qtd mb-3" name="qtd">
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
                </section>
                <br>
                <section class="frios">
                    <div class="col-lg-10 mx-auto col-12 text-left mb-3">
                        <hr>
                        <h2 class="mb-4">Frios</h2>
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/produtos/frios/presunto.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <span class="float-right">R$50/kg</span>
                                    <h5 class="text-truncate">Presunto</h5>              
                                    <!--<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>-->
                                    <p class="form-inline-block float-left mr-2" name="peso"><small>Peso</p></small>
                                    <select class="peso mb-3" name="peso">
                                        <option selected value=1>100g</option>
                                        <option value=2>200g</option>
                                        <option value=3>300g</option>
                                        <option value=4>400g</option>
                                        <option value=5>500g</option>
                                        <option value=6>600g</option>
                                        <option value=7>700g</option>
                                        <option value=8>800g</option>
                                        <option value=9>900g</option>
                                        <option value=10>1kg</option>
                                    </select>
                                    <span class="float-right">
                                        <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                                    </span>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/produtos/frios/queijo3.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <span class="float-right">R$30/kg</span>
                                    <h5 class="card-title">Queijo Prato</h5>
                                    <p class="form-inline-block float-left mr-2" name="peso"><small>Peso</p></small>
                                    <select class="peso mb-3" name="peso">
                                        <option selected value=1>100g</option>
                                        <option value=2>200g</option>
                                        <option value=3>300g</option>
                                        <option value=4>400g</option>
                                        <option value=5>500g</option>
                                        <option value=6>600g</option>
                                        <option value=7>700g</option>
                                        <option value=8>800g</option>
                                        <option value=9>900g</option>
                                        <option value=10>1kg</option>
                                    </select>
                                    <span class="float-right">
                                        <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                                    </span>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/produtos/frios/ricota.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                <span class="float-right">R$45/kg</span>

                                <h5 class="card-title">Ricota Fresca</h5>
                                <p class="form-inline-block float-left mr-2" name="peso"><small>Peso</p></small>
                                <select class="peso mb-3" name="peso">
                                    <option selected value=1>100g</option>
                                    <option value=2>200g</option>
                                    <option value=3>300g</option>
                                    <option value=4>400g</option>
                                    <option value=5>500g</option>
                                    <option value=6>600g</option>
                                    <option value=7>700g</option>
                                    <option value=8>800g</option>
                                    <option value=9>900g</option>
                                    <option value=10>1kg</option>
                                </select>
                                <span class="float-right">
                                    <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                                </span>
                            </div>
                        </div>    
                </section>
                <section class="frios">
                    <div class="col-lg-10 mx-auto col-12 text-left mb-3">      
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/produtos/frios/salame.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <span class="float-right">R$60/kg</span>
                                    <h5 class="text-truncate">Salame</h5>              
                                    <!--<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>-->
                                    <p class="form-inline-block float-left mr-2" name="peso"><small>Peso</p></small>
                                    <select class="peso mb-3" name="peso">
                                        <option selected value=1>100g</option>
                                        <option value=2>200g</option>
                                        <option value=3>300g</option>
                                        <option value=4>400g</option>
                                        <option value=5>500g</option>
                                        <option value=6>600g</option>
                                        <option value=7>700g</option>
                                        <option value=8>800g</option>
                                        <option value=9>900g</option>
                                        <option value=10>1kg</option>
                                    </select>
                                    <span class="float-right">
                                        <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                                    </span>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('img/produtos/frios/queijo.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                <span class="float-right">R$30/kg</span>
                                <h5 class="card-title">Queijo</h5>
                                <p class="form-inline-block float-left mr-2" name="peso"><small>Peso</p></small>
                                <select class="peso mb-3" name="peso">
                                    <option selected value=1>100g</option>
                                    <option value=2>200g</option>
                                    <option value=3>300g</option>
                                    <option value=4>400g</option>
                                    <option value=5>500g</option>
                                    <option value=6>600g</option>
                                    <option value=7>700g</option>
                                    <option value=8>800g</option>
                                    <option value=9>900g</option>
                                    <option value=10>1kg</option>
                                </select>
                                <span class="float-right">
                                    <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('img/produtos/frios/bluecheese.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <span class="float-right">R$40/kg</span>
                                <h5 class="card-title">Queijo Gorgonzola</h5>
                                <p class="form-inline-block float-left mr-2" name="peso"><small>Peso</p></small>
                                <select class="peso mb-3" name="peso">
                                    <option selected value=1>100g</option>
                                    <option value=2>200g</option>
                                    <option value=3>300g</option>
                                    <option value=4>400g</option>
                                    <option value=5>500g</option>
                                    <option value=6>600g</option>
                                    <option value=7>700g</option>
                                    <option value=8>800g</option>
                                    <option value=9>900g</option>
                                    <option value=10>1kg</option>
                                </select>
                                <span class="float-right">
                                    <a href="/cesta-compras" class="btn btn-primary float-right">Add a Cesta</a>
                                </span>
                            </div>
                        </div>      
                </section>
                <br>
                <section class="lanches">
                    <div class="col-lg-10 mx-auto col-12 text-left mb-3">
                        <hr>
                        <h2 class="mb-4">Sanduiches e Salgados</h2>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/produtos/lanche/sandwich.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <span class="float-right">R$12</span>
                                        <h5 class="text-truncate">Sanduíche de Salame</h5>              
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                        <select class="qtd mb-3" name="qtd">
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
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/produtos/lanche/sandwich2.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <span class="float-right">R$15</span>
                                        <h5 class="card-title">Sanduiche Vegetariano</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                        <select class="qtd mb-3" name="qtd">
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
                                        <i style='font-size:15px' class='fas'>&#xf06c;</i>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('img/produtos/lanche/sandwich3.jpg')}}" alt="Card image cap">
                                    <div class="card-body">
                                        <span class="float-right">R$15</span>
                                        <h5 class="card-title">Croissant Recheado</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                        <select class="qtd mb-3" name="qtd">
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
                        </section>
                        <section class="lanches">
                            <div class="col-lg-10 mx-auto col-12 text-left mb-3">
                                <div class="card-deck">
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('img/produtos/lanche/cute.jpg')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <span class="float-right">R$8</span>
                                            <h5 class="text-truncate">Torrada Decorada</h5>              
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                            <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                            <select class="qtd mb-3" name="qtd">
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
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('img/produtos/lanche/sandwich4.jpg')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <span class="float-right">R$13</span>
                                            <h5 class="card-title">Torrada Vegetariana</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                            <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                            <select class="qtd mb-3" name="qtd">
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
                                            <i style='font-size:15px' class='fas'>&#xf06c;</i>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top" src="{{ asset('img/produtos/lanche/crepe.jpg')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <span class="float-right">R$9</span>
                                            <h5 class="card-title">Crepe</h5>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                            <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                            <select class="qtd mb-3" name="qtd">
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
                            </section>
                            <br>
                            <section class="mercearia">
                                <div class="col-lg-10 mx-auto col-12 text-left mb-3">
                                    <hr>
                                    <h2 class="mb-4">Mercearia</h2>
                                        <div class="card-deck">
                                            <div class="card">
                                                <img class="card-img-top" src="{{ asset('img/produtos/mercearia/espresso.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <span class="float-right">R$5</span>
                                                    <h5 class="text-truncate">Espresso</h5>            
                                                    <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                                    <select class="qtd mb-3" name="qtd">
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
                                            <div class="card">
                                                <img class="card-img-top" src="{{ asset('img/produtos/mercearia/cappuccino.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <span class="float-right">R$8</span>
                                                    <h5 class="card-title">Cappuccino</h5>              
                                                    <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                                    <select class="qtd mb-3" name="qtd">
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
                                            <div class="card">
                                                <img class="card-img-top" src="{{ asset('img/produtos/mercearia/cha2.jpg')}}" alt="Card image cap">
                                                <div class="card-body">
                                                    <span class="float-right">R$7</span>
                                                    <h5 class="card-title">Chá Quente</h5>
                                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                                    <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                                    <select class="qtd mb-3" name="qtd">
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
                                    </section>
                                    <section class="mercearia pb-5">
                                        <div class="col-lg-10 mx-auto col-12 text-left mb-3">
                                            <div class="card-deck">
                                                <div class="card">
                                                    <img class="card-img-top" src="{{ asset('img/produtos/mercearia/chagelado.jpg')}}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <span class="float-right">R$8.5</span>
                                                        <h5 class="text-truncate">Chá Gelado</h5>              
                                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                                        <select class="qtd mb-3" name="qtd">
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
                                                <div class="card">
                                                    <img class="card-img-top" src="{{ asset('img/produtos/mercearia/suco.jpg')}}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <span class="float-right">R$11</span>
                                                        <h5 class="card-title">Sucos</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                                        <select class="qtd mb-3" name="qtd">
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
                                                <div class="card">
                                                    <img class="card-img-top" src="{{ asset('img/produtos/mercearia/corona.jpg')}}" alt="Card image cap">
                                                    <div class="card-body">
                                                        <span class="float-right">R$8.5</span>
                                                        <h5 class="card-title">Cerveja - Corona</h5>
                                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit!</p>
                                                        <p class="form-inline-block float-left mr-2" name="qtd"><small>Qtd</p></small>
                                                        <select class="qtd mb-3" name="qtd">
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
                                        </section>
                                        
@endsection