<!DOCTYPE html>
<html>
<head>
    <title>Halaman Error</title>
</head>
<body>

    <h1>Halo, {{ nama }}!</h1> <!-- ERROR: Variabel tidak didefinisikan -->

    @if ($user->role == 'admin') <!-- ERROR: Variabel $user mungkin tidak ada -->
        <p>Selamat datang, Admin!</p>
    @else
        <p>Anda bukan admin.</p>
    @endif

    <ul>
        @foreach ($items as $item) <!-- ERROR: Variabel $items tidak didefinisikan -->
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    @include('partials.footer') <!-- ERROR: File `partials.footer` mungkin tidak ada -->

</body>
</html>
