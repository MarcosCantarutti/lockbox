<div class="mx-auto max-w-screen-lg h-screen flex flex-col">
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">LockBox</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a>Link</a></li>
                <li>
                    <details>
                        <summary><?= auth()->nome; ?></summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex space-x-4">

        <form action="" class="w-full">
            <label class="input input-bordered flex items-center gap-2 w-full">
                <input type="text" name="pesquisar" class="grow" placeholder="Pesquisar notas no LockBox...">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path
                        fill-rule="evenodd"
                        d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                        clip-rule="evenodd" />
                </svg>
            </label>
        </form>

        <a href="/notas/criar" class="btn btn-primary"> + item</a>
    </div>

    <div class="flex flex-grow py-6 ">
        <ul class="bg-base-300 rounded-l-box w-56">

        </ul>

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

    </div>
</div>