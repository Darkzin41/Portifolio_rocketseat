<?php

 $itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => '#habilidades', 'texto' => 'Habilidades'],
    ['href' => '#contato', 'texto' => 'Contato'],
 ];

 $links = [
    ['href' => 'https://www.linkedin.com/in/ariel-asafedev', 'texto' => 'LinkedIn'],
    ['href' => 'https://github.com/Darkzin41', 'texto' => 'GitHub']
 ];
 
?>


<header class="flex justify-between items-center p-6 bg-transparent mx-auto max-w-screen-lg"  >
        <!-- logo -->

        <div class="text-white-500 font-bold font-mono text-2xl">
            Ariel Asafe
        </div>
       
    <div class="flex justify-center items-center space-x-4  ">

        <nav class="flex justify-center items-center space-x-4">
           
            <ul class="flex space-x-4">
                <?php foreach ($itens as $item): ?>
                   
                    <li><a href="<?= $item['href'] ?>" class="text-gray-300 hover:text-white"> <?= $item['texto'] ?> </a></li>
                
                
                <?php endforeach; ?>

                <?php foreach ($links as $link): ?>
                    <li><a href="<?= $link['href'] ?>" target="_blank" class="text-gray-300 hover:text-white"> <?= $link['texto'] ?> </a></li>
                <?php endforeach; ?>

            </ul>
            
        </nav>
    </div>
        <!-- links -->
        <div class="flex justify-center items-center"> 

            <ul class="flex space-x-6">

              <li><a href="https://www.linkedin.com/in/ariel-asafedev" target="_blank" class="header-social-link linkedin text-gray-300 text-white">Linkedin</a></li>

              <li><a href="https://github.com/Darkzin41" target="_blank" class="header-social-link github text-gray-300 text-white">GitHub</a></li>
            </ul>
        </div>
    </header>