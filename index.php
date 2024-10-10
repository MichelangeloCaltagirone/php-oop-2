<?php

require_once __DIR__ . '/classes/Product.php';

$exampleProduct = new Product('ciotola', 12.34, '....');
var_dump($exampleProduct);

$exampleProduct2 = new Category('guinzaglio', 13.44, '....', 'Dog', 'Medium');
var_dump($exampleProduct2);

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

        </div>
    </main>

</body>
</html>