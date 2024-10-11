<?php

require_once __DIR__ . '/classes/Product.php';






$croccantiniDelizie = new Product('Dog', 'small', 'Food', '<i class="fa-solid fa-utensils"></i>', 'Croccantini Delizie', 12.34, 'https://www.myselleria.it/trunk/pr_imgbig_6342_crocchette-naturali-cani-cuccioli-mini-nutrix-pi-.jpg');
$guinzaglio = new Product('Dog', 'big', 'Accessories', '<i class="fa-solid fa-person-shelter"></i>', 'Guinzaglio Gentile', 34.89, 'https://arcaplanet.vtexassets.com/arquivos/ids/219768/croci-cane-guinzaglio-nylon-tubolare-rosso.jpg?v=637454693540300000');
$fontanina = new Product('Cat', 'all', 'Accessories', '<i class="fa-solid fa-person-shelter"></i>', 'Fontana di Trevi', 99.89, 'https://www.turismoroma.it/sites/default/files/Fontana%20di%20Trevi3.jpg');
$paperTower = new Product('Cat', 'small','Toy', '<i class="fa-solid fa-star"></i>', 'Paper Tower', 55, 'https://i.etsystatic.com/21815617/r/il/c4d52c/2385854461/il_fullxfull.2385854461_jw4o.jpg' );


var_dump($croccantiniDelizie, $guinzaglio, $fontanina, $paperTower);


$products = [
    $croccantiniDelizie,
    $guinzaglio,
    $fontanina,
    $paperTower
];

?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal E-commerce</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awnsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <header>
        <h1 class="text-center py-4">Title</h1>
    </header>

    <main>
        <div class="container">

            <h1 class="text-primary mb-3">Products</h1>

            <div class="d-flex flex-wrap gap-3">
                
                <?php foreach($products as $product) { ?>
                    <div class="card col-4 m-auto">
                        <img class="card-img-top" src="<?= $product->picPath ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product->name ?></h5>
                            <p class="card-text">
                                <?= $product->describeSelf() ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    </main>

</body>
</html>

<style scoped>
    .card img {
        max-width: 100%;
        max-height: 300px;
        object-fit: contain;
    }
</style>