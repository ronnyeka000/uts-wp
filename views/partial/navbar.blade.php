<nav class="navbar navbar-expand-lg bg-warning navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">GBS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Publisher") ? 'active' : '' }}" href="/publisher">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/comedy">Category Comedy</a></li>
                        <li><a class="dropdown-item" href="/adventure">Category Adventure</a></li>
                        <li><a class="dropdown-item" href="/fantasy">Category Fantasy</a></li>
                        <li><a class="dropdown-item" href="/romance">Category Romance</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
