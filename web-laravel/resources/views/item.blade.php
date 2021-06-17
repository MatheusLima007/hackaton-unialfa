<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .card-img-top {
            width: 400px;
            height: auto;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-dark bg-light">
        <div class="container-fluid d-flex">
            <div class="justify-content-center ms-5">
                <ul class="nav">
                    <li class="nav-item me-5 border-bottom border-2">
                        <a class="nav-link" href="../dashboard">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about"><strong>Sobre</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../new-cars"><strong>Carros Novos</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../used-cars"><strong>Carros Usados</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../create-car"><strong>Adicionar Carro</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Atualizar carro</a>
                    </li>
                </ul>
            </div>

            <div class="d-flex align-items-center me-5">
                <h4 class="text-center text-dark me-2 pt-1">Ola, Matheus</h4>
                <button class="btn btn-outline-danger" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg>
                    Logout
                </button>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center height-div">
        <div class="row content">
            <div class="col-sm-12 text-left">
                <section class="py-5">
                    <div class="container px-4 px-lg-5 my-5">
                        <div class="row gx-4 gx-lg-5 align-items-center">
                            <div class="col-md-6">
                                <img class="card-img-top mb-5 mb-md-0" src="{{ $data->image }}" alt="..." />
                            </div>
                            <div class="col-md-6">
                                <div class="small mb-1">Ano modelo: {{ $data->model_year }} - Ano fabricação: {{ $data->fabrication }}</div>
                                <h1 class="display-5 fw-bolder">Modelo: {{ $data->model }}</h1>
                                <div class="fs-5 mb-5">
                                    <span class="text-decoration-line-through">R$ {{ $data->price + 5000}}</span>
                                    <span>R$ {{ $data->price }}</span>
                                </div>
                                <p class="lead">
                                    Marca: <strong>{{ $data->Brand->brand }}</strong>
                                    <br>
                                    Tipo: <strong>{{ $data->type === true ? 'NOVO' : 'USADO' }}</strong>
                                    <br>
                                    Cor: <strong>{{ $data->Color->color }}</strong>
                                </p>
                                <div class="d-flex">
                                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                        <i class="bi-cart-fill me-1"></i>
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- <div class="col-sm-1 sidenav">
            </div> -->
        </div>

    </div>
    <footer class="container-fluid text-center">
        <p>&copy; Desenvolvido por Matheus Lima - Bruno Silva</p>
    </footer>
</body>

</html>
