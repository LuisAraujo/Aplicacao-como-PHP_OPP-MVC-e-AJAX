#DESENVOLVENDO EM 3 CAMADAS COMO PHP 5, MVC e AJAX

> Modelo modificado do exempleo apresentação de Almir Neto e Otávio Calaça no CONAPHP
consultar aqui: http://pt.slideshare.net/otaviocx/desenvolvimento-em-trs-camadas-com-php-5-mvc-e-ajax-presentation
Obs.: Esse modelo exclui o fluxo para os Actions, utilizando Dispactcher para encaminhar a requisição ao Controller
específico.


##Estrutura MVC

* View
 - fmListar.php

* Model
 - Bean
	 - Produto.php
 -DAO
   -ProdutoDAO

* Controller
 - Dispatcher
 - ControllerProduto.php
 - includes
	 - autoload.php
	 - Conexao.php


##Fluxo

![Fluxo MVC](https://github.com/LuisAraujo/Aplicacao-como-PHP_OPP-MVC-e-AJAX/blob/master/fluxo2.png)
