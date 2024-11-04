<div class="bg-base-300 rounded-l-box w-56 flex flex-col divide-y divide-base-100">
    <?php foreach ($notas as $key => $nota): ?>
        <a href="/notas?id=<?= $nota->id; ?>"
            class="w-full p-2  cursor-pointer hover:bg-base-200 
            <?php if ($key == 0): ?> rounded-tl-box <?php endif; ?> 
            <?php if ($nota->id == $notaSelecionada->id): ?> bg-base-200  <?php endif; ?> ">
            <?= $nota->titulo ?>
        </a>
    <?php endforeach; ?>
</div>

<div class="bg-base-200 rounded-r-bow w-full p-10 flex flex-col space-y-6">
    <label class="form-control w-full">
        <div class="label">
            <span class="label-text">Título</span>
        </div>
        <input name="titulo" type="text" placeholder="Digite aqui" class="input input-bordered w-full" value="<?= $notaSelecionada->titulo ?>" />
    </label>
    <label class="form-control">
        <div class="label">
            <span class="label-text">Sua nota</span>
        </div>
        <textarea class="textarea textarea-bordered h-24" placeholder="Bio" name="nota"><?= $notaSelecionada->nota ?></textarea>

    </label>

    <div class="flex justify-between items-center">
        <button class="btn btn-error">Deletar</button>
        <button class="btn btn-primary">Atualizar</button>
    </div>
</div>