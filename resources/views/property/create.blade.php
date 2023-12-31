@extends('property.master')

@section('content')
<div class="container my-3">
    <h1>Formulario de cadastro</h1>

    <form action="<?= url(path: '/imoveis/store') ?>" method="POST">

        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="title">Título do imóvel</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Descrição do imóvel</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="rental_price">Valor de locação</label>
            <input type="text" name="rental_price" id="rental_price" class="form-control">
        </div>


        <div class="form-group">
            <label for="sale_price">Valor de compra</label>
            <input type="text" name="sale_price" id="sale_price" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar imóvel</button>
    </form>
</div>
@endsection
