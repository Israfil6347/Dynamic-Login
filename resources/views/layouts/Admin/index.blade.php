<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<h1 class="text-3xl font-bold underline">
admin Hello world!
</h1>

<button>

<form method="POST" action="{{ route('logout') }}">
@csrf

<x-responsive-nav-link :href="route('logout')"
onclick="event.preventDefault();
this.closest('form').submit();">
{{ __('Log Out') }}
</x-responsive-nav-link>
</form>

</button>
</body>
</html>