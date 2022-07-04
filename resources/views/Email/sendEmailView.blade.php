<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <div class="container">
        <h3>Wyślij wiadomość do {{ $name }}</h3>
        <form action="{{ route('sendEmail') }}">

            <input type="text" name="name" id="name" value="{{ $name }}" hidden>
            <input type="text" name="email" id="email" value="{{ $email }} " hidden>
            <div>
                <label for="username">Nazwa użytkownika: </label>
                <input type="text" name="username" id="username" style="margin-top:10px">
            </div>
            <div>
                <label for="title">Tytuł wiadomości: </label>
                <input type="text" name="title" id="title" style="margin-top:10px">
            </div>
            <div>
                <label for="message">Treść: </label>
                <input type="text" name="message" id="message" style="width: 300px; height:100px; margin-top:10px">
            </div>
            <div>
                <button type="submit" style="margin-top:10px">Wyślij</button>
            </div>
        </form>
    </div>

</body>
</html>