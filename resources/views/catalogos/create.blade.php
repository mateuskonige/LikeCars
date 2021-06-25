<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LikeCars Seminovos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    <style>
        .columns-anuncios {
            display: grid;
            grid-gap: 0;
            grid-template-columns: repeat(auto-fill, minmax(20em, 1fr));
        }

    </style>
</head>

<body>
    <header class="section">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item">
                    <p>LikeCars Seminovos</p> 
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item">
                        Home
                    </a>

                    <a class="navbar-item">
                        Documentation
                    </a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            More
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                About
                            </a>
                            <a class="navbar-item">
                                Jobs
                            </a>
                            <a class="navbar-item">
                                Contact
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Report an issue
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="box">
        <form action="{{ route('catalogos.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label class="label" for="montadoraCarro" >Montadora</label>
                <div class="control">
                  <input class="input" type="text" placeholder="ex.: Ford / Fiat" name="montadoraCarro" id="montadoraCarro" required>
                </div>
              </div>

            <div class="field">
                <label class="label" for="nomeCarro" >Nome</label>
                <div class="control">
                  <input class="input" type="text" placeholder="ex.: Tracker / Argo" name="nomeCarro" id="nomeCarro" required>
                </div>
              </div>

              <div class="field">
                <label class="label" for="corCarro">Cor</label>
                <div class="control">
                  <input class="input" type="text" placeholder="ex.: Branco / Vermelho" name="corCarro" id="corCarro" required>
                </div>
              </div>

              <div class="field">
                <label class="label" for="anoCarro">Ano</label>
                <div class="control">
                  <input class="input" type="number" placeholder="ex.: 2010" name="anoCarro" id="anoCarro" required>
                </div>
              </div>

              <div class="field">
                <label class="label" for="descricaoCarro">Descrição</label>
                <div class="control">
                  <input class="input" type="text" placeholder="ex.: Compleoto, ar condicionado funcionando, poucos detalhes" name="descricaoCarro" id="descricaoCarro" required>
                </div>
              </div>
  
              <div class="field">
                <label class="label" for="precoCarro">Preço de venda</label>
                <div class="control">
                  <input class="input" type="number" placeholder="ex.: 49999" name="precoCarro" id="precoCarro" required>
                </div>
              </div>

              <div class="field">
                <label class="label" for="kmCarro">Kmetragem</label>
                <div class="control">
                  <input class="input" type="number" placeholder="ex.: 130000" name="kmCarro" id="kmCarro" required>
                </div>
              </div>


              <div class="file">
                <label class="file-label">
                  <input class="file-input" type="file" name="thumbnail">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">Escolha uma foto</span>
                  </span>
                </label>
              </div>

              <div class="field is-grouped">
                <div class="control">
                  <button class="button is-link" type="submit">Enviar</button>
                </div>
              </div>
        </form>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {

            // Get all "navbar-burger" elements
            const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(el => {
                    el.addEventListener('click', () => {

                        // Get the target from the "data-target" attribute
                        const target = el.dataset.target;
                        const $target = document.getElementById(target);

                        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                        el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');

                    });
                });
            }

        });
    </script>
</body>

</html>
