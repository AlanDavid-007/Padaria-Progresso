<?php
require __DIR__ . './Includes/header.php';
    ?>


        <div class="h-full bg-gradient-to-tl from-black-400 to-gray-900 w-full py-16 px-4">
            <div class="flex flex-col items-center justify-center">

                <div class="bg-white shadow rounded lg:w-1/3  md:w-1/2 w-full p-10 mt-16">
                    <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">Entre na sua conta</p>
                    <p tabindex="0" class="focus:outline-none text-sm mt-4 font-medium leading-none text-gray-500">Você não tem uma conta? <a href="javascript:void(0)"   class="hover:text-gray-500 focus:text-gray-500 focus:outline-none focus:underline hover:underline text-sm font-medium leading-none  text-gray-800 cursor-pointer"> Clique aqui.</a></p>
                    <button aria-label="Continue com google" role="button" class="focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-gray-700 py-3.5 px-4 border rounded-lg border-gray-700 flex items-center w-full mt-10">
                       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg2.svg" alt="google">
                        <p class="text-base font-medium ml-4 text-gray-700">Continue com Google</p>
                    </button>
                    <button aria-label="Continue com github" role="button" class="focus:outline-none  focus:ring-2 focus:ring-offset-1 focus:ring-gray-700 py-3.5 px-4 border rounded-lg border-gray-700 flex items-center w-full mt-4">
                       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg3.svg" alt="github">                            
                        <p class="text-base font-medium ml-4 text-gray-700">Continue com Github</p>
                    </button>
                    <button aria-label="Continue com twitter" role="button" class="focus:outline-none  focus:ring-2 focus:ring-offset-1 focus:ring-gray-700 py-3.5 px-4 border rounded-lg border-gray-700 flex items-center w-full mt-4">
                       <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg4.svg" alt="twitter">                            
                        <p class="text-base font-medium ml-4 text-gray-700">Continue com Twitter</p>
                    </button>
                    <div class="w-full flex items-center justify-between py-5">
                         <hr class="w-full bg-gray-400">
                         <p class="text-base font-medium leading-4 px-2.5 text-gray-400">OU</p>
                         <hr class="w-full bg-gray-400  ">
                        </div>
                        <form method="post">
                        <div>
                            <label id="email" class="text-sm font-medium leading-none text-gray-800">
                                Email
                            </label>
                            <input aria-labelledby="email" type="email" class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"/>
                        </div>
                        <div class="mt-6  w-full">
                            <label for="pass" class="text-sm font-medium leading-none text-gray-800">
                                Senha
                            </label>
                           <div class="relative flex items-center justify-center">
                            <input id="pass" type="password" class="bg-gray-200 border rounded  text-xs font-medium leading-none text-gray-800 py-3 w-full pl-3 mt-2"/>
                            <div class="absolute right-0 mt-2 mr-3 cursor-pointer">
                              <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sign_in-svg5.svg" alt="viewport">                                    
                            </div>
                           </div>
                        </div>
                        <div class="mt-8">
                            <button role="button" name="resposta" type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full">Crie sua conta</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        <?php
require __DIR__ . './Includes/footer.php';
?>  