<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update samochodu</title>
</head>
<body>
    <h1>LOGO</h1>   
    
    <div class="nav">
            <a href="{{route('tutors.list')}}"> Powrót do strony głównej </a>
    </div>
    <br>

    <div class="container">
        <form action=" {{ route('tutors.update', ['id' => $tutor->id]) }}" method="post">
        <div>
            <label for="">Imię</label>
            <input type="text" name="name" id="name" value = " {{ $tutor-> name}}">
        </div>
        <div>
            <label for="">Nazwisko</label>
            <input type="text" name="lastName" id="lastName" value = " {{ $tutor-> lastName}}">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" id="email" value = " {{ $tutor-> email}}">
        </div>  
        <div>
            <label for="">Numer telefonu</label>
            <input type="text" name="phoneNumber" id="phoneNumber" value = " {{ $tutor-> phoneNumber}}">
        </div>
        <div>
            <label for="">Przedmiot</label>
            <input type="text" name="subject" id="subject" value = " {{ $tutor-> subject}}">
        </div>
        <div>
            <label for="">Wykształcenie</label>
            <input type="text" name="education" id="education" value = " {{ $tutor-> education}}">
        </div>
        <div>
            <label for="">Doświadczenie</label>
            <input type="text" name="experience" id="experience" value = " {{ $tutor-> experience}}">
        </div>
        </div>
        <div>
            <button type='submit'>Zaktualizuj</button>
        </div>
        </form>
        
    </div>
</body>
</html>