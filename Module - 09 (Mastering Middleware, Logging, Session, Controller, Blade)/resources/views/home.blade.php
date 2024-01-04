<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>{{ $msg }}</h1> --}}
    {{-- <h2>{{ $result }}</h2> --}}
    @if( $result == 100 )
        <h1>Result is Hundred</h1>
    @elseif( $result == 1000 )
        <h1>Result is Thousand</h1>
    @elseif( $result == 100000 )
        <h1>Result is Lac</h1>  
    @else
        <h1>Result is not in our range</h1>
    @endif
</body>
</html>