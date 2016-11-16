<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: black;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #black}

.dropdown:hover .dropdown-content {
    display: block;
}
li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #00d0ff;
}
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
div.galer{
    text-align: center;
}
</style>
<img src="img/logoinfoset.png">
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#sobre">Sobre</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Produtos</a>
    <div class="dropdown-content">
      <a href="#">Notebook</a>
      <a href="#">Teclado</a>
      <a href="#">Mouse</a>
      <a href="#">Smartphone</a>
      <a href="#">TV/Tela</a>
      <a href="#">Console</a>
    </div>
  </li>
    <li><a href="#servicos">Serviços</a></li>
  <li><a href="#faq">FAQ</a></li>
  <li><a href="#contato">Contato</a></li>
  <li style="float:right"><a href="#conta">Conta</a></li>
  <li style="float:right"><a href="#carrinho">Carrinho</a></li>
</ul>

<center><h3>OFERTAS DO MÊS</h3></center>
<div class="galer">
<div class="img">
  <a target="_blank" href="img/xtrax.jpg">
 <img src='img/xtrax.jpg' width='500' height='500' onmouseover="this.src='img/xtraxop.jpg';" onmouseout="this.src='img/xtrax.jpg';" />
  </a>
</div>

<div class="img">
  <a target="_blank" href="img/zenf.jpg">
 <img src='img/zenf.jpg' width='500' height='500' onmouseover="this.src='img/zenfop.jpg';" onmouseout="this.src='img/zenf.jpg';" />
  </a>
</div>

<div class="img">
  <a target="_blank" href="img/nob.jpg">
 <img src='img/nob.jpg' width='500' height='500' onmouseover="this.src='img/nobop.jpg';" onmouseout="this.src='img/nob.jpg';" />
  </a>
</div>
</div>
</body>
</html>

CENTER IMGGGGGGG