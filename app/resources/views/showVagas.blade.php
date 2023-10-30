@extends('template.template')

@section('content')

<h1 class="text-center">Vagas</h1>
<div class="text-center mt-3 mb-4">
    <a href="{{ url("vagas/create") }}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div>
    @csrf

    <!-- Campo de pesquisa -->
    <div class="mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar por vaga,empresa,regime,status">
    </div>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Vaga</th>
                <th scope="col">Empresa</th>
                <th scope="col">Regime</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vag as $vags)
            <tr>
                <th scope="row">{{$vags->id}}</th>
                <td>{{$vags->vaga}}</td>
                <td>{{$vags->empresa}}</td>
                <td>{{$vags->regime}}</td>
                <td>{{$vags->status}}</td>
                <td>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ url("vagas/$vags->id/edit") }}" class="mr-2">
                            <button class="btn btn-primary btn-sm">Editar</button>
                        </a>
                        <a href="{{ url("vagas/$vags->id") }}" class="js-del">
                            <button class="btn btn-danger btn-sm">Deletar</button>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$vag->links()}}
</div>

<script>
    document.getElementById('searchInput').addEventListener('input', function () {
        var filter, table, tr, tds, i, txtValue;
        filter = this.value.toUpperCase();
        table = document.querySelector('.table');
        tr = table.getElementsByTagName('tr');

        for (i = 1; i < tr.length; i++) { // Comece com i=1 para pular a primeira linha de cabeçalho
            tds = tr[i].getElementsByTagName('td'); // Obtenha todas as colunas da linha
            var match = false;

            for (var j = 0; j < tds.length; j++) {
                txtValue = tds[j].textContent || tds[j].innerText;
                var regExp = new RegExp(filter, 'i'); // Expressão regular com busca insensível a maiúsculas e minúsculas
                if (txtValue.match(regExp)) {
                    match = true;
                    break; // Se houver correspondência em qualquer coluna, pare a pesquisa
                }
            }

            if (match) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    });
</script>


@endsection
