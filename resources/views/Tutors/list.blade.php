<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korepetytorzy</title>
</head>
<body>
    <h1>LOGO</h1>   
    
    <div class="filtrs">
        <form action="{{ route('tutors.list') }}" method="get">
            <div style="display: inline-block; margin:10px;">   
                <label for="subject">Przedmiot:</label>
                    <select name="subject" id="subject">
	                    <option value="">--- Wybierz Przdemiot ---</option>
	                    <option value="Angielski">Angielski</option>
	                    <option value="Hiszpański">Hiszpański</option>
	                    <option value="Niemiecki">Niemiecki</option>
                    </select>

            </div>
            <div style="display: inline-block; margin:10px;">
                <label for="name">Imię i nazwisko</label>
                    <input type="text" name="name" id="name">
            </div>
            <div>
                <button type="submit">Filtruj</button>
            </div>
        </form>
    </div>

    <form action="{{ route('tutors.create') }}" method="get">
            <div>
                <button type="submit">Dodaj korepytetora</button>
            </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>Lp.</th>
                <th>Imię i nazwisko</th>
                <th>Przdemiot</th>
                <th>Ocena</th>
                <th>Szczegóły</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tutors as $tutor)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $tutor->name }} {{ $tutor->lastName }}</td>
                <td>{{ $tutor->subject }}</td>
                <td>{{ $tutor->grade }}</td>
                <td> <a href="{{ route('tutors.show', ['id' => $tutor->id]) }}"> Szczegóły </a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>