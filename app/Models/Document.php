<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //model para inserção em banco de dados
    protected $table = 'documents';
    protected $primaryKey = 'id';
    protected $fillable = [ 
        'title',
        'content',
        'category_id',
        'exercice_year',
    ];

}
