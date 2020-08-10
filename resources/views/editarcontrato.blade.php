@extends('layouts.argon')

@section('index-editar')
    <h1 style="color:white;">Cadastro Contrato</h1>
@endsection

@section('formulario-editar')

<?php echo $contrato_editar->cnpj; ?>
<form id="example-form" action="/atualizarcontrato/{{$contrato_editar->id}}" method="POST">
    @csrf
    <div>
        <h3>Contrato</h3>
        <section>
            <label for="cnpj">CNPJ *</label>
            <input id="cnpj" name="cnpj" type="text" class="required" value="{{$contrato_editar->cnpj}}">
            <label for="razaosocial">Razão Social *</label>
            <input id="razaosocial" name="razaosocial" type="text" class="required" value="{{$contrato_editar->razaosocial}}">
            <label for="nomefantasia1">Nome Fantasia *</label>
            <input id="nomefantasia1" name="nomefantasia1" type="text" class="required" value="{{$contrato_editar->nomefantasia}}">
            <label for="email_contrato">Email *</label>
            <input id="email_contrato" name="email_contrato" type="text" class="required email" value="{{$contrato_editar->email_contrato}}">
            <label for="inuser">In User *</label>
            <input id="inuser" name="inuser" type="text" class="required" value="{{$contrato_editar->inuser}}">
            <label for="status_contrato">Status *</label>
            <select id="status_contrato" name="status_contrato" class="required" >
                <option></option>
                <option value="0"
                    <?php if($contrato_editar->status_contrato == "0"){
                        echo "selected";
                    } ?>
                >Ativo</option>
                <option value="1"
                    <?php if($contrato_editar->status_contrato == "1"){
                        echo "selected";
                    } ?>
                >Inativo</option>
            </select>


            <p>(*) Campo Obrigatório</p>
        </section>
        <h3>Unidade</h3>
        <section>
            <label for="nomefantasia2" disabled="disabled">Nome Fantasia *</label>
            <input id="nomefantasia2" name="nomefantasia2" type="text" value="{{$contrato_editar->nomefantasia}}" class="required" disabled="disabled" readonly="readonly">
            <label for="integracao1">Integração *</label>
            <input id="integracao1" name="integracao1" type="text" class="required" value="{{$contrato_editar->integracao}}">
            <label for="inkey">In Key *</label>
            <input id="inkey" name="inkey" type="text" class="required" value="{{$contrato_editar->inkey}}">
            <label for="email_unidade">Email *</label>
            <input id="email_unidade" name="email_unidade" type="text" value="{{$contrato_editar->email_unidade}}" class="required email">
            <label for="municipio">Município</label>
            <input id="municipio" name="municipio" type="text" value="{{$contrato_editar->municipio}}" class="required" >
            <label for="tipo">Tipo *</label>
            <select id="tipo" name="tipo" class="required" >
                <option></option>
                <option value="0"
                    <?php if($contrato_editar->tipo == "0"){
                        echo "selected";
                    } ?>
                >Json</option>
                <option value="1"
                    <?php if($contrato_editar->tipo == "1"){
                        echo "selected";
                    } ?>
                >Webview</option>
                <option value="2"
                    <?php if($contrato_editar->tipo == "2"){
                        echo "selected";
                    } ?>
                >XML</option>
                <option value="3"
                    <?php if($contrato_editar->tipo == "3"){
                        echo "selected";
                    } ?>
                >HL7</option>
            </select>
            <label for="status_unidade">Status *</label>
            <select id="status_unidade" name="status_unidade" class="required" >
                <option></option>
                <option value="0"
                    <?php if($contrato_editar->status_unidade == "0"){
                        echo "selected";
                    } ?>
                >Ativo</option>
                <option value="1"
                    <?php if($contrato_editar->status_unidade == "1"){
                        echo "selected";
                    } ?>
                >Inativo</option>
            </select>

            <p>(*) Campo Obrigatório</p>
        </section>
        <h3>Atestados</h3>
        <section>
            <label for="nomefantasia3">Nome Fantasia *</label>
            <input id="nomefantasia3" name="nomefantasia3" type="text" value="{{$contrato_editar->nomefantasia}}" class="required" disabled="disabled" readonly="readonly">
            <label for="integracao2">Integração *</label>
            <input id="integracao2" name="integracao2" type="text" value="{{$contrato_editar->integracao}}" class="required" disabled="disabled" readonly="readonly">
            <hr/>
            <label for="paciente">Paciente *</label>
            <input id="paciente" name="paciente" type="text" value="{{$contrato_editar->paciente}}" class="required">
            <label for="acompanhante">Acompanhante *</label>
            <input id="acompanhante" name="acompanhante" type="text" value="{{$contrato_editar->acompanhante}}" class="required">
            <label for="obito">Óbito </label>
            <input id="obito" name="obito" type="text" value="{{$contrato_editar->obito}}">
            
            <p>(*) Campo Obrigatório</p>
        </section>
        <h3>Usuário</h3>
        <section>
            <label for="nomefantasia4">Nome Fantasia *</label>
            <input id="nomefantasia4" name="nomefantasia4" type="text" value="{{$contrato_editar->nomefantasia}}" class="required" disabled="disabled" readonly="readonly">
            <label for="cpf">CPF *</label>
            <input id="cpf" name="cpf" type="text" value="{{$contrato_editar->cpf}}" class="required">
            <label for="nome">Nome *</label>
            <input id="nome" name="nome" type="text" value="{{$contrato_editar->nome}}" class="required">

            <p>(*) Campo Obrigatório</p>
            
        </section>
    </div>
</form>
@endsection