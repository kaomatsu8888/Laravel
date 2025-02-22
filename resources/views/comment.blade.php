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
    <?php // なぜこのしたの部分は{{  }}がいらないのか ?>
    @if ( $greeting  === '朝のあいさつ')
        <p>おはようございます</p>
    @elseif ($greetin == '')

    @elseif ()

    @endif
</body>
</html>
