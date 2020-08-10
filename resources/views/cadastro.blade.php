@extends('layouts.argon')

@section('index-cadastro')
    <h1 style="color:white;">Cadastro Contrato</h1>
@endsection

@section('formulario-cadastro')
<form id="example-form" action="/cadastrarcontrato" method="POST">
    @csrf
    <div>
        <h3>Contrato</h3>
        <section>
            <label for="cnpj">CNPJ *</label>
            <input id="cnpj" name="cnpj" type="text" class="required">
            <label for="razaosocial">Razão Social *</label>
            <input id="razaosocial" name="razaosocial" type="text" class="required">
            <label for="nomefantasia1">Nome Fantasia *</label>
            <input id="nomefantasia1" name="nomefantasia1" type="text" class="required">
            <label for="email_contrato">Email *</label>
            <input id="email_contrato" name="email_contrato" type="text" class="required email">
            <label for="inuser">In User *</label>
            <input id="inuser" name="inuser" type="text" class="required">
            <label for="status_contrato">Status *</label>
            <select id="status_contrato" name="status_contrato" class="required" >
                <option></option>
                <option value="0">Ativo</option>
                <option value="1">Inativo</option>
            </select>


            <p>(*) Campo Obrigatório</p>
        </section>
        <h3>Unidade</h3>
        <section>
            <label for="nomefantasia2" disabled="disabled">Nome Fantasia *</label>
            <input id="nomefantasia2" name="nomefantasia2" type="text" class="required" disabled="disabled" readonly="readonly">
            <label for="integracao1">Integração *</label>
            <input id="integracao1" name="integracao1" type="text" class="required">
            <label for="inkey">In Key *</label>
            <input id="inkey" name="inkey" type="text" class="required">
            <label for="email_unidade">Email *</label>
            <input id="email_unidade" name="email_unidade" type="text" class="required email">
            <label for="municipio">Município</label>
            <input id="municipio" name="municipio" type="text" class="required">
            <label for="tipo">Tipo *</label>
            <select id="tipo" name="tipo" class="required" >
                <option></option>
                <option value="0">Json</option>
                <option value="1">Webview</option>
                <option value="2">XML</option>
                <option value="3">HL7</option>
            </select>
            <label for="status_unidade">Status *</label>
            <select id="status_unidade" name="status_unidade" class="required" >
                <option></option>
                <option value="0">Ativo</option>
                <option value="1">Inativo</option>
            </select>

            <p>(*) Campo Obrigatório</p>
        </section>
        <h3>Atestados</h3>
        <section>
            <label for="nomefantasia3">Nome Fantasia *</label>
            <input id="nomefantasia3" name="nomefantasia3" type="text" class="required" disabled="disabled" readonly="readonly">
            <label for="integracao2">Integração *</label>
            <input id="integracao2" name="integracao2" type="text" class="required" disabled="disabled" readonly="readonly">
            <hr/>
            <label for="paciente">Paciente *</label>
            <input id="paciente" name="paciente" type="text" class="required">
            <label for="acompanhante">Acompanhante *</label>
            <input id="acompanhante" name="acompanhante" type="text" class="required">
            <label for="obito">Óbito </label>
            <input id="obito" name="obito" type="text">
            
        </section>
        <h3>Usuário</h3>
        <section>
            <label for="nomefantasia4">Nome Fantasia *</label>
            <input id="nomefantasia4" name="nomefantasia4" type="text" class="required" disabled="disabled" readonly="readonly">
            <label for="cpf">CPF *</label>
            <input id="cpf" name="cpf" type="text" class="required">
            <label for="nome">Nome *</label>
            <input id="nome" name="nome" type="text" class="required">
            
        </section>
    </div>
</form>
@endsection