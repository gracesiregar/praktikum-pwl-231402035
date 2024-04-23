<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    //0 references
    public $timestamps = false;

    //0 references
    protected $guarded = ['id'];
}
