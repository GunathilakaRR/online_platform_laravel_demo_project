

<nav class="navbar navbar-expand-lg  ">
    <a class="navbar-brand" href="{{ route('store.index') }}">BLOSSOM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('store.index') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#features">SHOPPING</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('store.create') }}" class="nav-link" href="#footer">ADD ITEMS</a>
            </li>
        </ul>
    </div>
</nav>
