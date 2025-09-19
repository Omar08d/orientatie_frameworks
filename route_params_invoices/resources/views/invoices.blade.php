<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Offertes</title>
</head>
<body>
    <h1>Offertes</h1>
    <ul>
        @foreach ($offertes as $offerte)
            <li>
                <a href="{{ url('/offertes/' . $offerte['offertenummer']) }}">
                    {{ $offerte['offertenummer'] }} - {{ $offerte['klant'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
