<?php

require_once __DIR__ . '/classes/Product.php';

$croccantiniDelizie = new Product('Dog', 'small', 'Food', 'arriva', 'Croccantini Delizie', 12.34, '...');
$guinzaglio = new Product('Dog', 'big', 'Accessories', 'arriva', 'Guinzaglio Gentile', 34.89, '...');
$fontanina = new Product('Cat', 'all', 'Accessories', 'arriva', 'Fontana di Trevi', 99.89, '....');
$paperTower = new Product('Cat', 'small','Toy', 'arriva', 'Paper Tower', 55, '....' );


// var_dump($croccantiniDelizie, $guinzaglio, $fontanina, $paperTower);


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

</head>
<body>
    
    <header>
        <h1>Title</h1>
    </header>

    <main>
        <div class="container">

            <h1>Connected</h1>

            <div class="d-flex flex-wrap gap-3">
                
                <?php foreach($products as $product) { ?>
                    <div class="card col-4 m-auto">
                        <img class="card-img-top" src="..." alt="Card image cap">
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