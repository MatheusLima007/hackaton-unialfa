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
        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
        .btn {
            text-decoration: none;
            color: black;
        }
        .link-trash {
            color: white;
        }
        .link:hover {
            color: white;
        }
        .btn:hover {
            background-color: green;
        }
        .link-trash:hover {
            background-color: #b70;
        }
        .cover {
            object-fit: cover;
            width: auto;
            height: 250px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-dark bg-light">
        <div class="container-fluid d-flex">
            <div class="justify-content-center ms-5">
                <ul class="nav">
                    <li class="nav-item me-5">
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
                        <a class="nav-link border-bottom border-2" href="../new-cars"><strong>Carros Novos</strong></a>
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

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($datas ?? '' as $data)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top cover" src="{{ $data->image }}" alt="Card image cap">
                            <div class="card-body">
                                <div class="d-flex">
                                    <p class="card-text flex-grow-1 mt-2"><strong>Modelo: </strong>{{ $data->model }}</p>
                                    <p class="card-text p-2"><strong>Ano: </strong>{{ $data->fabrication }}</p>
                                </div>
                                <div class="d-flex">
                                    <p class="card-text flex-grow-1 mt-2"><strong>Marca: </strong>{{ $data->Brand->brand }}</p>
                                    <p class="card-text p-2 text-{{ $data->type === true ? 'success' : 'danger' }}"><strong>{{ $data->type === true ? 'NOVO' : 'USADO' }}</strong></p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="item/{{ $data->id }}" class="link">
                                            <button type="button" class="btn btn-sm btn-outline-secondary ">
                                                Visualizar
                                            </button>
                                        </a>
                                        <a href="../edit-car/{{ $data->id }}" class="link">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                                Editar
                                            </button>
                                        </a>
                                        <form action="{{ url('/dashboard', ['id' => $data->id]) }}" method="post">
                                            <input class="btn btn-sm btn-danger link-trash" type="submit" value="Delete" />
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </div>
                                    <h4 class="text-primary"><strong>R$ </strong>{{ $data->price }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>

</body>

</html>
