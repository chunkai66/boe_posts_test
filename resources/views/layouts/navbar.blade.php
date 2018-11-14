<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">公告系統</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">處室公告</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="{{ route('login') }}">[ 登入 ]</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="{{ route('register') }}">[ 註冊 ]</a>
            </li>
        </ul>
    </div>
</nav>
