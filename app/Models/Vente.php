<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'client_name',
        'article_name',
        'quantity_choiced',
        'total_price'
    ];
}
