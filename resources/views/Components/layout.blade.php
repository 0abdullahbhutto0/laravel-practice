<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Welcome</title>
</head>

<body>
    <div class="nav m-4 border-0 flex justify-around rounded-md px-3 py-2 bg-blue-100">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/jobs" :active="request()->is('jobs')" >About</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </div>

<div class="m-2 flex justify-between">
    <div class="text-3xl">
        {{ $heading }}
    </div>
    <x-button href="jobs/create">Create a Job</x-button>
</div>
<div class="m-2">
    {{ $slot }}
</div>

</body>

</html>
