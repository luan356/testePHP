@extends('template.template')

@section('content')

<div>
    <form method="POST" action="{{url('apply')}}">
        @csrf
        <div class="text-center mt-3">
            <select class="form-control mx-auto" name="user" id="user" required>
                <option value="">Selecione</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}" data-nome="{{ $user->nome }}">{{ $user->nome }}</option>
                @endforeach
            </select>
        </div>
        <input type="hidden" name="selected_user_id" id="selected_user_id" value="">
        <input type="hidden" name="selected_user_nome" id="selected_user_nome" value="">
        <table class="table mt-3">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Vaga</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vagasAtivas as $vags)
                <tr>
                    <td>{{$vags->vaga}}</td>
                    <td>{{$vags->empresa}}</td>
                    <td>
                        <form method="POST" action="{{url('apply')}}">
                            @csrf
                            <input type="hidden" name="nome_vaga" value="{{ $vags->vaga }}">
                            <input type="hidden" name="nome_empresa" value="{{ $vags->empresa }}">
                            <button type="submit" class="btn btn-primary btn-sm">Aplicar Candidatura</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>

<script>
    // JavaScript para atualizar os campos hidden com o ID e o nome da opção selecionada
    document.getElementById('user').addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        document.getElementById('selected_user_id').value = selectedOption.value;
        document.getElementById('selected_user_nome').value = selectedOption.getAttribute('data-nome');
    });
</script>

@endsection
