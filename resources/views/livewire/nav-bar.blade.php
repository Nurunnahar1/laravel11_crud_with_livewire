<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @guest

                        <li class="nav-item">
                            <a href="/login" class="nav-link" wire:navigate>Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link" wire:navigate>Register</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <a href="/customers" class="nav-link" wire:navigate>Customers</a>
                        </li>
                        <li class="nav-item">
                            <button  class="btn btn-secondary" wire:click="logout">Logout</button>
                        </li>
                    @endauth
                </ul>
              
            </div>
        </div>
    </nav>
</div>
