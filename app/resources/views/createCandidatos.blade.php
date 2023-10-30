@extends('template.template')

@section('content')
<h1 class="text-center">Cadastrar Candidatos</h1><hr>
<div class='text-center col-8 m-auto'>
    <form name="formVagas" id="formVagas" method="post" action="{{url('candidato')}}">
        @csrf
        <input class="form-control" type="text" name="nome" id="nome" placeholder="nome" required>
        <input class="form-control" type ="text" name="email" id="email" placeholder="email" required>
        <input class="form-control" type="text" name="sexo" id="sexo" placeholder="sexo" required>
        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="telefone" required>
        <br>
        <input class="btn btn-primary btn-sm " type="submit" value="Cadastrar">
    </form>
</div>



@endsection
