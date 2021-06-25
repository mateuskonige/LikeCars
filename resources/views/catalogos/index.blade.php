<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LikeCars Seminovos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .columns-anuncios {
            display: grid;
            grid-gap: 0;
            grid-template-columns: repeat(auto-fill, minmax(20em, 1fr));
        }

    </style>
</head>

<body class="container  is-max-widescreen">
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


                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            Mais
                        </a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                Sobre nós
                            </a>
                            <a class="navbar-item">
                                Trabalhe conosco
                            </a>
                            <a class="navbar-item">
                                Contato
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                Reportar bug
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="{{ route('adicionar.index') }}">
                                <strong>Adicionar</strong>
                            </a>
                                <p><a class="button is-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Sair</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </p>
                           

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-body">
          <p class="title">
            Like Cars Seminovos
          </p>
          <p class="subtitle">
            Venda de automóveis seminovos <br> Cobrimos 100% Tabela Fipe!
          </p>
        </div>
      </section>



    <section class="section">

        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">Home</a></li>
                <li class="is-active"><a href="#" aria-current="page">Catálogo</a></li>
            </ul>
        </nav>

        <div class="columns-anuncios">

            @foreach ($catalogos as $item)
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="{{ url('storage/'.$item->path) }}"
                                alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            {{-- <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="{{ url('storage/'.$item->path) }}"
                                        alt="Placeholder image">
                                </figure>
                            </div> --}}
                            <div class="media-content">
                                <time datetime="2016-1-1">Postado em: {{ $item->created_at->toDateString() }}</time>

                                <p class="title is-5 is-uppercase">{{ $item->montadoraCarro }} {{ $item->nomeCarro }} {{ $item->anoCarro }} {{ $item->corCarro }}</p>
                            </div>
                        </div>

                        <div class="media-content">
                            {{ $item->descricaoCarro }} <br>
                            <p class="is-size-5">{{ $item->kmCarro }}km</p>
                        </div>

                    </div>
                    <footer class="card-footer">
                        <p class="card-footer-item  has-text-right">
                          <span class="title is-4">
                            R${{ $item->precoCarro }},00
                          </span>
                        </p>

                      </footer>
                </div>
            </div>

            @endforeach

            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://s2.glbimg.com/mYgwlPa7vtIiUk6kROUxJUi2yyo=/0x0:620x413/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2020/a/4/Ik8J1fQYirf6wYRvRJ8Q/2020-03-20-novo-tracker-1.jpg"
                                alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://s2.glbimg.com/mYgwlPa7vtIiUk6kROUxJUi2yyo=/0x0:620x413/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2020/a/4/Ik8J1fQYirf6wYRvRJ8Q/2020-03-20-novo-tracker-1.jpg"
                                        alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">Chevrolet Tracker COMPLETO</p>
                                <p class="subtitle is-6">@joca29891</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://quatrorodas.abril.com.br/wp-content/uploads/2020/03/dscf5856.dng_-e1588959378786.jpg?quality=70&strip=info"
                                alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://s2.glbimg.com/mYgwlPa7vtIiUk6kROUxJUi2yyo=/0x0:620x413/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2020/a/4/Ik8J1fQYirf6wYRvRJ8Q/2020-03-20-novo-tracker-1.jpg"
                                        alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">Chevrolet Onix COMPLETO</p>
                                <p class="subtitle is-6">@joca29891</p>
                            </div>
                        </div>
    
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                </div>
    
            </div>

        </div>
    </section>

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
