<div class="navbar bg-base-100">
    <div class="flex-1">
        <a href="/dashboard" class="btn btn-ghost text-xl">LockBox</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/mostrar">Link</a></li>
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