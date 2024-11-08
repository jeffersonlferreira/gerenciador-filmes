<!-- CARD FILME -->
<div class="w-[280px] h-[360px] rounded-lg flex flex-col justify-between relative group">

    <img class="left-0 top-0 absolute rounded-lg" src="<?=$filme->imagem?>" />

    <div
        class="w-[280px] h-[360px] left-0 top-0 absolute bg-gradient-to-t from-[#090910] opacity-90 group-hover:from-[#090910] group-hover:via-[#090910E5] group-hover:to-[#09091099]">
    </div>

    <div class="flex justify-end p-2 z-10">
        <div class="w-[83px] h-[38px] bg-[#0F0F1ACC] flex items-center justify-center gap-1.5 rounded-full">
            <div>
                <span class="text-xl">
                    <?=$filme->nota_avaliacao?>
                </span>
                <span class="text-xs">/5</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E4E5EC" viewBox="0 0 256 256">
                <path
                    d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z">
                </path>
            </svg>
        </div>
    </div>

    <div class="p-5 flex flex-col justify-between gap-1 z-10">
        <h3 class="font-[Rajdhani] text-xl">
            <?=$filme->titulo?>
        </h3>
        <div class="flex items-center gap-1.5 text-[#B5B6C9]">
            <span class="text-sm">
                <?=$filme->genero?>
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="#B5B6C9" viewBox="0 0 256 256">
                <path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path>
            </svg>
            <span class="text-sm">
                <?=$filme->ano_lancamento?>
            </span>
        </div>
        <div class="text-sm text-[#B5B6C9] hidden group-hover:block">
            <?=$filme->descricao?>
        </div>
    </div>

</div>
<!-- CARD FILME -->