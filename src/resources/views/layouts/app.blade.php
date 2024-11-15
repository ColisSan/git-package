<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" id='git-package-body'>
        <div id="git-package-app">
            @yield('content')
        </div>
    </body>
<script src="/vendor/git-package/app.js"></script>
<script>
    let spokeOnce = false;
    function speak (text) {
        console.log(text);
        let speechUtterance = new window.SpeechSynthesisUtterance();
        speechUtterance.text = text;
        window.speechSynthesis.speak(speechUtterance)
        console.log("TU");
    }
    let element = document.getElementById('git-package-body');
    element.addEventListener('mousemove', function (event) {
        console.log(spokeOnce);
        if(spokeOnce){
            return;
        }
        spokeOnce = true;
        speak('Welcome to ZharTar');
    });
</script>
</html>
