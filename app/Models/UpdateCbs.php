<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UpdateCbs extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'update_cbs';
    
    protected $fillable =[
        'date',
        'perihal',
        'name_file',
        'alasan',
        'hasil',
        'user'
    ];
}
