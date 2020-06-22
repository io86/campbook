<header class="container-fluid position-relative header">
    <div class="row">
        <div class="col-6">
            <div class="logo">
                <h1>FINDCAMPING.GR</h1>
            </div>
        </div>
        <div class="col-6">
            @if(Request::is('profil/*'))
            <a href="/logout" class="float-right">Logout</a>
            @elseif(Request::is('dashboard/*'))
            <a href="/logout" class="float-right">Logout</a>
            @elseif(Request::is('admin'))

            @else
            <p class="float-right btn-login">Login</p>
            @endif
        </div>
    </div>
    <div class="position-absolute toggle-box-login">
        <form action="/login" method="post" class="login-form pl-4 pr-4">
            @csrf
            <div class="float-left pt-2 mb-4">
                <label for="owner">Owner</label><br>
                <input type="radio" name="user-role" value="1" id="owner">
            </div>
            <div class="float-right pt-2 mb-4">
                <label for="camper">Camper</label><br>
                <input type="radio" name="user-role" value="2" id="camper">
            </div>
            <label for="username" class="label-username">Username</label>
            <input type="text" name="username" id="username" class="p-2">
            <label for="password" class="label-password">Password</label>
            <input type="password" name="password" id="password" class="p-2">
            <input type="submit" name="login" value="Login" class="pt-1 pb-1">
            <input type="hidden" name="hidden-preview-page" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
        </form>
        <div class="register">
            <a href="/register">Register</a>
        </div>
    </div>
</header>
