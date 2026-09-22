<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css">
    <title>Meu portifolio</title>
</head>
<!-- body com background cinza escuro e texto branco do tailwindcss -->
<body class="bg-gray-900 text-white">
    <!-- essa class header é responsiva e centralizada, com espaçamento entre os elementos e um fundo cinza escuro, usando o Tailwind CSS. O logo é exibido à esquerda, o menu de navegação no centro e os links para redes sociais à direita. -->

<!-- trazendo o header para esta pagina -->
<?php include('./components/header.php'); ?>

<main class="mx-auto mt-16 max-w-screen-lg min-h-20 overflow-hidden p-4">
    <!-- Hero -->
    <?php include('./components/hero.php'); ?>
   
    <!-- Projetos -->
    <section class="mx-auto mt-16 w-full space-y-6 rounded-lg" id="projetos">

        <h2 class="text-2xl font-bold text-cyan-500">Projetos Recentes</h2>
        
        <!-- projeto -->
        <?php include('./components/projetos.php'); ?>
    
    </section>
</main>
    <footer class="mx-auto mt-16 max-w-screen-lg min-h-20 overflow-hidden px-3">
        <!-- Data -->
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
            <p class="text-gray-400">
                &copy; <?= date('Y') ?> Meu Portfólio. Todos os direitos reservados.
            </p>
        </div>

        <!-- links -->
        <div></div>
    </footer>



</body>
</html></html>