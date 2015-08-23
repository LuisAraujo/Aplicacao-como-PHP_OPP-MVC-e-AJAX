#DESENVOLVENDO EM 3 CAMADAS COMO PHP 5, MVC e AJAX

> Modelo implementado por mim como base na apresentação de Almir Neto e Otávio Calaça no CONAPHP
consultar aqui: http://pt.slideshare.net/otaviocx/desenvolvimento-em-trs-camadas-com-php-5-mvc-e-ajax-presentation


##Estrutura

* View
 - fmListar.php

* Model
 - Action
	 - Listar.php
 - Bean
	 - Produto.php
 -DAO
   -ProdutoDAO

* Controller

 - ControllerProduto.php
 - includes
	 - autoload.php
	 - Conexao.php


##Fluxo

![Fluxo MVC](https://github.com/LuisAraujo/PHP_OOP-MVC-AJAX/blob/master/fluxo.png)