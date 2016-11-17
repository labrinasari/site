<!DOCTYPE html>
<html>
<head>
<style>
ul.animatedunderlinemenu{
  list-style: none;
  margin: 0;
	margin-bottom: 50px; /* add spacing between UL and rest of content for demo purposes */
  padding:0;
  text-align:center; /* enter "left", "right", or "center" to orient the menu accordingly */
  font: 'Lato', sans-serif; /* use google custom font "Lato" */
}

ul.animatedunderlinemenu li{
  display: inline;
  margin-right:25px; /* spacing between each menu item */
}

ul.animatedunderlinemenu li a{
  position: relative;
	display: inline-block;
  color: black;
  padding: 2px 3px;
  padding-bottom: 8px; /*spacing between each menu item and underline beneath it */
  text-decoration: none;
  margin-bottom: 20px; /* spacing between A elements, relevant when menu becomes multi-lined */
  letter-spacing: .1em;
}

ul.animatedunderlinemenu li a:after{
  position: absolute;
	display: block;
  content: '';
  width: 0;
  height: 3px;
  background: #941881;
  top: 100%;
  left: 0;
  opacity: 0;
  z-index: -1;
  -wekkit-transition: all .3s;
  transition: all .3s;
}

ul.animatedunderlinemenu li a:hover:after{
  width: 100%; /* increase underline width to 100% */
  opacity: 1;
}

/* //// Expand underline effect //// */

ul.animatedunderlinemenu.expand li a:after{
  background: #CAF4F9;
	-webkit-transition: width .3s, opacity .3s, height .3s .3s;
	transition: width .3s, opacity .3s, height .3s .3s;
}

ul.animatedunderlinemenu.expand li a:hover:after{
  width: 100%; /* increase underline width to 100% */
	height: 10px; /* increase underline height to 10px */
  opacity: 1;
}

/* //// Expand underline upwards effect //// */

ul.animatedunderlinemenu.expandup li a:after{
  background: #CAF4F9;
	top: auto;
	bottom: 0;
	-webkit-transition: width .3s, opacity .3s, height .3s .3s;
	transition: width .3s, opacity .3s, height .3s .3s;
}

ul.animatedunderlinemenu.expandup li a:hover:after{
  width: 100%; /* increase underline width to 100% */
	height: 100%; /* increase underline height to 100% */
  opacity: 1;
}
p{
    text-align: center;
}
</style>
<img src="img/untitled.jpg" width="100%" height="100%">
</head>
<body>

<ul class="animatedunderlinemenu">
	<li><a href="http://www.dynamicdrive.com">Home</a></li>
	<li><a href="http://www.dynamicdrive.com/style/">Sobre</a></li>
	<li><a href="http://www.cssdrive.com">Produtos</a></li>
	<li><a href="http://www.javascriptkit.com">Serviços</a></li>
	<li><a href="http://www.cmsroundup.com">FAQ</a></li>
	<li><a href="http://www.cmsroundup.com">Contato</a></li>
	<li><a href="http://www.cmsroundup.com">Conta</a></li>
</ul>


<p>A InfoSet foi fundada no ano de 2016 com a união de dois sócios, com o intuito de abrange o comércio eletrônico online.
<br>
Além da variedade de produtos de alta qualidade, há uma ampla disponibilidade de entregas para diversos estados brasileiros, com 
obtenção de formas de pagamentos acessíveis aos clientes.
<br>
A empresa preza por agilidade, qualidade de atendimento, velocidade de entrega e respeito ao consumidor.</p>
<img src="img/so.jpg" witdh="500px" height="100px">
</body>
</html>

