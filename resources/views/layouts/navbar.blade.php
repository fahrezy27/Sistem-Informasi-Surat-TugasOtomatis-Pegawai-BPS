<header class="navbar">
  <div class="navbar-left">
    <h1 class="project-title">SINTAS</h1>
    <span class="subtitle">Sistem Informasi Surat Tugas</span>
  </div>

  <nav class="navbar-links">
    <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
    <a href="{{ url('/pegawai') }}" class="nav-link">Pegawai</a>
    <a href="{{ url('/surat') }}" class="nav-link">Surat</a>
    <a href="{{ url('/kegiatan') }}" class="nav-link">Kegiatan</a>

    <form action="{{ route('logout') }}" method="POST" class="logout-form">
      @csrf
      <button type="submit" class="logout-btn">Logout</button>
    </form>
  </nav>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    .navbar {
      background: linear-gradient(135deg, #0077b6, #00b4d8);
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .navbar-left {
      display: flex;
      flex-direction: column;
    }

    .project-title {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 1.5rem;
      letter-spacing: 1px;
      margin: 0;
      animation: float 2.5s ease-in-out infinite;
    }

    .subtitle {
      font-size: 0.85rem;
      opacity: 0.9;
      margin-top: -3px;
    }

    .navbar-links {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .nav-link {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: #caf0f8;
      text-decoration: underline;
    }

    .logout-form {
      margin: 0;
    }

    .logout-btn {
      background: #fff;
      color: #0077b6;
      border: none;
      padding: 8px 16px;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s;
    }

    .logout-btn:hover {
      background: #eaf6fb;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-6px); }
    }

    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
      }

      .navbar-links {
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 10px;
      }
    }
  </style>
</header>
