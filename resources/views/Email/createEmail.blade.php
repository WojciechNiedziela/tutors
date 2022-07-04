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
        <div>
            <h3>Wyślij wiadomość do {{ $name }}</h3>
            <form action=" {{ route('sendEmail' }}">
                <input type="text" name="email" id="email" value="{{ $email }} hidden">
                <div>
                    <label for="username">Nazwa użytkownika</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="title">Tytuł</label>
                    <input type="text" name="title" id="title">
                </div>
                <div>
                    <label for="mesagge">Treść</label>
                    <input type="text" name="mesagge" id="mesagge">
                </div>
                <button type="submit">
                    Wyślij
                </button>
            </form>
        </div>
        
    </div>
</body>
</html>