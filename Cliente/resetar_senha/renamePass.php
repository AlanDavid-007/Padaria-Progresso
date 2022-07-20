<?php
require __DIR__ . '../../Includes/header_pasta.php';
//  echo "<pre>"; print_r($produtos); echo "</pre>"; exit;
?>

    <div class="h-full bg-gradient-to-tl from-black-400 to-gray-900 w-full py-16 px-4">
        <div class="flex flex-col items-center justify-center">

            <div class="bg-white shadow rounded lg:w-1/3  md:w-1/2 w-full p-10 mt-16">
                <form method="post">
                <p tabindex="0" class="focus:outline-none text-2xl font-bold leading-6 text-gray-800">Digite sua nova senha abaixo</p>
                <div class="mt-3">
                        <label class="text-sm font-medium leading-none text-gray-800">
                            Senha
                        </label>
                        <div class="relative flex items-center justify-center">
                            <input name="senha" id="pass" type="password" class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2" />
                            <button class="absolute right-0 mt-2 mr-3 cursor-pointer"  onclick="viewPass()" type="button">
                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg5.svg" alt="viewport">
                            </button>
                        </div>
                    </div>
                    <div class="mt-8">
                        <input type="submit" id="submit" name="submit_email" value="Criar nova senha" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script> 
    function viewPass() {
        var pass = document.getElementById('pass');
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
    }
    </script>
<?php
require __DIR__ . '../../Includes/footer_pasta.php';
?>
