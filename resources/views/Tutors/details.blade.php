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
            <li>Imię: {{$tutor->name}}</li>
            <li>Nazwisko: {{$tutor->lastName}}</li>
            <li>Email: {{$tutor->email}}</li>
            <li>Numer telefonu: {{$tutor->phoneNumber}}</li>
            <li>Przedmiot: {{ $tutor->subject}}</li>
            <li>Ocena: {{ $tutor->grade}}</li>
            <li>Wykształcenie: {{ $tutor->education}}</li>
            <li>Doświadcznie: {{ $tutor->experience}}</li>

    </ul>
</body>
</html>