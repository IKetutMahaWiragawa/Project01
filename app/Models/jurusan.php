<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;
    protected $guarded = ['kode', 'created_at', 'updated_at'];
    public $table = "jurusan";
}
