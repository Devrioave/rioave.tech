<?php 
  $pageTitle = "Rio Ave | Dicas de Tecnologia"; 
  include 'includes/header.php'; //
?>

<section class="relative pt-40 pb-20 bg-[#0b1120] flex items-center justify-center overflow-hidden">
  <div class="relative z-10 text-center px-6 w-full max-w-4xl">
    <h1 class="text-3xl md:text-6xl font-bold text-white uppercase tracking-tighter leading-tight">
      Dicas de <span class="text-primary font-light">Tecnologia</span>
    </h1>
    <p class="mt-8 text-gray-500 text-xs md:text-sm font-light tracking-[0.3em] uppercase max-w-2xl mx-auto">
      Produtividade e segurança digital para o ecossistema Rio Ave.
    </p>
  </div>
</section>

<section class="bg-[#0b1120] pb-32">
  <div class="max-w-5xl mx-auto px-6">
    
    <div class="mb-24">
      <div class="flex items-center gap-4 mb-10">
        <span class="h-px w-12 bg-primary/30"></span>
        <h2 class="text-white text-[10px] font-bold uppercase tracking-[0.4em]">Vídeo em Destaque</h2>
      </div>
      
      <div class="relative aspect-video rounded-3xl overflow-hidden border border-white/5 shadow-2xl bg-white/5">
        <iframe 
          class="absolute inset-0 w-full h-full"
          src="https://www.youtube.com/embed/v7kyvD2NqD0" 
          title="Dicas de Tecnologia"
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen>
        </iframe>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 border-t border-white/5 pt-16">
      
      <div class="space-y-6 group">
        <h3 class="text-primary font-bold uppercase text-[11px] tracking-[0.3em] flex items-center gap-3">
          01 <span class="h-px w-6 bg-primary/20 group-hover:w-12 transition-all"></span> Segurança
        </h3>
        <p class="text-gray-400 text-sm font-light leading-relaxed group-hover:text-gray-200 transition-colors">
          A proteção de dados é um pilar central. Utilize sempre autenticação em dois fatores (2FA) e evite padrões de senhas previsíveis para garantir a integridade das suas credenciais corporativas.
        </p>
      </div>
      
      <div class="space-y-6 group">
        <h3 class="text-primary font-bold uppercase text-[11px] tracking-[0.3em] flex items-center gap-3">
          02 <span class="h-px w-6 bg-primary/20 group-hover:w-12 transition-all"></span> Produtividade
        </h3>
        <p class="text-gray-400 text-sm font-light leading-relaxed group-hover:text-gray-200 transition-colors">
          Centralize seus fluxos de trabalho. Ao organizar seus arquivos diretamente na Cloud RA, você garante acesso rápido de qualquer localidade e facilita a colaboração em tempo real com sua equipe.
        </p>
      </div>

    </div>
  </div>
</section>