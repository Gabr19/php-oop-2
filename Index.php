<?php

require_once __DIR__.'/Categoria.php';
require_once __DIR__.'/Prodotto.php';
require_once __DIR__.'/Cibo.php';
require_once __DIR__.'/Gioco.php';

$categoriaCani = new Categoria(
    'cani',
    'Prodotto per cane'
);
var_dump($categoriaCani);

$categoriaGatti = new Categoria(
    'gatti',
    'Prodotto per gatto'
);
var_dump($categoriaGatti);

$prodotti = [];

$prodotti[] = new Prodotto(
    'prodotto 1',
    'descrizione prodotto 1',
    1.11,
    'img',
    1,
    $categoriaCani
);

$prodotti[] = new Prodotto(
    'prodotto 2',
    'descrizione prodotto 2',
    2.22,
    'img',
    2,
    $categoriaGatti
);

$prodotti[] = new Prodotto(
    'prodotto 3',
    'descrizione prodotto 3',
    3.33,
    'img',
    3,
    $categoriaCani
);

$prodotti[] = new Cibo(
    'cibo 1',
    'descrizione cibo 1',
    3.33,
    'img',
    3,
    $categoriaCani,
    '12/12/24'

);

$prodotti[] = new Gioco(
    'gioco 1',
    'descrizione gioco 1',
    7.77,
    'img',
    3,
    $categoriaCani,
    '12/12/24',
    'plastica'


);

var_dump($prodotti)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    
</head>
<body>

<header>
    header
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="col bg-primary text-center">
                <h1>
                    Prodotti animali
                </h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($prodotti as $index => $prodotto){
            ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php var_dump($prodotto->immagine) ;  
                                ?>" alt="<?php var_dump($prodotto->nome) ;  
                                ?>">
                        <div class="card-body">
                            <h3 class="card-title">
                                <?php var_dump($prodotto->nome) ;  
                                ?>
                            </h3>
                            <h6>
                                <?php var_dump($prodotto->categoria->icona) ;  
                                ?>
                                <?php var_dump($prodotto->categoria->nome) ;  
                                ?>
                            </h6>
                            <h5>
                                <?php var_dump($prodotto->descrizione) ;  
                                ?>
                            </h5>
                            <p>
                            € <?php echo number_format($prodotto->prezzo, 2, ',', '.') ;  
                                ?>
                            </p>
                            <?php if (is_a($prodotto, 'Cibo')){?>
                                <div>
                                    scadenza: <?php echo $prodotto->scadenza;?>
                                </div>
                            <?php } ?>
                            <?php if (is_a($prodotto, 'Gioco')){?>
                                <div>
                                    materiale: <?php var_dump($prodotto->getMaterialType(''));?>
                                </div>
                            <?php } ?>
                            
                            

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>


    
</body>
</html>
