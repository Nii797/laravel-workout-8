<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // mengakses hanya dalam field dalam array nya saja
    protected $fillable = [ 'title', 'excerpt', 'body' ];
    // mengisi semua kecuali id
    protected $guarded = ['id'];
}
