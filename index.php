<!DOCTYPE html>
  <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/responsive.css">
        <style>@import url('https://fonts.googleapis.com/css?family=Jura');</style>
        <title> Mirror Fashion </title>
    </head>

    <body>

        <?php
          include 'header.php';
         ?>

        <div class="top-container"> <!-- BODY´S TOP CONTAINER - SEARCH - DEPARTMENT - BANNER -->

                <section class="search-section"> <!-- SEARCH SECTION -->

                    <h2>Busca</h2>
                    <form class="search-form">
                        <input type="search" name="search" value="Pesquise...">
                        <input type="image" name="search-img" class="lupa" src="img/busca.png">
                    </form>

              </section> <!-- END OF SEARCH SECTION -->

              <section class="department-section"> <!-- DEPARTMENT SECTION -->

                  <h2> Departamentos </h2>

                  <nav class="vertical-menu">
                  <ul>
                    <li class="blusas"><a href="#"> Blusas </a>
                        <ul class="sub-menu-blusas">
                            <li><a href="#"> Femininas </a></li>
                            <li><a href="#"> Masculinas </a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Camisas </a></li>
                    <li><a href="#"> Jeans </a></li>
                    <li><a href="#"> Acessórios </a></li>
                    <li><a href="#"> Sapatos </a></li>
                  </ul>
                </nav>

              </section> <!-- END OF DEPARTMENT SECTION -->

            <img src="img/destaque-home.png" alt="Foto de modelo vestindo artigos Mirror Fashion" class="banner-img">
        </div> <!-- END OF BODY´S TOP CONTAINER - SEARCH - DEPARTMENT - BANNER -->

        <div class="bottom-container"> <!-- BODY´S BOTTOM CONTAINER - NOVIDADES - MAIS VENDIDOS -->

                <section class="novidades"> <!-- NOVIDADES SECTION -->
                      <h2> Novidades </h2>
                      <ul>
                        <li><a href="produtos.php">
                          <figure>
                            <img src="img/produtos/miniatura1.png" alt="Produto Mirror Fashion">
                            <figcaption> Por somente R$100 </figcaption>
                          </figure>
                        </a></li>

                        <li><a href="produtos.php">
                          <figure>
                            <img src="img/produtos/miniatura2.png" alt="Produto Mirror Fashion">
                            <figcaption> Por somente R$100 </figcaption>
                          </figure>
                        </a></li>

                        <li><a href="produtos.php">
                          <figure>
                            <img src="img/produtos/miniatura3.png" alt="Produto Mirror Fashion">
                            <figcaption> Por somente R$100 </figcaption>
                          </figure>
                        </a></li>

                        <li><a href="produtos.php">
                          <figure>
                            <img src="img/produtos/miniatura4.png" alt="Produto Mirror Fashion">
                            <figcaption> Por somente R$100 </figcaption>
                          </figure>
                          </a></li>

                        <li><a href="produtos.php">
                          <figure>
                            <img src="img/produtos/miniatura5.png" alt="Produto Mirror Fashion">
                            <figcaption> Por somente R$100 </figcaption>
                          </figure>
                        </a></li>

                        <li><a href="produtos.php">
                          <figure>
                            <img src="img/produtos/miniatura6.png" alt="Produto Mirror Fashion">
                            <figcaption> Por somente R$100 </figcaption>
                          </figure>
                          </a></li>
                      </ul>
                </section> <!-- END OF NOVIDADES SECTION -->

                <section class="mais-vendidos"> <!-- MAIS VENDIDOS SECTION -->
                  <h2> Mais Vendidos </h2>
                  <ol>
                    <li><a href="produtos.php">
                      <figure>
                      <img src="img/produtos/miniatura1.png" alt="Produto Mirror Fashion">
                      <figcaption> Por somente R$100 </figcaption>
                    </figure>
                    </a></li>

                    <li><a href="produtos.php">
                      <figure>
                        <img src="img/produtos/miniatura2.png" alt="Produto Mirror Fashion">
                        <figcaption> Por somente R$100 </figcaption>
                    </figure>
                    </a></li>

                    <li><a href="produtos.php">
                      <figure>
                        <img src="img/produtos/miniatura3.png" alt="Produto Mirror Fashion">
                        <figcaption> Por somente R$100 </figcaption>
                    </figure>
                    </a></li>

                    <li><a href="produtos.php">
                      <figure>
                        <img src="img/produtos/miniatura4.png" alt="Produto Mirror Fashion">
                        <figcaption> Por somente R$100 </figcaption>
                      </figure>
                      </a></li>

                    <li><a href="produtos.php">
                      <figure>
                        <img src="img/produtos/miniatura5.png" alt="Produto Mirror Fashion">
                        <figcaption> Por somente R$100 </figcaption>
                        </figure>
                    </a></li>

                    <li><a href="produtos.php">
                      <figure>
                        <img src="img/produtos/miniatura6.png" alt="Produto Mirror Fashion">
                        <figcaption> Por somente R$100 </figcaption>
                      </figure>
                      </a></li>
                  </ol>
                </section> <!-- MAIS VENDIDOS SECTION -->


        </div><!-- END OF BODY´S BOTTOM CONTAINER - NOVIDADES - MAIS VENDIDOS -->

        <?php
          include 'footer.php';
         ?>

    </body>
  </html>
