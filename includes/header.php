<?php
// Inicia a sessão se ainda não estiver iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
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
    html { scroll-behavior: smooth; }

    /* 2. Header com Efeito de Vidro Permanente */
    .glass-header {
      background: rgba(11, 17, 32, 0.6); 
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    /* 3. Navegação: Links e Indicadores */
    .nav-link { position: relative; transition: color 0.3s ease; }
    .nav-link::after {
      content: ''; position: absolute; bottom: -4px; left: 50%; width: 0; height: 2px;
      background-color: white; transition: all 0.3s ease; transform: translateX(-50%);
    }
    
    /* Quando ativo, a linha cresce e o texto fica branco */
    .nav-link:hover::after, .nav-link.active::after { width: 100%; }
    .nav-link.active { color: white; }

    /* 4. Classes de Fluidez */
    .reveal { opacity: 0; transform: translateY(30px); transition: all 0.8s cubic-bezier(0.2, 1, 0.3, 1); }
    .reveal.active { opacity: 1; transform: translateY(0); }
    
    body.menu-open { overflow: hidden; }
  </style>
</head>
<body class="bg-dark text-gray-200 font-sans antialiased">

<header id="site-header" class="fixed top-0 w-full z-50 flex items-center justify-center h-16 glass-header">
  <div class="max-w-7xl mx-auto px-6 w-full flex items-center justify-center relative">
    
    <nav class="hidden lg:flex items-center gap-8 text-[10px] font-bold tracking-[0.25em] text-gray-400 uppercase">
      
      <a href="index.php#inicio" class="nav-link hover:text-white">Início</a>
      
      <a href="index.php#servicos" class="nav-link hover:text-white">Serviços</a>
      
      <a href="index.php#dicas" class="nav-link hover:text-white">Dicas</a>

      <?php if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true): ?>
        <div class="flex items-center gap-5 pl-8 border-l border-white/10">
            
            <a href="dashboard.php" class="group relative px-4 py-2 rounded-full bg-white/5 border border-white/10 hover:border-primary/50 transition-all duration-300">
                <span class="flex items-center gap-2 text-white group-hover:text-primary transition-colors">
                    <span class="relative flex h-1.5 w-1.5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-primary"></span>
                    </span>
                    ECOSSISTEMA
                </span>
            </a>

            <a href="logout.php" class="text-gray-600 hover:text-red-400 transition-colors p-1" title="Sair do Sistema">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </a>
        </div>
      <?php else: ?>
        <a href="login.php" class="px-5 py-2 rounded-full border border-primary/30 text-primary hover:bg-primary hover:text-dark transition-all duration-300">
            Área de Membros
        </a>
      <?php endif; ?>
    </nav>

    <button id="menu-btn" class="lg:hidden absolute right-6 p-2 text-white/50 hover:text-white transition-colors">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');

    // Função que verifica a posição
    function changeLinkState() {
        let index = sections.length;

        // Verifica qual seção está no topo da tela (com um offset para o header)
        while(--index && window.scrollY + 150 < sections[index].offsetTop) {}
        
        if (index < 0) index = 0;

        navLinks.forEach((link) => {
            link.classList.remove('active');
        });

        if (sections.length > 0 && sections[index]) {
            const currentId = sections[index].getAttribute('id');
            
            navLinks.forEach((link) => {
                if (link.getAttribute('href').includes('#' + currentId)) {
                    link.classList.add('active');
                }
            });
        }
    }

    changeLinkState();
    window.addEventListener('scroll', changeLinkState);
});
</script>