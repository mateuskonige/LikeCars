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


<div class="box">
    <form action="{{ route('adicionar.store') }}" method="post" enctype="multipart/form-data">
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


          <div class="box is-shadowless file is-centered">
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
              <button class="button is-success" type="submit">Enviar</button>
              <a class="button is-danger" href="{{ route('catalogos.index') }}">Cancelar</a>
            </div>
          </div>
    </form>

</div>
  
</body>
</html>