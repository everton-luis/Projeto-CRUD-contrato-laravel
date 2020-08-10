<?php

namespace App\Http\Controllers;
use App\Models\Contrato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratoControlador extends Controller
{
    //
    public function cadastrar(){
        $contrato = new Contrato();
        $contrato->email_contrato = $_POST['email_contrato'];
        $contrato->cnpj = $_POST['cnpj'];
        $contrato->inuser = $_POST['inuser'];
        $contrato->razaosocial = $_POST['razaosocial'];
        $contrato->nomefantasia = $_POST['nomefantasia1'];
        $contrato->integracao = $_POST['integracao1'];
        $contrato->inkey = $_POST['inkey'];
        $contrato->email_unidade = $_POST['email_unidade'];
        $contrato->municipio = $_POST['municipio'];
        $contrato->tipo = $_POST['tipo'];
        $contrato->status_contrato = $_POST['status_contrato'];
        $contrato->status_unidade = $_POST['status_unidade'];
        $contrato->paciente = $_POST['paciente'];
        $contrato->acompanhante = $_POST['acompanhante'];
        $contrato->obito = $_POST['obito'];
        $contrato->cpf = $_POST['cpf'];
        $contrato->nome = $_POST['nome'];

        $contrato->save();
        
        return redirect('/home');
    }

    public function listagem(){
        $contratos = DB::table('contrato')->get();
        //$contratos = DB::table('contrato')->toSql();

        //return $contratos;

        return view('listagem', compact('contratos'));

    }

    public function editar($id){
        
        $contrato_editar = DB::table('contrato')->where('id',$id)->first();
        

        return view('editarcontrato', compact('contrato_editar'));
    }

    public function atualizar($id){

        $contrato = Contrato::find($id);
        $contrato->email_contrato = $_POST['email_contrato'];
        $contrato->cnpj = $_POST['cnpj'];
        $contrato->inuser = $_POST['inuser'];
        $contrato->razaosocial = $_POST['razaosocial'];
        $contrato->nomefantasia = $_POST['nomefantasia1'];
        $contrato->integracao = $_POST['integracao1'];
        $contrato->inkey = $_POST['inkey'];
        $contrato->email_unidade = $_POST['email_unidade'];
        $contrato->municipio = $_POST['municipio'];
        $contrato->tipo = $_POST['tipo'];
        $contrato->status_contrato = $_POST['status_contrato'];
        $contrato->status_unidade = $_POST['status_unidade'];
        $contrato->paciente = $_POST['paciente'];
        $contrato->acompanhante = $_POST['acompanhante'];
        $contrato->obito = $_POST['obito'];
        $contrato->cpf = $_POST['cpf'];
        $contrato->nome = $_POST['nome'];

        $contrato->save();

        return redirect('/home');

    }

    public function deletar($id){
        $contrato = Contrato::find($id);
        $contrato->delete();

        return redirect('/listagem')->with('mensagem', 'Cadastro deletado com sucesso!');

    }


}
