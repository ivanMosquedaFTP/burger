<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Burger Lynx</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div>
    <div class="container-fluid">
      <header>
        <div class="row">
          <div class="col-md-2">
            <img src="images/logo.svg" alt="logo de la empresa" class="img-thumbnail" width="50px" height="50px">
          </div>
          <div class="col-md-6">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="quienes.html">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="sucursales.html">Sucursales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contacto.html">Contacto</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
          <div class="col-md-2">
            perfil
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <img src="images/banner.png" alt="Bienvenido a lince burgers" class="img-fluid">
          </div>
        </div>
      </header>

      <nav>
        <nav class="navbar bg-dark border-bottom navbar-expand-lg border-body" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="promociones.html">Promociones</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="menu.html" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Menu
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="hamburguesa.html">Hamburguesas</a></li>
                    <li><a class="dropdown-item" href="ensaladas.html">Ensaladas</a></li>
                    <li><a class="dropdown-item" href="bebidas.html">Bebidas</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="paquetes.html">Paquetes</a></li>
                  </ul>
                </li>
                <!-- <li class="nav-item"> -->
                <!--   <a class="nav-link disabled" aria-disabled="true"></a> -->
                <!-- </li> -->
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Busca tu producto" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </nav>
      </nav>

      <main>
        <section>
          <div class="row">
            <div class="col-md-8">
              promocion 1
            </div>
            <div class="col-md-4">
              paquetes
            </div>
          </div>
        </section>
        <section>
          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-3">
              hamburguesa 1
            </div>
            <div class="col-md-3">
              hamburguesa 2
            </div>
            <div class="col-md-3">
              hamburguesa 3
            </div>
            <div class="col-md-2">
            </div>
          </div>

          <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-3">
              hamburguesa 4
            </div>
            <div class="col-md-3">
              hamburguesa 5
            </div>
            <div class="col-md-3">
              hamburguesa 6
            </div>
            <div class="col-md-2">
            </div>
          </div>
        </section>
      </main>

      <footer>
        <div class="row">
          <div class="col-md-6">
            menu inferior 1
          </div>
          <div class="col-md-6">
            datos de la empresa
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
