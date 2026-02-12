<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    test

    @if ($number < 1000)
        小さい数字：{{ $number }}
    @else
        大きい数字：{{ $number }}
    @endif

    @foreach ($attendances as $date => $attendance)
        {{ $attendance->check_in ?? null }}

    @endforeach
</body>
</html>
