<?php 
// Dados usados para montar os cartões de projetos.
$projetos = [
    // array dentro de array
    [

        "titulo" => "STC AGILIZA",
        "finalizado" => false,
        "ano" => 2026,
        "descricao" =>"Projeto em desenvolvimento para centralizar a coleta, a validação e a gestão de dados entre a STC/MA e orgãos estaduais ",
        "stack" => ["Next.js 16", "React 19", "TypeScript", "Node.js 22","npm","Jest", "Playwright"],
        "img" => "/img/agiliza.png",
        "alt" => "Stc Agiliza Transparencia"
    ],
    [
        "titulo" => "ACERVO DIGITAL INDÍGENA",
        "finalizado" => true,
        "ano" => 2025,
        "descricao" =>"O Arquivo Digital é uma iniciativa educacional e tecnológica dedicada ao patrimônio documental relacionado à história indígena de São José de Ribamar.",
        "stack" => ["HTML","JavaScript","CSS","Php"] ,
        "img" => "/img/arquivoindigena.png"  ,
        "alt" => "Arquivo Indigena SJR"
    ],
    [
        "titulo" => "PORTIFÓLIO",
        "finalizado" => true,
        "ano" => 2026,
        "descricao" =>"Portfólio pessoal de Ariel Asafe, desenvolvedor de software com atuação em desenvolvimento Full Stack, Python, automação e inteligência artificial. O projeto apresenta trabalhos profissionais, pesquisas, experimentos acadêmicos, tecnologias, experiência e formação em uma interface editorial responsiva, com animações e interações acessíveis.",
        "stack" => [
            "React 19",
            "TypeScript",
            "React Router",
            "Vite",
            "Tailwind CSS 4",
            "Canvas API",
            "HTML",
            "CSS",
            "JavaScript",
        ],
        "img" => "/img/telaportifolio.png",
        "alt" => "Portifolio completo faculdade",

    ],
    [
        "titulo" => "PORTIFOLIO ROCKETSEAT",
        "finalizado" => true,
        "ano" => 2026,
        "descricao" =>"Criação de um Desafio pratico com uso de Html/Css/Framework Tailwind e PHP para a criação de uma pagina de portifólio",
        "stack" => ["HTML","CSS","Tailwind","Php"] ,
        "img" => "/img/portifoliorock.png",
        "alt" => "Tela portifolio feito com as aulas da rocketseat",
    ],

];


?>

<!-- Renderiza um cartão para cada projeto cadastrado. -->
<?php foreach ($projetos as $projeto): ?>
 <div class="bg-gray-800 p-4 rounded-lg shadow-xl/30">

            <div class="mb-4 flex items-center justify-between gap-4">

                <div class="flex items-center gap-1">

                    <h3 class="text-xl font-bold"><?= $projeto['titulo'] ?>
                    <?php if($projeto['finalizado']): ?>✅<?php endif; ?>
                    </h3>

                    <?php if($projeto['finalizado']): ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">(Finalizado em <?= $projeto['ano'] ?>)</span>

                    <?php else: ?>
                         <span class="text-xs text-gray-400 opacity-50 italic">(Em desenvolvimento)</span>
                    <?php endif; ?>
                </div>

                <!-- Tecnologias usadas no projeto. -->
                <div class="flex flex-wrap justify-end gap-1">

                    <?php 
                     $colors =  ['fuchsia','lime','sky','rose','amber','teal', 'purple', 'violet','slate'];

                     foreach($projeto['stack'] as $posicao => $techs):
                    //  isso equivale a foreach($variable as $key => $value){
                    //     code
                    //  }
                    // isso basicamente significa que eu to usando as chaves da lista de stack para trazer a lista colors pecorrendo de acordo com as posições/indices
                      
                     

                     ?>

                     <span class="bg-<?= $colors[$posicao] ?>-600 text-<?= $colors[$posicao] ?>-900 rounded-md px-1.5 py-0.5 text-xs font-medium font-semibold">
                        <?=$techs?>
                     </span>

                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Imagem e descrição do projeto. -->
            <div class="flex flex-col items-center gap-4 md:flex-row md:justify-between">
                <div class="w-full md:w-2/5"><img class="h-40 w-full rounded-lg bg-gray-700 p-1 object-contain shadow-lg shadow-sky-500/20 transition duration-300 hover:scale-[1.02] hover:shadow-sky-400/40" src="<?= $projeto['img'] ?>" alt="<?= $projeto['alt'] ?? $projeto['titulo'] ?>"></div>
                <div class="w-full md:w-3/5">
                    <p class="text-gray-300"><?= $projeto['descricao'] ?></p>
                </div>
            </div>
        </div>
<?php endforeach; ?>