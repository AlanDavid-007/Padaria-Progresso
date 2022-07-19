<?php
require __DIR__ . './Includes/header_pasta.php';
//  echo "<pre>"; print_r($produtos); echo "</pre>"; exit;
?>
    <!-- component -->
    <div class="container mx-auto">
        <div class="inputs w-full max-w-2xl p-6 mx-auto">
            <h2 class="text-2xl text-gray-900">Configurações de Conta</h2>
            <form class="mt-6 border-t border-gray-400 pt-4" method="post">
                <div class='flex flex-wrap -mx-3 mb-6'>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>E-mail</label>
                        <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Digite seu email' name="email" value="<?php echo isset($obUsuarios->email) ? $obUsuarios->email : ''; ?>">
                    </div>
                    <div class='w-full md:w-full px-3 mb-6 '>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Senha</label>
                        <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500 mb-3' id='grid-text-1' type='password' placeholder='Digite sua senha' name="senha" value="<?php echo isset($obUsuarios->senha) ? $obUsuarios->senha : ''; ?>">
                        <a type="button" href="../resetar_senha/resetController.php?id=<?php echo $obUsuarios->id;?>" class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md ">Troque sua senha</a>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Telefone</label>
                        <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='number' placeholder='Digite seu telefone' name="telefone" value="<?php echo isset($obUsuarios->telefone) ? $obUsuarios->telefone : ''; ?>">
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>Endereço</label>
                        <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Digite seu endereço' name="endereco" value="<?php echo isset($obUsuarios->endereco) ? $obUsuarios->endereco : ''; ?>">
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>CPF</label>
                        <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='number' placeholder='Digite seu cpf' name="cpf" value="<?php echo isset($obUsuarios->cpf) ? $obUsuarios->cpf : ''; ?>">
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Coloque sua Cidade</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <label>
                                    <input type="radio" name="cidade" value="montenegro" <?php echo isset($obUsuarios->cidade) && $obUsuarios->cidade == 'montenegro' ? 'checked' : ''; ?>>
                                    Montenegro
                                </label>

                                <label class="ml-3">
                                    <input type="radio" name="cidade" value="sebastiao" <?php echo isset($obUsuarios->cidade) && $obUsuarios->cidade == 'sebastiao' ? 'checked' : ''; ?>>
                                    São Sebastião do Sul
                                </label>
                                
                                <label class="ml-3">
                                    <input type="radio" name="cidade" value="viamao" <?php echo isset($obUsuarios->cidade) && $obUsuarios->cidade == 'viamao' ? 'checked' : ''; ?>>
                                    Viamão
                                </label>

                                <label class="ml-3">
                                    <input type="radio" name="cidade" value="pareci" <?php echo isset($obUsuarios->cidade) && $obUsuarios->cidade == 'pareci' ? 'checked' : ''; ?>>
                                    Pareci
                                </label>
                            </div>

                        </div>
                        <div class="personal w-full border-t border-gray-400 pt-4">
                            <h2 class="text-2xl text-gray-900">Informações pessoais:</h2>
                            <div class="flex items-center justify-between mt-4">
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Primeiro nome</label>
                                    <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text' name="primeiro_nome" value="<?php echo isset($obUsuarios->primeiro_nome) ? $obUsuarios->primeiro_nome : ''; ?>" placeholder="Digite seu primeiro nome">
                                </div>
                                <div class='w-full md:w-1/2 px-3 mb-6'>
                                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>Último nome</label>
                                    <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text' name="ultimo_nome" value="<?php echo isset($obUsuarios->ultimo_nome) ? $obUsuarios->ultimo_nome : ''; ?>" placeholder="Digite seu último nome">
                                </div>
                                <div class="flex justify-end">
                                    <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3" type="submit">Salvar mudanças</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <?php
        require __DIR__ . './Includes/footer_pasta.php';
        ?>
