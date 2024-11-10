<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Index</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Rajdhani:wght@300;400;500;600;700&family=Rammetto+One&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@phosphor-icons/web"></script>

</head>

<body class="font-['Nunito_Sans'] bg-[#0F0F1A] text-[#E4E5EC]">

    <main class="mx-auto">

        <section class="flex gap-4 h-screen p-4">

            <div class="bg-cover bg-center w-1/2 h-full rounded-[18px]" style="background-image: linear-gradient(rgba(26, 27, 45, 0.9), rgba(26, 27, 45, 0.75)), url(/assets/image.png)">

                <div class="p-8 flex flex-col justify-between h-full">

                    <img src="assets/Logo.svg" alt="Logo" class="w-36 h-36">

                    <div class="font-['Rammetto_One'] flex flex-col gap-3">

                        <h1 class="text-[#B5B6C9] text-base">ab filmes</h1>

                        <h2 class="text-[#E4E5EC] text-xl">
                            O guia definitivo para os <br>
                            amantes do cinema
                        </h2>

                    </div>

                </div>

            </div>


            <div class="w-1/2 h-full">

                <div class="w-full h-full flex justify-center pt-32">

                    <div class="flex flex-col gap-14 w-80">

                        <div class="flex gap-1 items-center justify-center text-[#7A7B9F] text-base p-1 bg-[#131320] rounded-md">
                            <a href="/login" class="w-1/2 px-2 py-1 rounded-md h-10 flex items-center justify-center <?= active('login') ?>">Login</a>
                            <a href="/register" class="w-1/2 px-2 py-1 rounded-md h-10 flex items-center justify-center <?= active('register') ?>">Register</a>
                        </div>

                        <?php require "../views/{$view}.view.php"; ?>

                    </div>

                </div>

            </div>

        </section>

    </main>

</body>

</html>