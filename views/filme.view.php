<section class="flex w-full items-center gap-12">

    <img src="<?= $filme->imagem ?>" class="rounded-md w-[381px] h-[490px]">

    <div class="flex flex-col gap-5 items-start py-3 flex-1 self-stretch">

        <a href="javascript:history.back()" class="flex items-center gap-2 py-4 text-[#7A7B9F]">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7a7b9f" viewBox="0 0 256 256">
                <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
            </svg>
            Voltar
        </a>

        <div class="flex flex-col justify-between items-start flex-1 self-stretch">

            <div>

                <div>

                    <h1 class="font-['Rajdhani'] text-3xl font-bold text-[#E4E5EC]"><?= $filme->titulo ?></h1>

                    <div>

                        <h2 class="text-[#B5B6C9]">Categoria: <?= $filme->genero ?></h2>
                        <h2 class="text-[#B5B6C9]">Ano: <?= $filme->ano_lancamento ?></h2>

                    </div>

                    <div class="flex items-center gap-3">

                        <div class="flex items-center gap-1">

                            <?php for ($i = 0; $i < $filme->nota_avaliacao; $i++) : ?>

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#A85FDD" viewBox="0 0 256 256">
                                    <path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                                </svg>

                            <?php endfor; ?>

                            <?php for ($i = $filme->nota_avaliacao; $i < 5; $i++) : ?>

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#A85FDD" viewBox="0 0 256 256">
                                    <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path>
                                </svg>

                            <?php endfor; ?>

                        </div>

                        <div class="flex items-center gap-2">
                            <h2 class="font-['Rajdhani'] text-2xl text-[#E4E5EC] font-bold"><?= $filme->nota_avaliacao ?></h2>
                            <h2 class="font-[#B5B6C9] text-base font-normal">(5 avaliações)</h2>
                        </div>
                    </div>

                </div>

            </div>

            <div class="self-stretch text-[#B5B6C9]">
                <?= $filme->descricao ?>
            </div>

        </div>

</section>

<section class="flex w-full flex-col items-start gap-10 pt-16">

    <div class="flex items-end gap-2 self-stretch w-full justify-between">

        <div class="font-['Rajdhani'] text-2xl font-bold font-[#E5E2E9]">Avaliações</div>

        <button onclick="toggleModal()"
            class="text-center text-base text-white bg-[#892CCD] h-12 rounded-md flex items-center justify-center gap-2 px-5 py-3 cursor-pointer hover:bg-[#A85FDD] hover:shadow-[0_4px_10px_rgba(137,44,205,0.5)]"
            href="/novoFilme">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ffffff" viewBox="0 0 256 256">
                <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path>
            </svg>
            Avaliar filme
        </button>
    </div>

    <?php if (count($avaliacoes) > 0) : ?>

        <div class="flex flex-col gap-3 items-start self-stretch">

            <?php foreach ($avaliacoes as $avaliacao) : ?>

                <!-- card -->
                <div class="bg-[#131320] flex p-8 items-start gap-12 self-stretch rounded-md justify-between">

                    <div class="flex gap-4 items-center w-[216px]">
                        <img src="/assets/perfil.png" alt="" class="w-12 h-12 border border-[#7435DB] rounded-md">
                        <div>
                            <div class="flex items-center gap-2">
                                <p><?= $avaliacao->nome; ?></p>
                                <?php if ($avaliacao->id == auth()->id) : ?>
                                    <div class="rounded-full bg-[#892CCD] px-1.5 flex justify-center items-center text-xs">voce</div>
                                <?php endif; ?>
                            </div>
                            <p class="text-[#7A7B9F] text-sm">4 filmes avaliados</p>
                        </div>
                    </div>

                    <div class="border-l h-12 border-[#1A1B2D]"></div>

                    <div class="text-[#7A7B9F] w-[578px]">
                        <?= $avaliacao->avaliacao; ?>
                    </div>

                    <div class="border-l h-12 border-[#1A1B2D]"></div>

                    <div class="flex items-center gap-1.5 p-2.5 h-8 bg-[#1A1B2D] rounded-md font-['Rajdhani'] w-[68px]">
                        <div class="flex items-baseline gap-0.5">
                            <p class="text-xl font-bold text-xl"><?= $avaliacao->nota; ?></p>
                            <p class="text-[#E4E5EC] text-xs">/5</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#A85FDD" viewBox="0 0 256 256">
                            <path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                        </svg>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    <?php else : ?>

        <div class="flex flex-col items-center gap-4 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="#7a7b9f" viewBox="0 0 256 256">
                <path d="M229.52,74.21a8,8,0,0,0-7.13-2A44,44,0,0,0,168,41.67a44,44,0,0,0-80,0,44,44,0,0,0-54.4,30.51,8,8,0,0,0-9.4,9.65L54.76,211.67A16,16,0,0,0,70.34,224H185.66a16,16,0,0,0,15.58-12.33L231.79,81.83A8,8,0,0,0,229.52,74.21ZM76,56a27.68,27.68,0,0,1,13.11,3.26,8,8,0,0,0,11.56-5.34,28,28,0,0,1,54.66,0,8,8,0,0,0,11.56,5.34A28,28,0,0,1,207,76.54l-38.56,11-34.49-13.8a16,16,0,0,0-11.88,0L87.57,87.56,49,76.54A28,28,0,0,1,76,56ZM70.34,208,42.91,91.44l37.85,10.81L94.86,208ZM145,208H111L96.75,101.12,128,88.62l31.25,12.5Zm40.66,0H161.14l14.1-105.75,37.85-10.81Z"></path>
            </svg>
            <div class="text-center text-[#B5B6C9]">
                <p>Nenhuma avaliação registrada.</p>
                <p>Que tal enviar o primeiro comentário?</p>
            </div>
            <button onclick="toggleModal()" class="text-[#7a7b9f] fill-[#7a7b9f] flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                    <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path>
                </svg>
                Avaliar filme
            </button>
        </div>

    <?php endif; ?>

</section>

<!-- Modal -->
<div id="modal" class="fixed inset-0 flex items-center justify-center hidden bg-[#040407]/60 backdrop-blur-sm">

    <div class="relative w-[600px] h-[570px] bg-[#0F0F1A] border border-[#1A1B2D] rounded-2xl p-10 flex flex-col gap-8">

        <button class="flex justify-center items-center w-8 h-8 gap-3 absolute right-4 top-4 bg-[#1A1B2D] rounded-md" onclick="toggleModal()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#7A7B9F" viewBox="0 0 256 256">
                <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
            </svg>
        </button>

        <h2 class="font-[Rajdhani] text-xl font-bold font-[#E4E5EC]">Avaliar filme</h2>

        <form action="/novaAvaliacao" method="POST" class="flex flex-col gap-6 w-full">

            <div class="flex gap-8">

                <input type="text" name="id" value="<?= $filme->id ?>" class="hidden">

                <img src="<?=$filme->imagem?>" class="w-[137px] h-[176px] rounded-md">

                <div class="flex flex-col justify-between">

                    <div class="flex flex-col gap-3">
                        <h3 class="font-[Rajdhani] font-bold text-2xl"><?=$filme->titulo?></h3>
                        <div class="font-[#B5B6C9] text-sm">
                            <p>Categoria: <?=$filme->genero?></p>
                            <p>Ano: <?=$filme->ano_lancamento?></p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <p class="font['Nunito_Sans'] text-sm">Sua avaliação:</p>


                        <div class="flex gap-1.5">

                            <input type="hidden" name="avaliacao" id="avaliacao">

                            <!-- Estrela 1 -->
                            <button class="star text-gray-500" data-value="1" onclick="setRating(event, 1)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#A85FDD" viewBox="0 0 256 256">
                                    <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path>
                                </svg>
                            </button>

                            <!-- Estrela 2 -->
                            <button class="star text-gray-500" data-value="2" onclick="setRating(event, 2)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#A85FDD" viewBox="0 0 256 256">
                                    <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path>
                                </svg>
                            </button>

                            <!-- Estrela 3 -->
                            <button class="star text-gray-500" data-value="3" onclick="setRating(event, 3)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#A85FDD" viewBox="0 0 256 256">
                                    <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path>
                                </svg>
                            </button>

                            <!-- Estrela 4 -->
                            <button class="star text-gray-500" data-value="4" onclick="setRating(event, 4)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#A85FDD" viewBox="0 0 256 256">
                                    <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path>
                                </svg>
                            </button>

                            <!-- Estrela 5 -->
                            <button class="star text-gray-500" data-value="5" onclick="setRating(event, 5)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#A85FDD" viewBox="0 0 256 256">
                                    <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path>
                                </svg>
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <textarea name="comentario" id="comentario" placeholder="Comentário"
                class="w-full h-40 bg-transparent rounded-md border border-[#1A1B2D] focus:border-[#892CCD] outline-none px-4 py-3"></textarea>

            <div class="flex justify-end">
                <button class="text-center text-base text-white bg-[#892CCD] w-[86px] h-12 rounded-md flex items-center justify-center gap-2 px-5 py-3 cursor-pointer hover:bg-[#A85FDD] hover:shadow-[0_4px_10px_rgba(137,44,205,0.5)]">Publicar</button>
            </div>

        </form>

    </div>
</div>

<script>
    function toggleModal() {
        const modal = document.getElementById("modal");
        modal.classList.toggle("hidden");
    }

    function setRating(event, value) {
        event.preventDefault();
        document.getElementById("avaliacao").value = value;
        document.querySelectorAll(".star").forEach(star => {
            if (star.getAttribute("data-value") <= value) {
                star.classList.remove("text-yellow-500");
                star.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#a85fdd" viewBox="0 0 256 256">
                        <path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                    </svg>
                `;
            } else {
                star.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#A85FDD" viewBox="0 0 256 256">
                        <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.38,16.38,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65a8,8,0,0,0-8.38,0L69.09,215.94c-.15.09-.19.12-.38,0a.37.37,0,0,1-.17-.48l14.88-62.8a8,8,0,0,0-2.56-7.91l-48.7-42c-.12-.1-.23-.19-.13-.5s.18-.27.33-.29l63.92-5.16A8,8,0,0,0,103,91.86l24.62-59.61c.08-.17.11-.25.35-.25s.27.08.35.25L153,91.86a8,8,0,0,0,6.75,4.92l63.92,5.16c.15,0,.24,0,.33.29S224,102.63,223.84,102.73Z"></path>
                    </svg>
                `;
            }
        });
    }

    function toggleModal() {
        document.getElementById("modal").classList.toggle("hidden");
    }
</script>