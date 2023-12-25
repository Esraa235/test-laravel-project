
<!-- resources/views/layouts/app.blade.php-->
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>@yield('title')</title>
</head>
        <body>
        <header>
        <!-- Common header content goes here -->
        </header>
        <div class="content">
        @yield('content')
        </div>
        <footer>
        <!-- Common footer content goes here -->
        </footer>
        </body>
</html