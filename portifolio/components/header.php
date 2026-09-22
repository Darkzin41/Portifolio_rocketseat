<?php

 // Links internos exibidos na navegação principal.
 $itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => '#contato', 'texto' => 'Contato'],
 ];

 // Links externos apresentados junto da navegação.
 $links = [
    ['href' => 'https://www.linkedin.com/in/ariel-asafedev', 'texto' => 'LinkedIn'],
    ['href' => 'https://github.com/Darkzin41', 'texto' => 'GitHub']
 ];
 
?>

<!-- Cabeçalho com logo, navegação e redes sociais. -->
<header class="flex justify-between items-center p-6 bg-transparent mx-auto max-w-screen-lg"  >
        <!-- logo -->

        <div class="text-white-500 font-bold font-mono text-2xl">
            Ariel Asafe
        </div>
       
    <div class="flex justify-center items-center space-x-4  ">

        <!-- Links de navegação do portfólio. -->
        <nav class="flex justify-center items-center space-x-4">
           
            <ul class="flex space-x-4">
                <?php foreach ($itens as $item): ?>
                   
                    <li><a href="<?= $item['href'] ?>" class="text-gray-300 transition duration-200 hover:text-sky-200 hover:drop-shadow-[0_0_8px_rgba(125,211,252,0.8)]"> <?= $item['texto'] ?> </a></li>
                
                
                <?php endforeach; ?>

                <?php foreach ($links as $link): ?>
                    <li><a href="<?= $link['href'] ?>" target="_blank" class="text-gray-300 transition duration-200 hover:text-sky-200 hover:drop-shadow-[0_0_8px_rgba(125,211,252,0.8)]"> <?= $link['texto'] ?> </a></li>
                <?php endforeach; ?>

            </ul>
            
        </nav>
    </div>
        <!-- Links sociais com sublinhado personalizado no hover. -->
        <div class="flex justify-center items-center"> 

            <ul class="flex space-x-6">

              <li><a href="https://www.linkedin.com/in/ariel-asafedev" target="_blank" class="header-social-link linkedin text-gray-300 transition duration-200 hover:text-sky-200 hover:drop-shadow-[0_0_8px_rgba(125,211,252,0.8)]">Linkedin</a></li>

              <li><a href="https://github.com/Darkzin41" target="_blank" class="header-social-link github text-gray-300 transition duration-200 hover:text-sky-200 hover:drop-shadow-[0_0_8px_rgba(125,211,252,0.8)]">GitHub</a></li>
            </ul>
        </div>
    </header>