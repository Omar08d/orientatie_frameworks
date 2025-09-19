<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Home | Basis Navigatie</title>
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
    <h2>Welkom!</h2>
    <p>Kies een pagina via het menu hierboven.</p>
  </main>
</body>
</html>
