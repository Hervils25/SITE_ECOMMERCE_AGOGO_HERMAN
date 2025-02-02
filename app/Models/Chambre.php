<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $table = 'chambres';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description', 'category', 'price', 'quantity','date', 'statut'];
}
