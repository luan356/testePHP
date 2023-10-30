@extends('template.template')

@section('content')

<div>
        <input type="hidden" name="selected_user_nome" id="selected_user_nome" value="">
        <table class="table mt-3">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Vaga</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Candidato</th>
                    <th scope="col">Inscrito?</th>

                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{$apply->vaga}}</td>
                    <td>{{$apply->empresa}}</td>
                    <td>{{$apply->candidato}}</td>
                    <td>Sim</td>
                    <td>
                    <td>
                </tr>
            </tbody>
        </table>
    </form>
</div>



@endsection
