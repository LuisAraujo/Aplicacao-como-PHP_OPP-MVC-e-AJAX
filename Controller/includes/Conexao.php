<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 23/08/15
 * Time: 07:38
 */

class Conexao {

    public static function  conectar(){

         $link = mysql_connect("localhost", "root", "root");
         mysql_select_db("teste", $link);

    }

}


