<?php include 'components/heading.php'; ?>

<section class="w-full">

    <div class="w-full flex flex-wrap justify-between gap-6">

        <?php
        foreach ($filmes as $filme) {
            include 'components/card_filme.php';
        }

        include 'components/nao-encontrado.php';

        ?>

    </div>

</section>