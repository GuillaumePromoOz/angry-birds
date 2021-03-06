<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bird extends Model
{
    use HasFactory;

    protected $table = 'birds';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description', 'image', 'price', 'user_id'];

    protected $timestamp = true;
}
