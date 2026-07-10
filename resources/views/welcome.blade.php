<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Sistem Surat Tugas BPS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #007bff, #00b4d8);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
    }
    .login-card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      padding: 2rem 2.5rem;
      width: 100%;
      max-width: 400px;
    }
    .login-card h3 {
      font-weight: 600;
      color: #007bff;
    }
    .btn-primary {
      background: #007bff;
      border: none;
      transition: 0.3s;
    }
    .btn-primary:hover {
      background: #0056b3;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <div class="text-center mb-4">
      <img src="https://bps.go.id/favicon.ico" alt="BPS Logo" width="60">
      <h3 class="mt-3">Sistem Surat Tugas</h3>
      <p class="text-muted mb-0">Badan Pusat Statistik</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email Admin</label>
        <input type="email" name="email" id="email" class="form-control" required autofocus>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>

      @if(session('error'))
        <div class="alert alert-danger py-2">{{ session('error') }}</div>
      @endif

      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary">Masuk</button>
      </div>
    </form>
  </div>

</body>
</html>
