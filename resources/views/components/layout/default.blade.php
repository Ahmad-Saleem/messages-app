<html>
    <head>
        <title>{{ $title ?? 'Messages App' }}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet" />
        @stack('scripts')
    </head>
    <body>
        <x-layout.header />
        <main>
            {{ $slot }}
        </main>
        <x-layout.footer />
    </body>
</html>