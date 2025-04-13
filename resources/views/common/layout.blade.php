<!DOCTYPE html>
<html lang="en">

<head>
    @include('common.headLink&Meta')
</head>

    <body>
        @include('common.header')
        <!-- Main Content -->
        <main class="py-4">
            @yield('content')
        </main>

        @include('common.footer')

        <!-- Bootstrap JS (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>