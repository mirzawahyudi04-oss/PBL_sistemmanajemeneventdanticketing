<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steven.id - Ticketing System</title>
    <style>
        nav { background: #333; color: #fff; padding: 15px; }
        nav a { color: #fff; margin-right: 15px; text-decoration: none; }
        footer { background: #eee; padding: 10px; text-align: center; margin-top: 20px; }
    </style>
</head>
<body>

    <nav>
        <strong>Steven.id</strong>
        <a href="/home">Home</a>
        <a href="/product">Tiket</a>
        <a href="/dashboard">Dashboard</a>
        <a href="/login">Login</a>
    </nav>

    <div class="container" style="padding: 20px;">
        @yield('content')
    </div>

    <footer>
        <p>&copy; 2026 Steven.id - PBL Informatics Engineering</p>
    </footer>

</body>
</html>