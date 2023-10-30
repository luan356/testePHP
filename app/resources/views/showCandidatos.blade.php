@extends('template.template')

@section('content')

<h1 class="text-center">Candidato</h1>
<div class="text-center mt-3 mb-4">
    <a href="{{ url("candidato/create") }}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div>
    @csrf

    <!-- Campo de pesquisa -->
    <div class="mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar por nome,email,sexo,telefone">
    </div>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">nome</th>
                <th scope="col">email</th>
                <th scope="col">sexo</th>
                <th scope="col">telefone</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cad as $cads)
            <tr>
                <th scope="row">{{$cads->id}}</th>
                <td>{{$cads->nome}}</td>
                <td>{{$cads->email}}</td>
                <td>{{$cads->sexo}}</td>
                <td>{{$cads->telefone}}</td>
                <td>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ url("candidato/$cads->id/edit") }}" class="mr-2">
                            <button class="btn btn-primary btn-sm">Editar</button>
                        </a>
                        <a href="{{ url("candidato/$cads->id") }}" class="js-del">
                            <button class="btn btn-danger btn-sm">Deletar</button>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$cad->links()}}
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
