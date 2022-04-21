<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'supplier',
        'article_name',
        'article_price',
        'quantity_choiced',
        'total_price'
    ];
}
