@extends('template.template')

@section('content')
<h1 class="text-center">Editar</h1><hr>
<div class= 'text-center col-8 m-auto'>


<form name="formEdit" id="formEdit" method="post" action="{{url("candidato/$users->id")}}">
@method('PUT')

@csrf
<input class="form-control" type="text" name="nome" id="nome" placeholder="nome" value="{{$users->nome ?? ''}}" required></select>
<input class="form-control" type="text" name="email" id="email" placeholder="email" value="{{$users->email ?? ''}}" required>
<input class="form-control" type="text" name="sexo" id="sexo" placeholder="sexo" value="{{$users->sexo ?? ''}}" required>
<input class="form-control" type="text" name="telefone" id="telefone" placeholder="telefone" value="{{$users->telefone ?? ''}}" required>
<br>
<input class="btn btn-primary btn-sm" type="submit" value="Editar">
</form>
</div>


@endsection