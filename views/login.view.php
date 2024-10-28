<div class="grid grid-cols-2">
    <div class="hero min-h-screen flex ml-40">
        <div class="hero-content -mt-20">
            <div>
                <p class="py-2 text-xl">
                    Bem vindo ao
                </p>
                <h1 class="text-6xl font-bold">LockBox</h1>
                <p class="pt-2 pb-4 text-xl">
                    onde você guarda <span class="italic">tudo</span> com segurança
                </p>

            </div>
        </div>
    </div>

    <div class="hero mr-40 bg-white min-h-screen text-black">
        <div class="hero-content -mt-20">
            <form action="/login" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Faça o seu login</div>
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Email</span>
                            </div>
                            <input type="email" placeholder="email" class="input input-bordered w-full max-w-xs bg-white" name="email" />
                        </label>
                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Senha</span>
                            </div>
                            <input type="password" placeholder="password" class="input input-bordered w-full max-w-xs bg-white" name="password" />
                        </label>

                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-block">Login</button>
                            <a href="/registrar" class="btn btn-link">Quero me registrar</a>
                        </div>
                    </div>

                </div>

            </form>
        </div>

    </div>
</div>