<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Jumlah Penduduk Kota Pontianak</title>
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])

  <style>
    body {
      background-color: #f8f9fa;
    }

    h2 {
      font-family: 'Poppins', sans-serif;
      letter-spacing: 0.5px;
    }

    .table th {
      font-weight: 600;
    }


    .container-custom {
      width: 90%;
      margin: 40px auto;
      background: #fff;
      padding: 25px 30px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .container-custom+.container-custom {
      margin-top: 50px;
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .table thead {
      background-color: #f1f1f1;
    }

    .btn {
      padding: 4px 10px;
      font-size: 0.9rem;
    }

    .form-footer {
      display: flex;
      justify-content: flex-end;
      margin-top: 10px;
    }
  </style>
</head>

<body class="bg-light p-4">
  <div class="container">
    @yield('content')
  </div>
  @stack('scripts')
</body>

</html>