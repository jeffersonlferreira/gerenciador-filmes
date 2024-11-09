<?php if (count($filmes) == 0 && isset($_REQUEST['pesquisar'])): ?>
    <div class="flex flex-col items-center gap-4 w-full">
        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#45455F" viewBox="0 0 256 256">
            <path d="M216,104H102.09L210,75.51a8,8,0,0,0,5.68-9.84l-8.16-30a15.93,15.93,0,0,0-19.42-11.13L35.81,64.74a15.75,15.75,0,0,0-9.7,7.4,15.51,15.51,0,0,0-1.55,12L32,111.56c0,.14,0,.29,0,.44v88a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V112A8,8,0,0,0,216,104ZM192.16,40l6,22.07-22.62,6L147.42,51.83Zm-66.69,17.6,28.12,16.24-36.94,9.75L88.53,67.37Zm-79.4,44.62-6-22.08,26.5-7L94.69,89.4ZM208,200H48V120H208v80Z"></path>
        </svg>
        <div class="text-center text-[#B5B6C9]">
            <p>Nenhum filme encontrado com "<?= $_REQUEST['pesquisar'] ?>"</p>
            <p>Que tal tentar outra busca?</p>
        </div>
        <a href="?" class="text-[#7a7b9f] fill-[#7a7b9f] flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
            </svg>
            Limpar filtro
        </a>
    </div>
<?php endif; ?>