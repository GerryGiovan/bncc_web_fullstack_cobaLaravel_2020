<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width==device-width, initial-scale=1.0">
        <title>Pertanyaan</title>
    </head>
    <body>
        <h3>List Pertanyaan</h3>
        <a href="/pertanyaan/create">
            <button>Enter New Question</button>
            <br><br>
        </a>
        <a href="/pertanyaan">Back</a>
        <ol>
            @foreach ($pertanyaans as $tanya)
                <li>
                    <b>{{$tanya->judul}}</b> <br>
                    ζζζζζζζζζζζζζζζζζζζ<br><br>
                    Pertanyaan: <br>
                    {{$tanya->isi}} <br>
                    <a href="{{url('/pertanyaan'). '/' . $tanya->id}}" >Show</a> &nbsp
                    <a href='/pertanyaan/{{$tanya->id}}/edit'>Edit</a> &nbsp
                    <a href="{{url('/pertanyaan/delete'). '/' . $tanya->id}}" >Delete</a>
                </li>
                <br><hr><br>
            @endforeach
        </ol>
    </body>
</html>
