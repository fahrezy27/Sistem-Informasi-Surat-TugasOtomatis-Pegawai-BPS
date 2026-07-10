<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Sistem Surat Tugas BPS</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #0077b6, #00b4d8);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .login-container {
      background: #fff;
      padding: 50px 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
      text-align: center;
      animation: fadeIn 0.8s ease;
    }

    .logo-bps {
      width: 85px;
      margin-bottom: 20px;
      animation: float 3s ease-in-out infinite;
    }

    .login-container h1 {
      font-size: 1.4rem;
      color: #023e8a;
      margin-bottom: 5px;
    }

    .login-container p {
      font-size: 0.95rem;
      color: #666;
      margin-bottom: 25px;
    }

    form input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 15px;
      transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    form input:focus {
      outline: none;
      border-color: #00b4d8;
      box-shadow: 0 0 5px rgba(0,180,216,0.4);
    }

    .password-wrapper {
      position: relative;
    }

    .password-wrapper input {
      padding-right: 42px;
    }

    #togglePassword {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      width: 22px;
      height: 22px;
      cursor: pointer;
      opacity: 0.7;
      transition: 0.2s;
    }

    #togglePassword:hover {
      opacity: 1;
    }

    .remember {
      display: flex;
      align-items: center;
      margin: 5px 0 15px 0;
      font-size: 0.9rem;
      color: #555;
    }

    .remember input {
      width: auto;
      margin-right: 8px;
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
      transition: background 0.3s ease, transform 0.1s ease;
    }

    button:hover {
      background: #023e8a;
      transform: scale(1.02);
    }

    .footer-text {
      margin-top: 25px;
      font-size: 0.85rem;
      color: #777;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <img src="{{ asset('images/bps_remove.png') }}" alt="Logo BPS" class="logo-bps">

    <h1>Sistem Informasi Surat Tugas</h1>
    <p>Badan Pusat Statistik</p>

    <form action="{{ route('login.process') }}" method="POST">
      @csrf

      @if(session('error'))
        <div style="color: red; margin-bottom: 10px;">{{ session('error') }}</div>
      @endif

      <input type="text" name="username" placeholder="Username" required>

      <div class="password-wrapper">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <img id="togglePassword" src="{{ asset('images/hidden.png') }}" alt="Toggle Password">
      </div>

      <!-- 🔵 REMEMBER ME -->
       <!--
      <div class="remember">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Ingat saya</label>
      </div>
      -->
      <button type="submit">Masuk</button>
    </form>

    <p class="footer-text">
      Belum punya akun?
      <a href="{{ route('register') }}" style="color:#0077b6; font-weight:600; text-decoration:none;">
        Daftar di sini
      </a>
    </p>

    <p class="footer-text">© {{ date('Y') }} Badan Pusat Statistik</p>
  </div>

  <script>
    const togglePassword = document.getElementById('togglePassword');
    const password = document.getElementById('password');

    togglePassword.addEventListener('click', () => {
      const isHidden = password.type === 'password';
      password.type = isHidden ? 'text' : 'password';
      togglePassword.src = isHidden 
        ? "{{ asset('images/visiblee.png') }}" 
        : "{{ asset('images/hidden.png') }}";
    });
  </script>
</body>
</html>
