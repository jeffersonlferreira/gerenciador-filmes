<?php include 'components/heading.php'; ?>

<section class="w-full">

    <div class="w-full flex flex-wrap justify-between gap-6">

        <?php
        foreach ($filmes as $filme) {
            include 'components/card_filme.php';
        }

        include 'components/nao-encontrado.php';

        ?>

        <?php if (count($filmes) == 0 && !isset($_REQUEST['pesquisar'])): ?>
            <div class="flex flex-col items-center gap-4 w-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#45455F" viewBox="0 0 256 256">
                    <path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path>
                </svg>
                <div class="text-center text-[#B5B6C9]">
                    <p>Nenhum filme registrado.</p>
                    <p>Que tal começar cadastrando seu primeiro filme?</p>
                </div>
                <a href="/novoFilme" class="text-[#7a7b9f] fill-[#7a7b9f] flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                        <path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path>
                    </svg>
                    Cadastro Novo
                </a>
            </div>
        <?php endif; ?>

    </div>

</section>