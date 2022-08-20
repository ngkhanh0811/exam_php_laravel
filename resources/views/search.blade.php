<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Book</title>
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
        .container #authorid, #bookid, #isbn, #status, #year{
            text-align: center;
        }
        tr:nth-child(even){
            background-color: #7abaff;
        }
        form, table{
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Searching book in library</h1>
    <form action="{{ route('search') }}" method="get">
        <label for="search">Enter Book Title</label>
        <input type="text" name="search" required/>
        <button type="submit">Search</button>
    </form>
    @if($books->isNotEmpty())
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author ID</th>
                <th>ISBN</th>
                <th>Publish Year</th>
                <th>Available</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td id="bookid">{{ $book->id }}</td>
                    <td id="title">{{ $book->title }}</td>
                    <td id="authorid">{{ $book->authorid }}</td>
                    <td id="isbn">{{ $book->ISBN }}</td>
                    <td id="year">{{ $book->year }}</td>
                    <td id="status">{{ $book->available }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <h2>No books found</h2>
    @endif
    <a class="back" href="/">Back To Home</a>
</div>
</body>
</html>
