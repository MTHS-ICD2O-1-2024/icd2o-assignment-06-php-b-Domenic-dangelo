<!DOCTYPE html>
<!-- ICS2O-Unit6-assigment-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Pokemon API, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="domenic dangelo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-amber.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Pokemon API, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Pokemon API, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/download.jpeg" alt="pokedex" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          //input
          $url = "https://pokeapi.co/api/v2/pokemon?limit=151&offset=0";
          $json = @file_get_contents($url);
          $data = json_decode($json, true);

          // process
          $pokemonList = $data['results'];
          $randomIndex = rand(0, count($pokemonList) - 1);
          $randomPokemon = $pokemonList[$randomIndex];

          if ($json === FALSE) {
            return "Sorry, there is an error at this moment.";
          }
          ?>
          <div class="page-content-answer">
            <a href="./index.php">Return</a>
          </div>
        </div>
    </main>
  </div>
</body>

</html>