<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certiModel extends Model
{
    use HasFactory;

    protected $table ="certi_models";

    protected $fillable = ['user_id', 'file_name'];
    
}

