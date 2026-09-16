<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01 - Portifolio</title>
</head>
<body>
    
<!-- <?php
 echo "<span style='color:red'>oi</span>";
 $saudacao = "OI mundo";
 echo "<br>";
 echo $saudacao;
echo "<br>";

 echo $saudacao . ", Portifolio do Ariel";
  #o "." é a concatenação de string do php, tipo o "+" do js e python.
?> -->

<br>

<!-- VARIAVEIS -->
<?php
$nome = "Ariel";
$saudacao = "Olá";
$titulo = $saudacao . " Portifolio do " . $nome;
$subtitulo = "Desenvolvedor Web Full Stack";
$ano = 2026;

$projeto = "Meu portifolio";    
$finalizado = false;
$dataDoProjeto = "2026-07-21";
$descricao = "Meu portifolio é um projeto pessoal que visa apresentar minhas habilidades e projetos desenvolvidos ao longo da minha jornada como desenvolvedor web full stack. Ele inclui informações sobre minhas competências, experiências e exemplos de trabalhos realizados.";

// arrays
$projetos = [
    // array dentro de array
    [
        // estrutura de chave-valor do array
        "titulo" => "Meu portifolio",
        "finalizado" => false,
        "ano" => 2022,
        "descricao" =>"Meu portifolio pessoal, escrito em php e html, ez pz lemon squeezy.",
    ],
    [
        "titulo" => "Lista de Tarefas",
        "finalizado" => true,
        "ano" => 2024,
        "descricao" =>"Lista de tarefas, escrito em php e html, ez pz lemon squeezy.",
    ],
    [
        "titulo" => "Controle de livros",
        "finalizado" => true,
        "ano" => 2025,
        "descricao" =>"Lista de livros, escrito em php e html, ez pz lemon squeezy.",
    ],
    [
        "titulo" => "Projeto 4",
        "finalizado" => false,
        "ano" => 2024,
        "descricao" =>"mais um projeto, escrito em php e html, ez pz lemon squeezy.",
    ],


    // "Meu portifolio",
    // "Lista de tarefas",
    // "Controle de Leitura de Livros",
];

//função
function verificarFinalizacao( $projeto ){
    // if(! $projeto['finalizado']){
    //   return '<span style="color:green;">✅ finalizado</span>'; 
    // }else {
    //   return '<span style="color:red;">❌ não finalizado</span>';

    // } 

    //forma mais otimizada de escrever a condicional if, sem precisar do else.
    if($projeto['finalizado']){
      return '<span style="color:green;">✅ finalizado</span>'; 
    }
      return '<span style="color:red;">❌ não finalizado</span>';

    } 

//todo esse codigo comentado é usando para filtrar os projetos individualmente, com primeiro pelos finalizados e depois pelos anos, mas o resultado final é o mesmo, então não precisa usar os dois filtros, apenas um deles, que é o que vai ser utilizado mais embaixo


//filtro de projetos finalizados
//função anonima, que é uma função sem nome, que é atribuida a uma variavel.
    // $filtrarProjetos = function ($listaDeprojetos, $finalizado = null)
    // function filtrarProjetos($listaDeprojetos, $finalizado = null){
        
    //     if(is_null($finalizado)){
    //         return $listaDeprojetos;
    //     }
        
        
    //     $filtrados = [];

    //     foreach($listaDeprojetos as $projeto){
    //         if( $projeto['finalizado'] === $finalizado
    //             //is_null() - função que verifica se a variavel é nula, se for nula retorna true, se não for nula retorna false.            
    //         ){
    //             //isso é uma adicao dentro de uma lista, o [] é um array vazio, e o $projeto é o valor que vai ser adicionado dentro do array.
    //             $filtrados [] = $projeto; 
    //         }
        
    //     }
    //     return $filtrados;
    // }
//    function filtrarPorAno($listaDeprojetos, $ano){
        
//         $filtrados = [];

//         foreach($listaDeprojetos as $projeto){
//             if( $projeto['ano'] === $ano
                      
//             ){
//                 //isso é uma adicao dentro de uma lista, o [] é um array vazio, e o $projeto é o valor que vai ser adicionado dentro do array.
//                 $filtrados [] = $projeto; 
//             }
        
//         }
//         return $filtrados;
//     }
   //
//    $projetosFiltrados = filtrarProjetos($projetos, true);
//    //atribuindo a função anonima a uma variavel, e chamando a função anonima dentro da variavel, passando os mesmos parametros da função anonima.
//    $projetosFiltrados = filtrarPorAno($projetosFiltrados, 2024);
//duplo filtro, primeiro filtrando os projetos finalizados, e depois filtrando os projetos do ano 2024.

// function filtro($itens,$funcao){
        
//         $filtrados = [];

//         foreach($itens as $item){
//             if($funcao($item)){
                
//                 $filtrados [] = $item; 
//             }
        
//         }
//         return $filtrados;
//     }

$projetosFiltrados = array_filter($projetos,function($projeto){
    return $projeto['ano'] >= 2024 ;
});
// array_filter - é uma função nativa do php que filtra um array, e retorna um novo array com os itens que passaram no filtro, ou seja, que retornaram true na função de callback. A função de callback é a função anonima que é passada como segundo parametro para a função array_filter. A função de callback recebe como parametro cada item do array, e retorna true ou false, dependendo se o item passa no filtro ou não. E ai nao precisa mais criar uma função anonima para filtrar os projetos, pois a função array_filter já faz isso, e ai é só passar a função de callback como segundo parametro para a função array_filter. E ai o resultado final é o mesmo, mas com menos codigo e mais otimizado.

?>
 <!-- #forma de dar echo sem precisar escrever echo, só colocar o sinal de igual dentro da tag php. -->
 <h1><?= $titulo ?></h1>
<h2><?= $subtitulo ?></h2>
<p style="color:blueviolet;"><?= $ano ?></p>

<hr/>

<ul>
    <!-- foreach - loop usado pra percorrer arrays, objetos e strings. -->
    <?php foreach($projetosFiltrados as $projeto): ?>
        <!-- // variveis do array
        // manipulando o array atraves do index.
        // echo "<li>$projeto[0]</li>"; 
        // echo "<li>$projeto[2]</li>"; 
        // echo "<li>$projeto[3]</li>"; 

        // agora apenas pela estrutura de chave-valor do array, sem precisar do index.
        // echo "<li>{$projeto['titulo']}</li>"; 
        // echo "<li>{$projeto['data']}</li>"; 
        // echo "<li>{$projeto['descricao']}</li>";  -->

        <div style="background-color: burlywood;">
            <h2><?= $projeto['titulo'] ?></h2>
            <p><?= $projeto ['descricao'] ?></p>
            <div>
                <div><?= $projeto ['ano'] ?></div>

                <!--CONDICIONAIS IF -->
                <div> Projeto: 

                    <?= verificarFinalizacao($projeto); ?>


                    <!-- <?php if(! $projeto['finalizado']): ?>
                        <span style="color:green;">✅ finalizado</span> 
                    <?php else: ?>
                        <span style="color:red;">❌ não finalizado</span>
                    <?php endif; ?>  -->
                <!-- outra forma de escrever condicional direto no html  -->    

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
