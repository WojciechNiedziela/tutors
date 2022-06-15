<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj korepytetora</title>
</head>
<body>
<h1>LOGO</h1>   
<div class="container">
        <form action=" {{ route('create') }}" method="post">
        <div>
            <label for="">Imię</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="">Nazwisko</label>
            <input type="text" name="lastName" id="lastName">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" id="email">
        </div>  
        <div>
            <label for="">Numer telefonu</label>
            <input type="text" name="phoneNumber" id="phoneNumber">
        </div>
        <div>
            <label for="">Przedmiot</label>
            <input type="text" name="subject" id="subject">
        </div>
        <div>
            <label for="">Ocena</label>
            <input type="text" name="grade" id="grade">
        </div>
        <div>
            <label for="">Wykształcenie</label>
            <input type="text" name="education" id="education">
        </div>
        <div>
            <label for="">Doświadczenie</label>
            <input type="text" name="experience" id="experience">
        </div>
        <div>
            <button type='submit'>Dodaj</button>
        </div>
        </form>
        <div class="nav">
            <a href="{{route('list')}}"> Powrót do strony głównej </a>
        </div>
    </div>
</body>
</html>