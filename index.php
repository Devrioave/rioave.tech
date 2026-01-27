<?php 
  $pageTitle = "Rio Ave | Inovação e Tecnologia"; 
  include 'includes/header.php'; //
?>

<section class="relative h-screen flex items-center justify-center overflow-hidden bg-cover bg-center" 
         style="background-image: url('style/img/bg_rioavetech.jpg');"> <div class="absolute inset-0 bg-black/50 backdrop-brightness-75"></div>

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

<?php include 'includes/servicos.php'; ?> <?php include 'includes/dicas.php'; ?> <?php include 'includes/footer.php'; ?> ```

### O que foi implementado para a fluidez:
* **Classe `reveal`:** Adicionada ao container de texto da Hero Section. Ela utiliza o `IntersectionObserver` (que está no seu footer) para disparar a animação assim que a página é aberta.
* **Hierarquia de Carregamento:** O PHP processa os `includes` de forma modular, permitindo que o navegador renderize a estrutura principal rapidamente enquanto as animações dão o tom de refinamento visual.
* **Âncora de Navegação:** O seu Header agora levará o usuário suavemente até a seção de serviços no meio da página através do link `#servicos`.

**Deseja que eu revise o arquivo `servicos.php` para garantir que cada card tenha um atraso (delay) diferente, criando aquele efeito de "cascata" ao rolar a página?**