@extends('template.template')

@section('content')
<h1 class="text-center">Editar</h1><hr>
<div class= 'text-center col-8 m-auto'>


<form name="formEdit" id="formEdit" method="post" action="{{url("vagas/$vag->id")}}">
@method('PUT')

@csrf
<input class="form-control" type="text" name="vaga" id="vaga" placeholder="vaga" value="{{$vag->vaga ?? ''}}" required></select>
<input class="form-control" type="text" name="empresa" id="empresa" placeholder="empresa" value="{{$vag->empresa ?? ''}}" required>
<select class="form-control" name="regime" id="regime"required>
            <option value="CLT">CLT</option>
            <option value="PJ">Pessoa Juridica</option>
            <option value="Freelancer">Freelancer</option>
            </select>
        <select class="form-control" name="status" id="status"required>
            <option value="A">Ativo</option>
            <option value="C">Cancelada</option>
            <option value="P">Pausada</option>
            </select>
<br>
<input class="btn btn-primary btn-sm" type="submit" value="Editar">
</form>
</div>
@endsection