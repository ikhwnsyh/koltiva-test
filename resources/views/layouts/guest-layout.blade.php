<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex items-center justify-center min-h-screen font-sans antialiased tracking-tighter bg-gray-50/50">
        <div class="w-full p-4 lg:w-1/3">
            <div class="p-6 bg-white border shadow-sm rounded-2xl">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
