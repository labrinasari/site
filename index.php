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
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    width: 180px;
    float: left;
    text-align: center;
    display: block;
    margin: 0 auto;
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
.body{
    background-color:black;
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

<center><h3>OFERTAS DO MÊS</h3></center>
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
<div class="img">
  <a target="_blank" href="img/nob.jpg">
 <img src='img/nob.jpg' width='500' height='500' onmouseover="this.src='img/nobop.jpg';" onmouseout="this.src='img/nob.jpg';" />
  </a>
</div>
<div class="img">
  <a target="_blank" href="img/nob.jpg">
 <img src='img/nob.jpg' width='500' height='500' onmouseover="this.src='img/nobop.jpg';" onmouseout="this.src='img/nob.jpg';" />
  </a>
</div>
<div class="img">
  <a target="_blank" href="img/nob.jpg">
 <img src='img/nob.jpg' width='500' height='500' onmouseover="this.src='img/nobop.jpg';" onmouseout="this.src='img/nob.jpg';" />
  </a>
</div>
<div class="img">
  <a target="_blank" href="img/nob.jpg">
 <img src='img/nob.jpg' width='500' height='500' onmouseover="this.src='img/nobop.jpg';" onmouseout="this.src='img/nob.jpg';" />
  </a>
</div>
<div class="img">
  <a target="_blank" href="img/nob.jpg">
 <img src='img/nob.jpg' width='500' height='500' onmouseover="this.src='img/nobop.jpg';" onmouseout="this.src='img/nob.jpg';" />
  </a>
</div>
<div class="img">
  <a target="_blank" href="img/nob.jpg">
 <img src='img/nob.jpg' width='500' height='500' onmouseover="this.src='img/nobop.jpg';" onmouseout="this.src='img/nob.jpg';" />
  </a>
</div>
</body>
</html>

