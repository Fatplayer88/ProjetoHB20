<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifa HB20</title>

    <link rel="stylesheet" href="css/produtos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/> 
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">

</head>
<body>
    <header class="cabecalho">
        <div>
            <a href="loguin.php">
                <i class="fa-regular fa-user" style="color: #ffffff;"></i>
            </a>
        </div>
    </header>
    <main>
        <section class="fundo-azul-carrosel">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/CARROSEL/db7987f74b82ffc3b1dc38b22c4778c3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/CARROSEL/supra.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/CARROSEL/Toyota-Supra-GRMN-730x410.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <div class="parte-branca-descricao-produto">
                <div>
                    <h2>NOME DO PRODUTO</h2>
                    <p class="pisca-pisca">Corra que está acabando!!</p>
                </div>
                <div>
                    <h2>Por Apenas:</h2>
                    <button>R$ 0,00</button>
                </div>
              </div>
        </section>
        
        <section class="fundo-azul-segundaParte">
            <div>
                <h1>COTAS</h1>
                <h2>Escolha a sua sorte!</h2>
            </div>

            <div class="parte-branca-escolha-cotas">

                <div class="cotas">
                    <p>Selecione a quantidade de números</p>
                    <button id="Mais100">Selecione +100</button>
                    <button id="Mais200">Selecione +200</button>
                    <button id="Mais300">Selecione +300</button>
                    <button id="Mais400">Selecione +400</button>
                    
                    <div class="flex-input-but">
                      <button id="buttonMines"> - </button>
                      <input type="text" id="receba" oninput="this.value=this.value.replace(/\D/g,'')">
                      <button id="buttonAdd"> + </button>
                    </div>
                </div>

                <div class="bt-comprar">
                    <button>
                        <p><i class="fa-solid fa-check" style="color: #04ff00;"></i>
                        Participar do Sorteio</p><br>
                        <a href="">R$ 100,00</a>
                    </button>
                </div>
            </div>
        </section>
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js">
    </script>
    <script src="js/produtos.js"></script>
    

</body>
</html>