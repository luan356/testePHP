<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelApply extends Model
{
    protected $table ='model_applies';
    protected $fillable =['vaga','empresa','candidato','id_candidato'];
    }
