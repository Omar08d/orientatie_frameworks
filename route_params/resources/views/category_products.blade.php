<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Categorie producten</title>
</head>
<body>
    <h1>Producten voor categorie: {{ $category }}</h1>
    <p>Hier zouden alle producten van de categorie "{{ $category }}" getoond worden.</p>

    <p><a href="{{ url('/') }}">← Terug naar categorieën</a></p>
</body>
</html>
