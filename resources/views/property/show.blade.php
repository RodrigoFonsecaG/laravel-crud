@extends('property.master')

@section('content')

<div class="container my-3">
    <h1>Página single</h1>

    <?php
    if(!empty($property)){
        foreach($property as $prop){
        ?>
    <h2>Título do Imovel:
        <?= $prop->title ?>
    </h2>
    <p>Descrição:
        <?= $prop->description ?>
    </p>
    <p>Valor de Locação:
        <?= $prop->rental_price ?>
    </p>
    <p>Valor de Venda:
        <?= $prop->sale_price ?>
    </p>
    <?php

        }
    }

    ?>
</div>
@endsection
