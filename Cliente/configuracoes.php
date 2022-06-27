<?php
require __DIR__ . './Includes/header.php';
?>
          <!-- component -->
        <div class="container mx-auto">
            <div class="inputs w-full max-w-2xl p-6 mx-auto">
                <h2 class="text-2xl text-gray-900">Configurações de Conta</h2>
                <form class="mt-6 border-t border-gray-400 pt-4">
                    <div class='flex flex-wrap -mx-3 mb-6'>
                        <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>E-mail</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter email'  required
                                   value="<?php echo isset($obUsuarios->email) ? $obUsuarios->email : ''; ?>">
                        </div>
                        <div class='w-full md:w-full px-3 mb-6 '>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Senha</label>
                                   <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='password' placeholder='Enter email'  required
                                   value="<?php echo isset($obUsuarios->senha) ? $obUsuarios->senha : ''; ?>">
                            <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md ">Troque sua senha</button>
                        </div>
                                                      <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Telefone</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='number' placeholder='Enter email'  required
                                   value="<?php echo isset($obUsuarios->telefone) ? $obUsuarios->telefone : ''; ?>">
                        </div>
                                                      <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Endereço</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter email'  required
                                   value="<?php echo isset($obUsuarios->endereco) ? $obUsuarios->endereco : ''; ?>">
                        </div>
                                                      <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>CPF</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='number' placeholder='Enter email'  required
                                   value="<?php echo isset($obUsuarios->cpf) ? $obUsuarios->cpf : ''; ?>">
                        </div>
<!--                         <div class='w-full md:w-full px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Coloque sua Cidade</label>
                            <div class="flex-shrink w-full inline-block relative">
                                <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                    <option>Escolha</option>
                                    <option>Montenegro</option>
                                    <option>São Sebastião do Sul</option>
                                    <option>Pareci</option>
                                    <option>Viamão</option>
                                </select>
                                <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div> -->
                        <div class="personal w-full border-t border-gray-400 pt-4">
                            <h2 class="text-2xl text-gray-900">Personal info:</h2>
                            <div class="flex items-center justify-between mt-4">
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Primeiro nome</label>
                                    <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text'  required
                                           value="<?php echo isset($obUsuarios->primeiro_nome) ? $obUsuarios->primeiro_nome : ''; ?>">
                                </div>
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' >Último nome</label>
                                    <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text'  required
                                           value="<?php echo isset($obUsuarios->ultimo_nome) ? $obUsuarios->ultimo_nome : ''; ?>">
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3" type="submit">Salvar mudanças</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php
require __DIR__ . './Includes/footer.php';
?>
