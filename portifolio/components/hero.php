<?php
 // Redes sociais exibidas na seção de apresentação.
 $itens = [
    ['href' => 'https://www.linkedin.com/in/ariel-asafedev', 'src' => '/img/linkedin-icon-svg-download-png-10898423.webp', 'alt' =>'Linkedin-logo',],
    ['href' => 'https://github.com/Darkzin41', 'src' => '/img/3291667.webp', 'alt' =>'Github-logo',],
    ['href' => 'https://www.instagram.com/ariel.rabelo_27/', 'src' => '/img/instagram-icon-logo-free-png.webp', 'alt' =>'Instagram-logo',],
 ];

?>

<!-- Seção inicial com apresentação, redes sociais e foto. -->
<section class="flex gap-x-3" id="section_main_inicio">
       <!-- titulo e descricao -->
       <div class="w-2/3 flex flex-col justify-center">
          <!-- Título principal com destaque visual. -->
          <h1 class="text-3xl font-bold tracking-wide text-sky-300 drop-shadow-[0_0_10px_rgba(56,189,248,0.65)] transition duration-300 hover:drop-shadow-[0_0_16px_rgba(56,189,248,0.9)]">Bem-vindo ao meu portfólio</h1>
          <p class="text-xl leading-6 mt-6">Sou um desenvolvedor full-stack apaixonado por criar soluções inovadoras. Especializado em php, python e javascript, além de trabalhar com tecnologias modernas de desenvolvimento web.</p>

          <!-- links e redes sociais -->
           <!-- Ícones das redes sociais. -->
           <ul class="flex space-x-6 mt-6">

             <?php foreach ($itens as $item): ?>
                   
                    <li><a href="<?= $item['href'] ?>" target="_blank" class="text-gray-300 hover:underline text-white "> 
                        <img src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>" class="w-6 h-6 hover:scale-110 transition-transform duration-700">  </a></li>
                
                
                <?php endforeach; ?>

        
       </div>
       
       <!-- imagem -->
       <div class="w-1/3  flex items-center justify-center">
          <img class="-translate-y-4 rounded-full" src="/img/perfilphoto.png" alt="Foto de perfil">
       </div>
    </section>