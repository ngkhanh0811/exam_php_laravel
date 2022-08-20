<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <style>
        table{
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
        }
        table tr, td, th{
            border: 1px solid black;
            line-height: 1.4em;
        }
        .container{
            padding: 5em 30em;
        }
        #authorid, #bookid, #isbn, #status, #year{
            text-align: center;
        }
        tr:nth-child(even){
            background-color: #7abaff;
        }
        button{
            margin-bottom: 1em;
        }
    </style>
<body>
<div class="container">
    <h1>List book in my Library</h1>
    <a href="/search"><button>Search book in library</button></a>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author ID</th>
        <th>ISBN</th>
        <th>Year</th>
        <th>Available</th>
    </tr>

@foreach($book as $book)
    <tr>
        <td id="bookid">{{$book->id}}</td>
        <td id="title">{{$book->title}}</td>
        <td id="authorid">{{$book->authorid}}</td>
        <td id="isbn">{{$book->ISBN}}</td>
        <td id="year">{{$book->year}}</td>
        <td id="status">{{$book->available}}</td>
    </tr>
    @endforeach
    </table>
</div>
    </body>
    </html>
