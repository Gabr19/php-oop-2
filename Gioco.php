<?php

require_once __DIR__.'/Prodotto.php';
require_once __DIR__.'/traits/materiale.php';

    class Gioco extends Prodotto{

        use Materiale;

    }

?>