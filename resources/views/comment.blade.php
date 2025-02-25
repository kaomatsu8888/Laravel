<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $greeting }}</h1>
    <?php var_dump($greeting); ?>
    <?php // なぜこのしたの部分は{{  }}がいらないのか ?>
    @if ( $greeting  === '朝のあいさつ')
        <p>おはようございます</p>
    @elseif ($greeting === '昼のあいさつ')
        <p>こんにちは
    @elseif ($greeting === '夕方のあいさつ')
        <p>こんばんは
    @elseif ($greeting === '夜のあいさつ')
        <p>おやすみ</p>
    @endif
</body>
</html>
