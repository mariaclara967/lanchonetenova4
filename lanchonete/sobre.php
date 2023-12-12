<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lanchonete</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cursos.php">Funcionarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alunos.php">Menu</a>
                </li>
            </ul>
            <span class="navbar-text">
                <a class="nav-link" href="sobre.php">Sobre</a>
            </span>
            </div>
        </div>
    </nav>

    <center>
        <br>
        <h1>Sobre</h1>
        <p1>Apresentação da Lanchonete 

O lugar perfeito para satisfazer seu paladar e desfrutar de momentos deliciosos! Aqui, reunimos sabor e qualidade em cada item do nosso menu, criando uma experiência gastronômica única para nossos clientes.

Endereço:
Estamos convenientemente localizados no coração da cidade, no endereço:

Rua Saborosa, 123
Bairro Delícias
Cidade Gourmet

Venha nos visitar e descubra um ambiente acolhedor, perfeito para encontros casuais, reuniões com amigos ou simplesmente para saborear uma refeição deliciosa.

Serviços:
Na Lanchonete Sabor & Prazer, oferecemos serviços que visam tornar sua experiência ainda mais especial:

- **Atendimento Rápido e Amigável:** Nossa equipe dedicada está pronta para recebê-lo com um sorriso, proporcionando um atendimento rápido e eficiente.

- **Delivery:** Desfrute do nosso sabor no conforto da sua casa! Oferecemos serviço de entrega para que você possa saborear nossas delícias onde quer que esteja.

- **Ambiente Aconchegante:** Criamos um espaço descontraído e aconchegante, perfeito para relaxar e desfrutar de boa comida em boa companhia.

Especializações:
Em nosso cardápio diversificado, destacamos algumas de nossas especialidades:

- Hambúrgueres Artesanais: Suculentos e cheios de sabor, nossos hambúrgueres são preparados com ingredientes frescos e selecionados.

- Sanduíches Gourmet: Uma variedade de opções irresistíveis, desde clássicos reinventados até combinações únicas que vão surpreender seu paladar.

- Smoothies Refrescantes: Experimente nossos smoothies feitos na hora, uma combinação perfeita de frutas frescas e sabores deliciosos.

Na Lanchonete, comprometemo-nos a oferecer uma experiência gastronômica excepcional, onde cada refeição é uma celebração de sabores. Venha nos visitar e permita-nos conquistar seu paladar!</p1>
        <br>
        <br> 
    </center>

    <?php
    
    $paragrafos = [ 
        "."
    ];
    
    ?>

    <div>
        <img src="<?php echo $path_img; ?>">

        <?php
        foreach ($paragrafos as $item) {
            ?>

            <p><?php echo $item; ?></p>            

            <?php
        }
        ?>
    </div>
    
</body>
</html>