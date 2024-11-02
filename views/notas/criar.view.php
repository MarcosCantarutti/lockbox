<div class="bg-base-300 rounded-l-box w-56">
    <div class="bg-base-200 p-4">
        + Nova Nota
    </div>
</div>

<div class="bg-base-200 rounded-r-bow w-full p-10 ">
    <form action="/notas/criar" method="post" class="flex flex-col space-y-6">
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Título</span>
            </div>
            <input type="text" placeholder="Digite aqui" class="input input-bordered w-full" />
        </label>
        <label class="form-control">
            <div class="label">
                <span class="label-text">Sua nota</span>
            </div>
            <textarea class="textarea textarea-bordered h-24" placeholder="Bio"></textarea>

        </label>

        <div class="flex justify-end items-center">
            <button class="btn btn-primary">salvar</button>
        </div>
    </form>
</div>