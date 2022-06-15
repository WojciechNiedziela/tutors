<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szczegóły</title>
</head>
<body>
    <h1>LOGO</h1>
    <ul>
            <li>Imię i Nazwisko: {{ $tutor->name }} {{ $tutor->lastName }}</li>
            <li>Email: {{$tutor->email}}</li>
            <li>Numer telefonu: {{$tutor->phoneNumber}}</li>
            <li>Przedmiot: {{ $tutor->subject}}</li>
            <li>Ocena: {{ $tutor->grade}}</li>
            <li>Wykształcenie: {{ $tutor->education}}</li>
            <li>Doświadcznie: {{ $tutor->experience}}</li>

    </ul>
    <form action=" {{ route('tutors.update', ['id' => $tutor->id]) }}" method="get">
        <div>
            <button type='submit'>Zaktualizuj</button>
        </div>
    </form>

    <form action=" {{ route('tutors.destroy', ['id' => $tutor->id]) }}" method="post">
        <div>
            <button type='submit'>Usuń</button>
        </div>
    </form>
    <form action=" {{ route('tutors.sendEmail', ['id' => $tutor->id]) }}" method="get">
        <div>
            <button type='submit'>Wyślij email</button>
        </div>
    </form>
    <div class="nav">
            <a href="{{route('tutors.list')}}"> Powrót do strony głównej </a>
    </div>
</body>
</html>