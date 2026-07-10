<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun - Sistem Surat Tugas BPS</title>
  <style>
    body {
      background: linear-gradient(135deg, #0077b6, #00b4d8);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Poppins', sans-serif;
    }
    .register-container {
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }
    input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 10px;
      border: 1px solid #ccc;
      font-size: 15px;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #0077b6;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
    }
    button:hover { background: #023e8a; }
  </style>
</head>
<body>
  <div class="register-container">
    <h2 style="color:#023e8a; margin-bottom:20px;">Buat Akun Baru</h2>

    <form action="{{ route('register.process') }}" method="POST">
      @csrf
      @if(session('error'))
        <div style="color:red; margin-bottom:10px;">{{ session('error') }}</div>
      @endif
      @if(session('success'))
        <div style="color:green; margin-bottom:10px;">{{ session('success') }}</div>
      @endif

      <input type="text" name="nama" placeholder="Nama Lengkap" required>
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Daftar</button>
    </form>

    <p style="margin-top:15px;">
      Sudah punya akun? 
      <a href="{{ route('login') }}" style="color:#0077b6; text-decoration:none;">Masuk di sini</a>
    </p>
  </div>
</body>
</html>
