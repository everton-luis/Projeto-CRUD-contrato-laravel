@extends('layouts.argon')

@section('index-listagem')
    <h1 style="color:white;">Listagem Contratos</h1>
@endsection

@section('mensagem')
    @if(session('mensagem'))
        <div class="alert alert-success">
            <p>{{session('mensagem')}}</p>
        </div>
    @endif
@endsection

@section('listagem-contratos')
    <table id="listagem" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>CNPJ</th>
                <th>Razão Social</th>
                <th>Nome Fantasia</th>
                <th>E-mail Contrato</th>
                <th>In User</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Ações</th>
                <th>Ações</th>
                
            </tr>
        </thead>

        <tbody>
             @foreach($contratos as $contrato)
                <tr>
                    <td>
                        {{$contrato->cnpj}}
                    </td>

                    <td>
                        {{$contrato->razaosocial}}
                    </td>

                    <td>
                        {{$contrato->nomefantasia}}
                    </td>

                    <td>
                        {{$contrato->email_contrato}}
                    </td>

                    <td>
                        {{$contrato->inuser}}
                    </td>

                    <td>
                        {{$contrato->cpf}}
                    </td>

                    <td>
                        {{$contrato->nome}}
                    </td>

                    <td>
                        <a href="/editarcontrato/{{$contrato->id}}">Editar</a>
                    </td>

                    <td>
                        <a href="/deletarcontrato/{{$contrato->id}}" onclick="return confirm('Tem certeza que deseja deletar contrato?');">Deletar</a>
                    </td>
                
                </tr>
            @endforeach
        </tbody>





    </table>
@endsection