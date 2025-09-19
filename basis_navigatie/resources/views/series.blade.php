<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Series | Basis Navigatie</title>
</head>
<body>
  <header>
    <h1>Basis Navigatie</h1>
    <nav>
      <a href="{{ route('home') }}">Home</a> |
      <a href="{{ route('movies') }}">Movies</a> |
      <a href="{{ route('series') }}">Series</a>
    </nav>
    <hr>
  </header>

  <main>
    <h2>Top 5 Series</h2>
    <ol>
      <li>Attack on Titan</li>
      <li>Arcane</li>
      <li>Serie 3</li>
      <li>Serie 4</li>
      <li>Serie 5</li>
    </ol>
  </main>
</body>
</html>
