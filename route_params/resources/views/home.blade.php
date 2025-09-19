<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Categorieën</h1>
    <ul>
        <li><a href="{{ url('/categories/tablets/products') }}">Tablets</a></li>
        <li><a href="{{ url('/categories/laptops/products') }}">Laptops</a></li>
        <li><a href="{{ url('/categories/desktops/products') }}">Desktops</a></li>
        <li><a href="{{ url('/categories/smartphones/products') }}">Smartphones</a></li>
    </ul>
</body>
</html>
