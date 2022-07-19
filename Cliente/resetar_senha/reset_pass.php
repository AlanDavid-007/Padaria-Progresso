<?php
require __DIR__ . '../../Includes/header_pasta.php';
//  echo "<pre>"; print_r($produtos); echo "</pre>"; exit;
?>

    <div class="h-full bg-gradient-to-tl from-black-400 to-gray-900 w-full py-16 px-4">
        <div class="flex flex-col items-center justify-center">

            <div class="bg-white shadow rounded lg:w-1/3  md:w-1/2 w-full p-10 mt-16">
                <form method="post" action="send_link.php">
                <p tabindex="0" class="focus:outline-none text-2xl font-bold leading-6 text-gray-800">Coloque o seu email abaixo para te mandarmos o link de recuperação</p>
                <div class="mt-3">
                        <label class="text-sm font-medium leading-none text-gray-800">
                            Email
                        </label>
                        <input type="text" name="email" class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2" />
                    </div>
                    <div class="mt-8">
                        <input type="submit" id="submit" name="submit_email" value="Entrar" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full" />
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
require __DIR__ . '../../Includes/footer_pasta.php';
?>