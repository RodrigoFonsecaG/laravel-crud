<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    // Tabela no banco de dados
    protected $table = 'properties';

    // Para cadastro em massa
    protected $fillable = ['title', 'name', 'description', 'rental_price', 'sale_price'];

    // Desativando timestamps
    public $timestamps = false;
}

