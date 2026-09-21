 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01 - Portifolio</title>
</head>
<body>
    
<br>


<?php
// arrays
$projetos = [
    // array dentro de array
    [
        // estrutura de chave-valor do array
        "titulo" => "STC AGILIAZA",
        "finalizado" => false,
        "ano" => 2026,
        "descricao" =>"Projeto em desenvolvimento para centralizar a coleta, a validação e a gestão de dados entre a STC/MA e orgãos estaduais ",
        "staff" => [
            "React",
            "Vue.js",
            "Node.js",
            "Python",
            "Typescript",
            ]
    ],
    [
        "titulo" => "ACERVO DIGITAL INDÍGENA",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" =>"O Arquivo Digital é uma iniciativa educacional e tecnológica dedicada ao patrimônio documental relacionado à história indígena de São José de Ribamar.",
        "staff" => ["HTML","JavaScript","CSS","Php"]            
    ],
    [
        "titulo" => "Projeto 3",
        "finalizado" => false,
        "ano" => 2026,
        "descricao" =>"",
         "staff" => []   
    ],
    [
        "titulo" => "Projeto 4",
        "finalizado" => false,
        "ano" => 2026,
        "descricao" =>".",
        "staff" => []  
    ],

];

//função
function verificarFinalizacao( $projeto ){

    if($projeto['finalizado']){
      return '<span style="color:green;">✅ finalizado</span>'; 
    }
      return '<span style="color:red;">❌ não finalizado</span>';

    } 

$projetosFiltrados = array_filter($projetos,function($projeto){
    return $projeto['ano'] >= 2024 ;
});

?>

<ul>
    <!-- foreach - loop usado pra percorrer arrays, objetos e strings. -->
    <?php foreach($projetosFiltrados as $projeto): ?>

        <div style="background-color: burlywood;">
            <h2><?= $projeto['titulo'] ?></h2>
            <p><?= $projeto ['descricao'] ?></p>
            <div>
                <div><?= $projeto ['ano'] ?></div>

                <!--CONDICIONAIS IF -->
                <div> Projeto: 

                    <?= verificarFinalizacao($projeto); ?>

                     <!-- <?php
                        if($projeto['finalizado']){
                            echo "✅ finalizado";

                        }else{
                            echo "❌ não finalizado";
                        }
                    ?>  -->
                </div>
            </div>
        </div>  

    <?php endforeach; ?>

</ul>








</body>
</html>
