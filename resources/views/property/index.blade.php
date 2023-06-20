@extends('property.master')

@section('content')
<div class="container my-3">
    <h1>Listagem de produtos</h1>

    <?php

        if (!empty($properties)) {
            echo '<table class="table table-striped table-hover">';

            echo "<thead class='bg-primary text-white'>
                                    <td>Título</td>
                                        <td>Valor de Locação</td>
                                        <td>Valor de compra</td>
                                        <td>Ações</td>
                                    </thead>";

            foreach ($properties as $property) {
                $linkReadMore = url(path: '/imoveis/' . $property->name);
                $linkEditItem = url(path: '/imoveis/editar/' . $property->name);
                $linkRemoveItem = url(path: '/imoveis/remover/' . $property->name);

                echo "<tr>
                                        <td>{$property->title}</td>
                                        <td>R$  " .
                    number_format($property->rental_price, decimals: 2, decimal_separator: ',', thousands_separator: '. ') .
                    "</td>
                                        <td>R$  " .
                    number_format($property->sale_price, decimals: 2, decimal_separator: ',', thousands_separator: '.') .
                    "</td>

                                        <td>
                                        <a href='{$linkReadMore}'>Ver mais</a>
                                         |
                                         <a href='{$linkEditItem}'>Editar</a>
                                         |
                                         <a href='{$linkRemoveItem}'>Remover</a></td>
                                    </tr>";
            }

            echo '</table>';
        }

        ?>
</div>
@endsection
