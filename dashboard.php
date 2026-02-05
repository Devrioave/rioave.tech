<?php 
  session_start();

  // Segurança de sessão
  if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
      header("Location: login.php");
      exit;
  }

  $pageTitle = "Ecossistema de Software | Rio Ave"; 
  include 'includes/header.php'; 
?>

<div class="relative min-h-screen bg-[#070b16] text-slate-200 selection:bg-primary/30 selection:text-white overflow-x-hidden">

  <!-- Background grid + glow -->
  <div class="fixed inset-0 z-0 pointer-events-none">
    <div 
      class="absolute inset-0 opacity-40"
      style="
        background-image: 
          linear-gradient(to right, #ffffff08 1px, transparent 1px),
          linear-gradient(to bottom, #ffffff08 1px, transparent 1px);
        background-size: 4rem 4rem;
        mask-image: radial-gradient(circle at 50% 10%, black 0%, transparent 70%);
      ">
    </div>

    <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[900px] rounded-full blur-3xl opacity-20"
         style="background: radial-gradient(circle, #3b82f6 0%, transparent 65%);">
    </div>

    <div class="absolute top-24 right-[-120px] w-[520px] h-[520px] rounded-full blur-3xl opacity-15"
         style="background: radial-gradient(circle, #22c55e 0%, transparent 70%);">
    </div>
  </div>

  <div class="relative z-10">

    <!-- HERO -->
    <header class="pt-24 pb-14 px-6 text-center">
      
      <h1 class="mt-8 text-4xl md:text-6xl font-bold text-white tracking-tight leading-tight">
        Ecossistema de Software
        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-primary via-blue-400 to-primary/60">
          Rio Ave
        </span>
      </h1>

      <div class="max-w-4xl mx-auto mt-6">
        <p class="text-base md:text-xl text-slate-400 font-light leading-relaxed">
          Visão consolidada do ecossistema de software da <strong class="text-white font-medium">Rio Ave</strong>,
          estruturado por áreas estratégicas como
          <strong class="text-white font-medium">Projetos e Engenharia</strong>,
          <strong class="text-white font-medium">Monitoramento e Segurança</strong>,
          <strong class="text-white font-medium">Dados</strong>,
          <strong class="text-white font-medium">Controle</strong>,
          <strong class="text-white font-medium">Desenvolvimento e Tecnologia</strong>,
          <strong class="text-white font-medium">Gestão e Produtividade</strong>,
          <strong class="text-white font-medium">Comunicação</strong> e
          <strong class="text-white font-medium">Acesso Remoto</strong>,
          incluindo também os <strong class="text-white font-medium">sistemas implantados em 2025</strong>.
        </p>

        <p class="mt-4 text-sm md:text-base text-slate-500">
          O objetivo é apresentar, de forma clara, os sistemas ativos, integrações e ferramentas que sustentam a operação.
        </p>
      </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 pb-28 space-y-20">

      <!-- SECTION: Topologia -->
      <section aria-label="Topologia do Sistema">
        
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-8">
          <div>
            <h2 class="text-2xl md:text-3xl font-semibold text-white flex items-center gap-3">
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-2xl bg-primary/15 border border-primary/20">
                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                  </path>
                </svg>
              </span>
              Arquitetura & Topologia
            </h2>

            <p class="mt-2 text-slate-400 max-w-2xl leading-relaxed">
              Diagrama central com a distribuição dos sistemas por domínio e suas principais ferramentas de suporte.
            </p>
          </div>

          <!-- UX: action buttons -->
          <div class="flex items-center gap-3">
            <a href="#roadmap"
               class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 transition text-sm text-slate-200">
              Ver roadmap
              <svg class="w-4 h-4 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </a>

            <button id="btnFullscreen"
              class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-primary/90 hover:bg-primary transition text-sm text-white shadow-lg shadow-primary/20">
              Expandir diagrama
              <svg class="w-4 h-4 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 3H5a2 2 0 00-2 2v3m18 0V5a2 2 0 00-2-2h-3M3 16v3a2 2 0 002 2h3m10-5v3a2 2 0 002 2h3" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Card -->
        <div class="group relative rounded-[28px] bg-[#0e1628]/70 backdrop-blur-xl border border-white/10 shadow-2xl overflow-hidden transition-all duration-500 hover:border-primary/30 hover:shadow-primary/10">
          
          <!-- Glow -->
          <div class="absolute -inset-1 bg-gradient-to-r from-primary to-blue-600 opacity-10 blur-2xl group-hover:opacity-20 transition duration-1000"></div>

          <div class="relative p-3 md:p-5">
            <img 
              id="ecosystemImage"
              src="style/img/ecossistema_software.png" 
              alt="Diagrama do Ecossistema de Software Rio Ave com categorias e sistemas implantados em 2025" 
              loading="lazy"
              class="w-full h-auto rounded-2xl shadow-lg border border-white/5 opacity-95 group-hover:opacity-100 transform group-hover:scale-[1.01] transition-all duration-700 ease-out cursor-zoom-in"
            >
          </div>

          <!-- Bottom fade -->
          <div class="absolute bottom-0 inset-x-0 h-28 bg-gradient-to-t from-[#070b16] to-transparent pointer-events-none"></div>

          <!-- Caption -->
          <div class="absolute bottom-6 left-6 right-6 flex items-end justify-between gap-6">
            <div class="pointer-events-none">
              <p class="text-white font-medium text-sm md:text-base">
                Diagrama consolidado do ecossistema
              </p>
              <p class="text-slate-400 text-xs md:text-sm">
                Categorias + ferramentas + sistemas implantados em 2025
              </p>
            </div>
          </div>
        </div>

        <!-- UX: helper text -->
        <p class="mt-4 text-sm text-slate-500">
          Dica: clique em <strong class="text-slate-300 font-medium">Expandir diagrama</strong> para visualizar com mais nitidez.
        </p>
      </section>

      <!-- Divider -->
      <div class="h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

      <!-- SECTION: Roadmap -->
      <section id="roadmap" aria-label="Roadmap de Desenvolvimento">

        <div class="flex items-center gap-4 mb-8">
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
          <h2 class="text-sm md:text-base font-medium text-slate-400 uppercase tracking-[0.35em]">
            Em Desenvolvimento
          </h2>
          <div class="h-px flex-1 bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>
        </div>

        <div class="rounded-[28px] bg-[#0e1628]/60 border border-white/10 backdrop-blur-xl shadow-xl overflow-hidden">
          <div class="p-6 md:p-8">
            <h3 class="text-xl md:text-2xl font-semibold text-white">
              Roadmap e entregas planejadas
            </h3>
            <p class="mt-2 text-slate-400 leading-relaxed max-w-3xl">
              Abaixo estão os softwares e iniciativas em construção, com foco em modernização, automação e evolução contínua do ecossistema.
            </p>
          </div>

          <div class="px-6 md:px-8 pb-8">
            <?php include 'includes/softwares_em_construcao.php'; ?>
          </div>
        </div>

      </section>

    </main>
  </div>
</div>

<!-- Modal Fullscreen (UX/UI forte) -->
<div id="modalEcosystem" class="fixed inset-0 z-[999] hidden">
  <div class="absolute inset-0 bg-black/80 backdrop-blur-sm"></div>

  <div class="relative w-full h-full flex flex-col">
    <div class="flex items-center justify-between px-5 py-4 border-b border-white/10 bg-[#0b1120]/80 backdrop-blur-xl">
      <div>
        <p class="text-white font-semibold leading-tight">Ecossistema de Software • Rio Ave</p>
        <p class="text-slate-400 text-sm">Visualização ampliada do diagrama</p>
      </div>

      <button id="btnCloseModal"
        class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 transition text-sm text-white">
        Fechar
        <svg class="w-4 h-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="flex-1 overflow-auto p-4 md:p-8">
      <div class="max-w-[1400px] mx-auto">
        <img 
          src="style/img/ecossistema_software.png"
          alt="Diagrama ampliado do Ecossistema de Software Rio Ave"
          class="w-full h-auto rounded-2xl border border-white/10 shadow-2xl"
          draggable="false"
        >
        <p class="mt-4 text-sm text-slate-500">
          Para melhor leitura, use zoom do navegador (Ctrl + +) ou aumente a janela.
        </p>
      </div>
    </div>
  </div>
</div>

<script>
  // UX: modal fullscreen do diagrama
  const modal = document.getElementById("modalEcosystem");
  const btnOpen = document.getElementById("btnFullscreen");
  const btnClose = document.getElementById("btnCloseModal");
  const img = document.getElementById("ecosystemImage");

  function openModal() {
    modal.classList.remove("hidden");
    document.body.style.overflow = "hidden";
  }

  function closeModal() {
    modal.classList.add("hidden");
    document.body.style.overflow = "";
  }

  btnOpen?.addEventListener("click", openModal);
  btnClose?.addEventListener("click", closeModal);
  img?.addEventListener("click", openModal);

  // Fecha ao clicar fora
  modal?.addEventListener("click", (e) => {
    if (e.target === modal.firstElementChild) closeModal();
  });

  // Fecha no ESC
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modal.classList.contains("hidden")) closeModal();
  });
</script>

<?php include 'includes/footer.php'; ?>
