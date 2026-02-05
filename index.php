<?php 
  $pageTitle = "Rio Ave | Inovação e Tecnologia"; 
  include 'includes/header.php'; 
?>

<section id="inicio" class="relative h-screen flex items-center justify-center overflow-hidden bg-cover bg-center" 
         style="background-image: url('style/img/bg_rioavetech.jpg');"> 
         
  <div class="absolute inset-0 bg-black/50 backdrop-brightness-75"></div>

  <div class="relative z-10 text-center px-6 w-full max-w-6xl reveal">
    <h1 class="text-3xl md:text-6xl font-bold text-white uppercase tracking-tight leading-[1.1]">
      Núcleo de Inovação <br> 
      e Tecnologia Rio Ave
    </h1>
    
    <p class="mt-10 text-gray-300 text-sm md:text-lg max-w-xl mx-auto font-light tracking-[0.2em] uppercase opacity-70">
      Ambiente central de inovação tecnológica.
    </p>
  </div>
</section>

<?php include 'includes/servicos.php'; ?> 
<?php include 'includes/dicas.php'; ?> 
<?php include 'includes/footer.php'; ?>