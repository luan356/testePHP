<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCandidato extends Model
{

    protected $table ='model_candidatos';
    protected $fillable =['nome','email','sexo','telefone'];
    }
