@extends('template.template')

@section('content')
<h1 class="text-center">Inicio</h1>
<div class="text-center mt-3mb-4">
  <a href="{{url("candidato/show")}}">
<button class="btn btn-success">Candidatos</button>
</a>
<a href="{{url("vagas/show")}}" class="mx-2">
        <button class="btn btn-primary">Vagas</button>
    </a>
    <a href="{{url("apply")}}" class="mx-2">
        <button class="btn btn-info">Aplicação de vagas</button>
    </a>
</a>
</div>
