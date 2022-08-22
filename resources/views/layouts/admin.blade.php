<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin</title>

  <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
  <script src="{{ asset('./js/app.js') }}"></script>
</head>

<body>
  <div class="main-container">
    @include('partials.sidebar')

    <header>
      <nav class="nav">
        <h2 class="d-flex align-items-center gap-2">
          @yield('page_title')
        </h2>
      </nav>
    </header>

    <main class="p-3">
      <hr class="mt-2">

      <div class="main-scroll-container">
        @yield('page_content')
      </div>
    </main>
  </div>
</body>

</html>