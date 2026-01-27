<footer class="bg-dark border-t border-white/5 pt-16 pb-8">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
      
      <div class="space-y-6">
        <a href="index.php" class="inline-block">
          <img 
            src="style/img/logo.png" 
            alt="Logo Rio Ave" 
            class="h-10 w-auto brightness-0 invert opacity-80 hover:opacity-100 transition-opacity"
          > </a>
        <p class="text-gray-500 text-sm leading-relaxed max-w-xs">
          Ambiente centralizado de suporte, inovação e governança tecnológica para o Grupo Rio Ave.
        </p>
      </div>

      <div class="space-y-4">
        <h4 class="text-white font-bold text-xs uppercase tracking-[0.2em]">Serviços</h4>
        <ul class="text-gray-500 text-sm space-y-2">
          <li><a href="suporte.php" class="hover:text-primary transition-colors">Suporte TI</a></li>
          <li><a href="salas.php" class="hover:text-primary transition-colors">Reserva de Salas</a></li>
          <li><a href="inventario.php" class="hover:text-primary transition-colors">Gestão de Inventário</a></li>
        </ul>
      </div>

      <div class="space-y-4">
        <h4 class="text-white font-bold text-xs uppercase tracking-[0.2em]">Compliance</h4>
        <ul class="text-gray-500 text-sm space-y-2">
          <li><a href="etica.php" class="hover:text-primary transition-colors">Canal de Ética</a></li>
          <li><a href="#" class="hover:text-primary transition-colors">Privacidade de Dados</a></li>
        </ul>
      </div>
    </div>

    <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] text-gray-600 uppercase tracking-widest">
      <p>© <?php echo date('Y'); ?> Rio Ave - Tecnologia e Inovação</p>
      <div class="flex gap-6">
        <span>Recife / PE</span>
      </div>
    </div>
  </div>
</footer>

<script>
  // Lógica do Smart Header (Ativa no Scroll)
  const header = document.getElementById('site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 200) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // Toggle Menu Mobile
  const menuBtn = document.getElementById('menu-btn');
  if (menuBtn) {
    menuBtn.addEventListener('click', () => {
      // Adicione aqui a lógica de abertura do seu menu mobile
    });
  }
</script>
</body>
</html>