<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelVagas extends Model
{
    protected $table ='model_vagas';
    protected $fillable =['vaga','empresa','regime','status'];
    }

