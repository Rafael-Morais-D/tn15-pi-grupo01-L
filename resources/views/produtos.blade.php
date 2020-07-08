@extends('layouts.app');

@section('content')
    <div id="carouselpao" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselpao" data-slide-to="0" class="active"></li>
            <li data-target="#carouselpao" data-slide-to="1"></li>
            <li data-target="#carouselpao" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/produtos/slide2.png" alt="Pão rústico" class='tales'>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/produtos/slide1.png" alt="Mesa de Pães" class='tales'>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/produtos/pao/pao2.jpg" alt="Massa de Pão" class='tales'>
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
    </section>

    <section class='paes'>
        <!--<a id='paesbolo'></a>--> 
        <div class="col-lg-10 mx-auto col-12 text-left mb-3">
            <h2>Pães e Doces</h2>
                <div class="card-deck">
                    <div class="card">
                    <img class="card-img-top" src="./assets/produtos/pao/pao.jpg" alt="Card image cap">
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
                            <a href="./cesta-de-compras.php" class="btn btn-primary float-right">Add a Cesta</a>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="./assets/produtos/pao/baguete.jpg" alt="Card image cap">
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
                            <a href="./cesta-de-compras.php" class="btn btn-primary float-right">Add a Cesta</a>
                        </span>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="./assets/produtos/pao/croissant2.jpg" alt="Card image cap">
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
                            <a href="./cesta-de-compras.php" class="btn btn-primary float-right">Add a Cesta</a>
                        </span>
                    </div>
                </div>
        </div>      
    </section>

    <section class='paes'>
        <a id='paes'></a>
        <div class="col-lg-10 mx-auto col-12 text-left mb-3">
    
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="./assets/produtos/pao/cheesecake.jpg" alt="Card image cap">
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
                                <a href="./cesta-de-compras.php" class="btn btn-primary float-right">Add a Cesta</a>
                            </span>
                    </div>
                </div>
            <div class="card">
                <img class="card-img-top" src="./assets/produtos/pao/brownie.jpg" alt="Card image cap">
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
                            <a href="./cesta-de-compras.php" class="btn btn-primary float-right">Add a Cesta</a>
                        </span>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./assets/produtos/pao/bagel.jpg" alt="Card image cap">
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
                            <a href="./cesta-de-compras.php" class="btn btn-primary float-right">Add a Cesta</a>
                        </span>
                </div>
            </div>      
    </section>
    

    
@endsection