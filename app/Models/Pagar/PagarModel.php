<?php

namespace App\Models\Pagar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Comprador\CompradorModel;
use App\Models\Producto\ProductoModel;

class PagarModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'comprador_id',
        'producto_id'
    ];

    // Agrear modelos a relacionar
    public function compradores(){
        return $this->belongsTo(CompradorModel::class);
    }

    public function productos(){
        return $this->belongsTo(ProductoModel::class);
    }
}
