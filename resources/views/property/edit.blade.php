@extends('property.master')

@section('content')

<div class="container my-3">
<h1>Formulario de edição</h1>

<?php
// Pegando apenas a primeira posição, neste caso só vamos ter 1 registro
$property = $property[0];
?>


<form action="<?= url('/imoveis/update', ['id' => $property->id]) ?>" method="POST">

    <?php echo csrf_field(); ?>

    <!-- Adicionando um input hidden indicando o metodo PUT -->
    <?php echo method_field(method: 'PUT'); ?>

    <div class="form-group">
        <label for="title">Título do imóvel</label>
        <input class="form-control" type="text" name="title" id="title" value="<?= $property->title?>">
    </div>

    <div class="form-group">
        <label for="description">Descrição do imóvel</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"><?= $property->description?></textarea>
    </div>

    <div class="form-group">
        <label for="rental_price">Valor de locação</label>
        <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price?>" class="form-control">
    </div>


    <div class="form-group">
        <label for="sale_price">Valor de compra</label>
        <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price?>" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar imóvel</button>
</form>
</div>
@endsection


