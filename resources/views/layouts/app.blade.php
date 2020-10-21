<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <style type="text/css">
        [v-cloak] {display: none}
    </style>
</head>
<body>
<div id="app" v-cloak>
    <v-app>
        <v-app-bar app dark>
            <v-toolbar-title>
                {{ config('app.name') }}
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn class="ml-2" href="/" text>
                Home
            </v-btn>
            <v-btn href="/about" text>
                About
            </v-btn>
        </v-app-bar>

        <v-main>
            <v-container>
                @yield('content')
            </v-container>
        </v-main>

        <v-footer app>
            <span>{{ config('app.name') }}</span>
            <v-spacer></v-spacer>
            <span>&copy; {{ now()->format('Y') }}</span>
        </v-footer>
    </v-app>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
