<?php
$validacoes = flash()->get('validacoes');
?>
<div class="bg-base-300 rounded-box w-full  text-3xl font-bold pt-20 flex flex-col items-center">
    <form action="/mostrar" method="POST" class="max-w-md flex flex-col gap-4">
        <div class="text-center">Digite a sua senha novamente para começar a ver todas as suas notas descriptografadas.</div>
        <label class="form-control">
            <div class="label">
                <span class="label-text ">Senha</span>
            </div>
            <input type="password" placeholder="password" class="input input-bordered  bg-white" name="password" />
        </label>
        <?php if (isset($validacoes['password'])): ?>
            <div class="label text-xs text-error"><?= $validacoes['password'][0]; ?></div>
        <?php endif; ?>

        <button class="btn btn-primary">Abrir minhas notas</button>

    </form>
</div>