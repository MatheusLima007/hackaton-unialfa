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
                        <a class="nav-link" href="../../dashboard">
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
                        <a class="nav-link border-bottom border-2" href="../edit-car/{{ $data->id }}"><strong>Atualizar carro</strong></a>
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

    @if ($toast ?? '' === true)
        <div class="alert alert-success text-center" role="alert">
            <strong>Carro atualizado com sucesso!</strong>
        </div>
    @endif

    <div class="album py-5 bg-light">
        <div class="container">
            <form action="{{ url('/edit-car', ['id' => $data->id]) }}" method="post" class="needs-validation" novalidate>
                <div class="row">
                    @method('put')
                    @csrf
                    <div class="mb-5 col-md-4">
                        <label for="model" class="form-label">Modelo</label>

                        <input type="text" value="{{ $data->model }}" class="form-control" id="model" name="model" required>
                        <div class="invalid-feedback">
                            Adicione um modelo!
                        </div>
                    </div>
                    <div class="mb-5 col-md-8">
                        <label for="image" class="form-label">URL da Imagem</label>

                        <input type="text" value="{{ $data->image }}" class="form-control" id="image" name="image" required>
                        <div class="invalid-feedback">
                            Adicione uma imagem!
                        </div>
                    </div>

                    <div class="mb-5 col-md-3">
                        <label for="price" class="form-label">Preço</label>

                        <input type="number" value="{{ $data->price }}" class="form-control" id="price" name="price" required>
                        <div class="invalid-feedback">
                            Adicione um preço!
                        </div>
                    </div>
                    <div class="mb-5 col-md-3">
                        <label for="type" class="form-label">Tipo</label>

                        <select name="type" class="form-select" id="type" required>
                            <option selected value="{{ $data->type }}">{{ $data->type === true ? 'Novo' : 'Usado' }}</option>
                            @if($data->type === true)
                                <option value="false">Usado</option>
                            @else
                                <option value="true">Novo</option>
                            @endif
                        </select>
                        <div class="invalid-feedback">
                            Selecione um tipo!
                        </div>
                    </div>

                    <div class="mb-5 col-md-3">
                        <label for="model_year" class="form-label">Ano modelo</label>

                        <input type="date" value="{{ $data->model_year }}" class="form-control" id="model_year" name="model_year" required>
                        <div class="invalid-feedback">
                            Selecione o ano do modelo!
                        </div>
                    </div>
                    <div class="mb-5 col-md-3">
                        <label for="fabrication" class="form-label">Ano de fabricação</label>

                        <input type="date" value="{{ $data->fabrication }}" class="form-control" id="fabrication" name="fabrication" required>
                        <div class="invalid-feedback">
                            Selecione o ano de fabricação!
                        </div>
                    </div>

                    <div class="mb-5 col-md-4">
                        <label for="user" class="form-label">Usuario</label>

                        <input type="text" class="form-control" placeholder="usuario" aria-label="Disabled input example" disabled id="image" name="image">
                    </div>
                    <div class="mb-5 col-md-4">
                        <label for="color_id" class="form-label">Cor</label>

                        <select name="color_id" class="form-select" id="color_id" required>
                            <option selected value="{{ $data->Color->id }}">{{ $data->Color->color }}</option>
                            @foreach($colors ?? '' as $color)
                                <option value="{{ $color->id }}">{{ $color->color }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Selecione uma cor!
                        </div>
                    </div>
                    <div class="mb-5 col-md-4">
                        <label for="brand_id" class="form-label">Marca</label>

                        <select name="brand_id" class="form-select" id="brand_id" required>
                            <option selected value="{{ $data->Brand->id }}">{{ $data->Brand->brand }}</option>
                            @foreach($brands ?? '' as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Selecione uma marca!
                        </div>
                    </div>
                </form>
                <div class="mt-5 container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <a class="me-2 col btn btn-outline-danger" href="../dashboard">Cancelar</a>
                        <input class="ms-2 me-2 col btn btn-primary" type="submit" value="Atualizar" />
                        <!-- <button type="submit"  class="ms-2 me-2 col btn btn-primary">Salvar</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
