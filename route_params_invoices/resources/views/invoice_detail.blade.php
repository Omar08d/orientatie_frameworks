<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Offerte detail</title>
</head>
<body>
    <h1>Offerte detail</h1>
    <p><strong>Offertenummer:</strong> {{ $offerte['offertenummer'] }}</p>
    <p><strong>Klant:</strong> {{ $offerte['klant'] }}</p>
    <p><strong>Bedrag:</strong> €{{ number_format($offerte['bedrag'], 2, ',', '.') }}</p>

    <p><a href="{{ url('/') }}">← Terug naar offertes</a></p>
</body>
</html>
