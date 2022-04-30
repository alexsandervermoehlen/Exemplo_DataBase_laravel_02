<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function listagem() {
        if (view()->exists('produto.listagem')) {
            $produtos = DB::select('select * from produto');
            return view('produto.listagem', 
            ['produtos' => $produtos]);
        } else {
            return 'Página não encontrada.';
        }
    }

    public function detalhe($id) {
        $produto = DB::select('select * from produto where id = ?',
             [$id]);
        if (empty($produto)) {
            return '<h1>Produto não Localizado</h1>';
        } else {
            return view("produto.detalhe",
            ['produto' => $produto[0]]);
        }
    }

    public function delete($id) {
        $produto = DB::select('delete from produto where id = ?',
             [$id]);
        return '<h1>Produto deletado com sucesso!</h1>
            <a href="/produtos">Voltar</b>
        ';
    }
}
