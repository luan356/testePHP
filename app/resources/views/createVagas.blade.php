@extends('template.template')

@section('content')
<h1 class="text-center">Cadastrar Vagas</h1><hr>
<div class='text-center col-8 m-auto'>
    <form name="formVagas" id="formVagas" method="post" action="{{url('vagas')}}">
        @csrf
        <input class="form-control" type="text" name="vaga" id="vaga" placeholder="vaga" required>
        <input class="form-control" type= "text" name="empresa" id="empresa" placeholder="empresa" required>
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
        <input class="btn btn-primary btn-sm " type="submit" value="Cadastrar">
    </form>
</div>



@endsection
