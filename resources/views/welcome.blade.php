<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <livewire:styles />
    </head>
    <body class="antialiased">

    <h2>Livewire Example</h2>
    <livewire:counter />
    <livewire:scripts />
    </body>
</html>
