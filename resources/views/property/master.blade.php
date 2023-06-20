<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Imóveis</title>
    <link href="<?= asset('css/app.css') ?>" rel="stylesheet">

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Laravel <b>Crud</b></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url(path: '/imoveis') ?>">Listar todos os imóveis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url(path: '/imoveis/novo') ?>">Cadastrar novo imóvel</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="<?= asset('js/app.js'); ?>"></script>
</body>

</html>
