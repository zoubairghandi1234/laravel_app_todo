<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container">
            <h2>Todo List</h2>
            <div class="input">
                <form action="{{ route('saveItem') }}" method="POST" accept-charset="UTF-8">
                    @csrf
                    <input type="text" name="listItem">
                    <button type="submit">Add</button>
                </form>               
            </div>
            <div class="list">
                @foreach ($listItem as $item)
                    <div class="item">
                        <p>{{ $item->name }}</p>
                        <form action="{{ route('markComplate', $item->id) }}" method="POST" accept-charset="UTF-8">
                            @csrf
                            <button type="submit">complete</button>
                        </form>
                    </div>    
                @endforeach
            </div>
        </div>
    </body>
</html>
