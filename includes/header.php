<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle ?? 'Rio Ave | Tecnologia'; ?></title>

  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: '#22d3ee', dark: '#0b1120' },
          fontFamily: { sans: ['Outfit', 'sans-serif'] }
        }
      }
    }
  </script>
  
  <style>
    /* 1. Comportamento de Rolagem Suave */
    html {
      scroll-behavior: smooth;
    }

    /* 2. Header com Efeito de Vidro Permanente */
    .glass-header {
      background: rgba(11, 17, 32, 0.6); 
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    /* 3. Navegação: Links e Indicadores */
    .nav-link {
      position: relative;
      transition: color 0.3s ease;
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 50%;
      width: 0;
      height: 2px;
      background-color: white;
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }
    
    .nav-link:hover::after, .nav-link.active::after { 
      width: 100%; 
    }

    /* 4. Classes de Fluidez (Animação de Revelação) */
    .reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.8s cubic-bezier(0.2, 1, 0.3, 1);
    }

    .reveal.active {
      opacity: 1;
      transform: translateY(0);
    }

    /* Delays para efeito de cascata (Stagger) */
    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }
    .reveal-delay-4 { transition-delay: 0.4s; }
    
    body.menu-open { overflow: hidden; }
  </style>
</head>
<body class="bg-dark text-gray-200 font-sans antialiased">

<header id="site-header" class="fixed top-0 w-full z-50 flex items-center justify-center h-16 glass-header">
  <div class="max-w-7xl mx-auto px-6 w-full flex items-center justify-center relative">
    
    <nav class="hidden lg:flex items-center gap-16 text-[10px] font-bold tracking-[0.25em] text-gray-400 uppercase">
      <a href="index.php" class="nav-link hover:text-white <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active text-white' : ''; ?>">Início</a>
      <a href="index.php#servicos" class="nav-link hover:text-white">Serviços</a>
      <a href="dicas.php" class="nav-link hover:text-white <?php echo basename($_SERVER['PHP_SELF']) == 'dicas.php' ? 'active text-white' : ''; ?>">Dicas</a>
    </nav>

    <button id="menu-btn" class="lg:hidden absolute right-6 p-2 text-white/50 hover:text-white transition-colors">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
</header>