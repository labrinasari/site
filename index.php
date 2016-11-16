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
</style>
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

<h3>COISAS</h3>


</body>
</html>

