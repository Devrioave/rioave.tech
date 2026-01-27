<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($pageTitle) ? $pageTitle : 'Rio Ave | Tecnologia'; ?></title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#22d3ee',
            dark: '#0b1120',
            surface: '#1e293b'
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          }
        }
      }
    }
  </script>
  
  <style>
    .mobile-menu-enter { opacity: 0; transform: translateY(-10px); }
    .mobile-menu-enter-active { opacity: 1; transform: translateY(0); transition: opacity 300ms ease-out, transform 300ms ease-out; }
    body.menu-open { overflow: hidden; }
  </style>
</head>
<body class="bg-dark text-gray-200 font-sans antialiased">

<header id="site-header" class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent border-b border-transparent">
  <div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center">
    <a href="index.php" class="flex items-center gap-3 z-50 relative">
      <img src="/style/img/logo.png" alt="Logo Rio Ave" class="h-10 w-auto select-none" onerror="this.style.display='none'; this.nextElementSibling.style.display='block'" />
      <span class="text-xl font-bold text-white tracking-tight hidden">Rio Ave</span>
    </a>

    <nav class="hidden md:flex items-center gap-12 text-[13px] font-medium tracking-wide text-gray-400">
      <a href="suporte.php" class="nav-link relative py-1 hover:text-primary transition-colors duration-200">SUPORTE</a>
      <a href="inovacao.php" class="nav-link relative py-1 hover:text-primary transition-colors duration-200">INOVAÇÃO</a>
      <a href="inventario.php" class="nav-link relative py-1 hover:text-primary transition-colors duration-200">INVENTÁRIO</a>
    </nav>

    <button id="menu-btn" class="md:hidden z-50 p-2 text-gray-300 focus:outline-none focus:text-primary transition-colors" aria-label="Menu" aria-expanded="false">
      <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <div id="mobile-menu" class="hidden absolute top-0 left-0 w-full min-h-screen bg-dark/95 backdrop-blur-xl pt-24 px-6 md:hidden flex-col items-center gap-8">
    <nav class="flex flex-col w-full gap-2">
      <a href="suporte.php" class="mobile-link block w-full py-4 text-center text-lg font-medium text-gray-300 hover:bg-white/5 rounded-xl transition-all">SUPORTE</a>
      <a href="inovacao.php" class="mobile-link block w-full py-4 text-center text-lg font-medium text-gray-300 hover:bg-white/5 rounded-xl transition-all">INOVAÇÃO</a>
      <a href="inventario.php" class="mobile-link block w-full py-4 text-center text-lg font-medium text-gray-300 hover:bg-white/5 rounded-xl transition-all">INVENTÁRIO</a>
    </nav>
  </div>
</header>