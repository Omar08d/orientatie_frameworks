<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Movies | Basis Navigatie</title>
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
    <h2>Top 5 Films</h2>
    <ol>
      <li>Film 1</li>
      <li>Film 2</li>
      <li>Film 3</li>
      <li>Film 4</li>
      <li>Film 5</li>
    </ol>
  </main>
</body>
</html>
