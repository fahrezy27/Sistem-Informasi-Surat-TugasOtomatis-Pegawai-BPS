<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>SINTAS</title>

  {{-- Google Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  {{-- Remix Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">

  <style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif; }
    body { display:flex; min-height:100vh; background:#f4f7fb; color:#333; }
    a { text-decoration:none; }

    /* Sidebar */
    .sidebar {
      width:260px;
      background:linear-gradient(180deg,#023e8a,#0077b6);
      color:white;
      display:flex;
      flex-direction:column;
      position:fixed;
      top:0; bottom:0; left:0;
      box-shadow:2px 0 10px rgba(0,0,0,0.15);
      transition: width 0.3s ease;
      z-index:1000;
    }

    .sidebar-header {
      display:flex; align-items:center; justify-content:center; flex-direction:column;
      padding:30px 15px; border-bottom:1px solid rgba(255,255,255,0.2); text-align:center;
    }

    .sidebar-header h2 {
      font-size:1.8rem; font-weight:700; letter-spacing:1px; color:#fff;
      animation: floatText 3s ease-in-out infinite;
    }

    @keyframes floatText { 
      0%,100% { transform:translateY(0); } 
      50% { transform:translateY(-8px); } 
    }

    .sidebar-header p { font-size:0.8rem; font-weight:400; color:rgba(255,255,255,0.85); margin-top:6px; }

    .sidebar nav { flex:1; padding:20px 0; }
    .sidebar nav a {
      display:flex; align-items:center; padding:12px 25px;
      color:white; font-weight:500; font-size:0.95rem;
      transition:all 0.3s ease;
    }

    .sidebar nav a i { font-size:20px; margin-right:10px; }
    .sidebar nav a:hover, .sidebar nav a.active { background:rgba(255,255,255,0.2); padding-left:30px; }

    .logout-section {
      border-top:1px solid rgba(255,255,255,0.2);
      padding:20px; text-align:center;
    }

    .logout-btn {
      background:white; color:#0077b6; border:none; border-radius:8px;
      padding:8px 16px; font-weight:600; cursor:pointer;
      transition: all 0.3s ease;
    }

    .logout-btn:hover { background:#e3f5ff; }

    /* Main content */
    .main-content {
      flex:1; margin-left:260px; display:flex; flex-direction:column; min-height:100vh;
      transition: margin-left 0.3s ease;
    }

    header {
      background:white; padding:18px 35px;
      box-shadow:0 2px 8px rgba(0,0,0,0.05);
      display:flex; justify-content:space-between; align-items:center;
      position:sticky; top:0; z-index:10;
    }

    header h1 { font-size:1.25rem; color:#0077b6; font-weight:600; }

    .profile {
      display:flex; align-items:center; gap:8px;
      position: relative;
      font-weight:500;
      color:#333;
      cursor:pointer;
    }

    .profile i { color:#0077b6; font-size:22px; }

    main { padding:40px; flex:1; }

    footer {
      background:#f1f5f9;
      text-align:center;
      padding:15px 0;
      font-size:0.9rem;
      color:#555;
    }

    .toggle-btn {
      display:none;
      background:none;
      border:none;
      font-size:24px;
      color:#0077b6;
      cursor:pointer;
    }

    @media (max-width:768px){
      .sidebar{width:0; overflow:hidden;}
      .sidebar.active{width:220px;}
      .main-content{margin-left:0;}
      .toggle-btn{display:block;}
    }

    /* Modal styles */
    .modal {
      display:none;
      position: fixed;
      inset:0;
      background: rgba(0,0,0,0.5);
      justify-content: center;
      align-items: center;
      z-index: 2000;
    }

    .modal-content {
      background:white;
      padding:30px;
      border-radius:12px;
      width:400px;
      max-width:90%;
      position: relative;
    }

    .modal-header { font-size:1.25rem; font-weight:600; margin-bottom:15px; color:#0077b6; }
    .modal-body { display:flex; flex-direction:column; gap:12px; }
    .modal-body input { width:100%; padding:8px 12px; border-radius:6px; border:1px solid #ccc; font-size:0.95rem; }
    .modal-footer { display:flex; justify-content:flex-end; gap:10px; margin-top:15px; }
    .modal-footer button { padding:8px 16px; border-radius:6px; border:none; font-weight:600; cursor:pointer; }
    .btn-cancel { background:#ccc; color:#333; }
    .btn-save { background:#0077b6; color:white; }

  </style>
</head>

<body>
  {{-- Sidebar --}}
  <aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <h2>SINTAS</h2>
      <p>Sistem Informasi Surat Tugas</p>
    </div>

    <nav>
      <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <i class="ri-dashboard-line"></i> Dashboard
      </a>
      <a href="{{ url('/pegawai') }}" class="{{ request()->is('pegawai*') ? 'active' : '' }}">
        <i class="ri-team-line"></i> Pegawai
      </a>
      <a href="{{ url('/surat') }}" class="{{ request()->is('surat*') ? 'active' : '' }}">
        <i class="ri-file-list-line"></i> Surat Tugas
      </a>
      <a href="{{ url('/kegiatan') }}" class="{{ request()->is('kegiatan*') ? 'active' : '' }}">
        <i class="ri-calendar-event-line"></i> Kegiatan
      </a>
    </nav>

    <div class="logout-section">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
      </form>
    </div>
  </aside>

  {{-- Main Content --}}
  <div class="main-content">
    <header>
      <div style="display:flex;align-items:center;gap:15px;">
        <button class="toggle-btn" id="toggleSidebar"><i class="ri-menu-line"></i></button>
        <h1 id="pageHeader">SINTAS</h1>
      </div>

      {{-- Profile (klik icon atau nama) --}}
      <div class="profile" id="profileMenu">
        <i class="ri-user-line" id="profileIcon"></i>
        <span id="profileName">{{ session('user_name') ?? 'Admin' }}</span>
      </div>
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      © {{ date('Y') }} SINTAS — Sistem Informasi Surat Tugas
    </footer>
  </div>

  {{-- Modal Edit Akun --}}
  <div class="modal" id="editModal">
    <div class="modal-content">
      <div class="modal-header">Edit Akun</div>
      <form action="{{ route('user.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <input type="text" name="nama" value="{{ session('user_name') ?? 'Admin' }}" placeholder="Nama">
          <input type="password" name="password" placeholder="Password Baru (kosongkan jika tidak diubah)">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-cancel" id="closeModal">Batal</button>
          <button type="submit" class="btn-save">Simpan</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    // Sidebar toggle
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');
    toggleBtn.addEventListener('click', () => sidebar.classList.toggle('active'));

    // Update page header otomatis
    const activeLink = sidebar.querySelector('nav a.active');
    const pageHeader = document.getElementById('pageHeader');
    if(activeLink){
      pageHeader.textContent = activeLink.textContent.trim();
      document.title = activeLink.textContent.trim() + " | SINTAS";
    }

    // Modal edit akun
    const profileIcon = document.getElementById('profileIcon');
    const profileName = document.getElementById('profileName');
    const editModal = document.getElementById('editModal');
    const closeModal = document.getElementById('closeModal');

    function openModal(e){
      e.stopPropagation();
      editModal.style.display = 'flex';
    }

    function hideModal(){
      editModal.style.display = 'none';
    }

    profileIcon.addEventListener('click', openModal);
    profileName.addEventListener('click', openModal);
    closeModal.addEventListener('click', hideModal);

    // Klik di luar modal menutup modal
    window.addEventListener('click', function(e){
      if(e.target === editModal){
        hideModal();
      }
    });
  </script>

  @stack('scripts')
</body>
</html>
