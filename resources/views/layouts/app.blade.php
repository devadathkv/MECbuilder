<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResumeGenius - AI-Powered Resume Builder</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<!-- Trix Editor CSS -->
<link rel="stylesheet" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
@stack('styles')

<body>
    <div class="page-container">
        <!-- Header/Navigation -->

        @include('partials.navbar')
        <div class="nav-spacer"></div>

       <main>
         @yield('content')
       </main>

        <!-- Footer -->
        @include('partials.footer')
    </div>
    <script src="script.js"></script>
     <script src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</body>
</html>