<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="{{url("/pertanyaan")}}" method="post">
            @csrf
            <p>Input ID User</p>
            <input type="text" name="id" value="" placeholder="Input Id" required>
            <p>Input Title</p>
            <input type="text" name="title" value="" placeholder="Input Title" required>
            <p>Input Question</p>
            <input type="text" name="question" value="" placeholder="Input Question" required>
            <br><br>
            <input type="submit" name="Submit" value="Submit">
        </form>
    </body>
</html>
