<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 23/08/15
 * Time: 07:23
 */

class Listar {
    public  function  execute(){

        Conexao::conectar();

        $produtoDao = new ProdutoDAO();
        $lista = $produtoDao->listarTudo();

        $_REQUEST["lista"] = $lista;

        return "Listar";

    }

} 