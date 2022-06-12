<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyślij email</title>
</head>
<body>
<div class="container">
        <form action=" {{ route('sendEmail', ['id' => $tutor->id]) }}" method="get">
        <div>
            <label for="">Odbiorca</label>
            <input type="text" name="name" id="name" value = " {{ $tutor-> name}}" readonly>
        </div>
        <div>
            <label for="">Nadawca</label>
            <input type="text" name="EMAIL NADAWCY" id="EMAIL NADAWCY" value = "">
        </div>
        <div>
            <label for="">Temat</label>
            <input type="text" name="TEMAT MAILA" id="TEMAT MAILA" value = "">
        </div>  
        <div>
            <label for="">Treść</label>
            <input type="text" name="TREŚĆ MAILA" id="TREŚĆ MAILA" value = "">
        </div>
        <div>
            <button type='submit'>Wyślij</button>
        </div>
        </form>
    </div>
</body>
</html>