<!DOCTYPE html>
<html>

<head>
	 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<title>MasterTec</title>

  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<!--Menu1-->

<body>

     <script src="script.js"></script>

     <nav class="navbar navbar-light" style="background-color: #023e8a;">

   <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="logo.png" width="200" height="60" >
    </a>
    
    <ul class="nav justify-content-end">
      <ul class="nav justify-content-center">
       <a href="login.php">
       <button type="button" class="btn btn-outline-secondary">Login</button>
       </a>
       <a href="cadastro.html">
        <button type="button" class="btn btn-primary">Cadastre-se</button>
       </a>
      </ul>
    </ul>
  </div>
</nav>
<nav class="navbar bg-dark">
<div id="carrinho">
   <a href="carrinho.html">
        <img src="carrinho.png" width=20%>
        <button type="button" class="btn-outline-success" style="text-align:right"> Meu carrinho</button>
       </a>
</nav>
</div>
</nav>

<!--Carrossel-->


  <div>

   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height: 500px; width: 100px;"src="https://s.zst.com.br/cms-assets/2020/11/perif-ricos.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Os Melhores Periféricos</h5>
      
      </div>
    </div>
    <div class="carousel-item">
      <img style="height: 500px; width: 700px;"src="https://i2.wp.com/techinter.com.br/wp-content/uploads/2013/02/PC-Gamer-vs-console.jpg?resize=800%2C500&ssl=1" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>As Melhores Plataformas</h5>
       
      </div>
    </div>
    <div class="carousel-item">
      <img style="height: 500px; width: 700px;" src="https://images.unsplash.com/photo-1493711662062-fa541adb3fc8?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8dmlkZW8lMjBnYW1lfGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Com Os Melhores Preços</h5>
        <p>Para Sua Diversão</p>

      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>

<!--Menu2-->
<div>
 <ul class="nav justify-content-center bg-dark">
  <li class="nav-item">
    <a href="index.html">
    <a class="nav-link active" aria-current="page" href="index.html">Home</a></a>
  </li>
  <li class="nav-item">
    <a href="https://www.kabum.com.br/celular-telefone/smartphones" target="_blank"
    <a class="nav-link" href="#">SMARTPHONES</a></a>
  </li>
  <li class="nav-item">
    <a href="https://www.kabum.com.br/gamer" target="_blank"
    <a class="nav-link" href="#">GAMER</a></a>
  </li>
  <li class="nav-item">
   <a href="https://www.kabum.com.br/computadores" target="_blank"
   <a class="nav-link" href="#">COMPUTADORES</a></a>
  </li>
  <li class="nav-item">
    <a href="https://www.kabum.com.br/hardware/placa-de-video-vga" target="_blank"
    <a class="nav-link" href="#">PLACAS DE VIDEO</a></a>
  </li>
  <li class="nav-item">
    <a href="https://www.kabum.com.br/perifericos/escritorio" target="_blank"
    <a class="nav-link" href="#">HOME OFFICE</a></a>
  </li>
  <li class="nav-item">
    <a href="https://www.americanas.com.br/categoria/games/playstation-4/jogos-ps4" target="_blank"
    <a class="nav-link" href="#">PS4/PS5</a></a>
  </li>
  <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
 </ul>
</div>

<div id="geral">
  
  <div>
    <br><br>
      <h1 id="categoria">GAMER</h1>
    <br>

      <!-- conteudo do site -->

      <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col" style="width: 18rem;">
            <div class="card h-100">
                <img width="286" height="190"  src="https://img.kalunga.com.br/fotosdeprodutos/315684z.jpg" class="card-img-top" alt="20%">
                <div class="card-body">
                  <h5 class="card-title">Cadeira Gamer preta BC3 67991 Thunderx3 PT 1 UN</h5>
                  <h6 style="font-size: 15px">De: R$ 2.015,56</h6>
                  <h6 style="font-size: 20px">R$ 1.814,40 à vista</h6>
                  <h6 style="font-size: 12px">Ou 10x de R$ 201,60</h6>
                  <br>
                  <a href="https://www.kalunga.com.br/prod/cadeira-gamer-preta-bc3-67991-thunderx3-pt-1-un/315684" target="_blank"
                  <a href="#" class="btn btn-primary">COMPRAR</a></a>
                </div>
            </div>
          </div><!-- fim coluna -->

          <div class="col" style="width: 18rem;">
            <div class="card h-100">
                <img width="286" height="190"  src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRj3ZmysCImVL0oJ38Id5T3bo_UKGu5hH9RbF0_Woifi4INWlJE-wDbPAbLWzLrxaaHMGTiOdOx114Ns5OOdWHmHavmsSYH4D6-257XpCIltbLq5_3CF0e44Q&usqp=CAE" class="card-img-top" alt="20%">
                <div class="card-body">
                  <h5 class="card-title">Console PlayStation 5 825GB SSD Branco - Sony</h5>
                  <h6 style="font-size: 20px">R$ 4.699,00 à vista</h6>
                  <h6 style="font-size: 12px">10x de R$ 469,90 sem juros</br>ou R$ 4.464,05 no boleto</h6>
                  <br>
                  <a href="https://www.infostore.com.br/console-playstation-5-sony.html" target="_blank" target="_blank"
                  <a href="#" class="btn btn-primary">COMPRAR</a></a>
                </div>
            </div>
          </div><!-- fim coluna -->

          <div class="col" style="width: 18rem;">
            <div class="card h-100">
                <img width="286" height="190"  src="https://images1.kabum.com.br/produtos/fotos/128561/console-microsoft-xbox-series-s-500gb-branco-rrs-00006_1601067301_gg.jpg" class="card-img-top" alt="20%">
                <div class="card-body">
                  <h5 class="card-title">Console Microsoft Xbox Series S, 512GB, Branco</h5>
                  <h6 style="font-size: 12px">R$ 2.799,89</br>Em 12x sem juros no cartão de R$ 233,32</h6>
                  <h6 style="font-size: 20px">R$ 2.659,90 à vista</h6>
                  <h6 style="font-size: 12px">no boleto ou pix com 5% de desconto.</h6>
                  <br>
                  <a href="https://www.kabum.com.br/produto/128561/console-microsoft-xbox-series-s-512gb-branco-rrs-00006" target="_blank"
                  <a href="#" class="btn btn-primary">COMPRAR</a></a>
                </div>
            </div>
          </div><!-- fim coluna -->

          <div class="col" style="width: 18rem;">
            <div class="card h-100">
                <img width="286" height="190"  src="https://images1.kabum.com.br/produtos/fotos/98091/98091_1534880178_index_gg.jpg" class="card-img-top" alt="20%">
                <div class="card-body">
                  <h5 class="card-title">Game Red Dead Redemption 2 PS4</h5>
                  <h6 style="font-size: 12px">R$ 189,37</br> Em 12x sem juros no cartão de R$ 15,78</h6>
                  <h6 style="font-size: 20px">R$ 179,90 à vista</h6>
                  <h6 style="font-size: 12px">no boleto ou pix com 5% de desconto.</h6>
                  <br>
                  <a href="https://www.kabum.com.br/produto/98091/game-red-dead-redemption-2-ps4" target="_blank">
                  <a href="#" class="btn btn-primary">COMPRAR</a></a>
                </div>
            </div>
          </div><!-- fim coluna -->
    </div>

    <div>
      <br><br>
       <h1 id="categoria">COMPUTADORES<H1>
       <br>
       <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col" style="width: 18rem;">
            <div class="card h-100">
                <img width="286" height="190"  src="https://images6.kabum.com.br/produtos/fotos/99866/monitor-lg-led-23-8-widescreen-full-hd-ips-hdmi-24mk430h_1547830365_gg.jpg" class="card-img-top" alt="20%">
                <div class="card-body">
                  <h5 class="card-title">Monitor LG LED 23.8´ Widescreen, Full HD, IPS, HDMI</h5>
                  <h6 style="font-size: 15px">R$ 1.066,56 Em 12x sem juros no cartão de R$ 88,88</h6>
                  <h6 style="font-size: 20px">R$ 959,90 à vista</h6>
                  <br>
                  <a href="https://www.kalunga.com.br/prod/cadeira-gamer-preta-bc3-67991-thunderx3-pt-1-un/315684" target="_blank"
                  <a href="#" class="btn btn-primary">COMPRAR</a></a>
                </div>
            </div>
          </div><!-- fim coluna -->

          <div class="col" style="width: 18rem;">
            <div class="card h-100">
                <img width="286" height="190"  src="https://images2.kabum.com.br/produtos/fotos/75742/75742_index_gg.jpg" class="card-img-top" alt="20%">
                <div class="card-body">
                  <h5 class="card-title">Cartucho de Tinta HP 664 Preto</h5>
                  <h6 style="font-size: 18px">R$ 49,89</h6>
                  <h6 style="font-size: 15px">Em 12x sem juros no cartão de R$ 4,16
                  <h6 style="font-size: 20px">R$ 44,90 à vista</h6>
                  <h6 style="font-size: 12px">no boleto ou pix com 10% de desconto.</h6>
                  <br>
                  <a href="https://www.kalunga.com.br/prod/cadeira-gamer-preta-bc3-67991-thunderx3-pt-1-un/315684" target="_blank"
                  <a href="#" class="btn btn-primary">COMPRAR</a></a>
                </div>
            </div>
          </div><!-- fim coluna -->

          <div class="col" style="width: 18rem;">
            <div class="card h-100">
                <img width="286" height="190"  src="https://images0.kabum.com.br/produtos/fotos/129120/notebook-acer-aspire-3-amd-ryzen-3-3250u-8gb-1tb-windows-10-home-15-6-a315-23-r6dj_1601905784_gg.jpg" class="card-img-top" alt="20%">
                <div class="card-body">
                  <h5 class="card-title">Notebook Acer Aspire 3 AMD Ryzen 3-3250U, 8GB, 1TB, Windows 10 Home, 15.6'</h5>
                  <h6 style="font-size: 18px">R$ 3.684,11</h6>
                  <h6 style="font-size: 15px">Em 12x sem juros no cartão de R$ 307,01</h6>
                  <h6 style="font-size: 20px">R$ 3.499,90 à vista</h6>
                  <h6 style="font-size: 12px">no boleto ou pix com 5% de desconto</h6>
                  <br>
                  <a href="https://www.kalunga.com.br/prod/cadeira-gamer-preta-bc3-67991-thunderx3-pt-1-un/315684" target="_blank"
                  <a href="#" class="btn btn-primary">COMPRAR</a></a>
                </div>
            </div>
          </div><!-- fim coluna -->

          <div class="col" style="width: 18rem;">
            <div class="card h-100">
                <img width="250" height="190"  src="https://images0.kabum.com.br/produtos/fotos/111960/monitor-gamer-acer-led-23-6-full-hd-hdmi-displayport-free-sync-165hz-0-5ms-inclinacao-ajustavel-preto-vermelho-kg241q-sbiip_1588007082_gg.jpg" alt="20%">
                <div class="card-body">
                  <h5 class="card-title">Monitor Gamer Acer LED 23.6´ Full HD, HDMI/DisplayPort, Free Sync, 165Hz, 0.5ms, Inclinação Ajustável, Preto/Vermelho</h5>
                  <h6 style="font-size: 15px">De R$ 1.688,78 por</h6>
                  <h6 style="font-size: 20px">R$ 1.499,89</h6>
                  <h6 style="font-size: 12px">Em 12x sem juros no cartão de R$ 124,99</br> Em 1x no cartão com 10% de desconto</h6>
                  <br>
                  <a href="https://www.kalunga.com.br/prod/cadeira-gamer-preta-bc3-67991-thunderx3-pt-1-un/315684" target="_blank"
                  <a href="#" class="btn btn-primary">COMPRAR</a></a>
                </div>
             </div>
         </div><!-- fim coluna -->
     </div> <!--fim da div de borda-->
    </div>
   </div>
  </div> <!--Fim da div central-->

<!--Fim de pagina-->

    <div id="fim">
      <ul class="nav justify-content-center" id="qs">
      <li>
       <a href="qs.html">
        <a class="nav-link active" aria-current="page" href="qs.html" id="qs">Quem somos
        </a>
       </a>

       <a href="contato.html">
        <a class="nav-link active" aria-current="page" href="contato.html" id="qs">Contate-nos
        </a>
       </a>
      </li>
    </ul>
    <p align="center"><h4>Formas de Pagamento</h4></center>

<img src ="https://cdn.awsli.com.br/740/740718/arquivos/logos-forma-pagamento.png" width="15%">

    </div>

    </div>  
  </body>
</html>
