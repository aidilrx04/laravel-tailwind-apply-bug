<html>

<head>
    @vite('resources/css/app.css')
</head>

<body>

    <span class='text-red-500 font-bold'>This text is bold and red</span>
    <br>
    <span class="text-bold-red">This text will be bold and red</span>

    <style>
        /* @apply directive doesn't work here */
        .text-bold-red {
            @apply text-red-500 font-bold;
        }
    </style>
</body>

</html>
