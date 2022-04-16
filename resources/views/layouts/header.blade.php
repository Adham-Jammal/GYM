<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="/" class="logo"> <img src="{{ asset('img/logo.png')}}" alt="Logo"><span class="md">الكوتش</span>  </a>

        <div class="icons">
            <div id="login-btn" class="bi bi-person"></div>
            <div id="notifications-btn" class="bi bi-bell" style="font-size: 2rem;"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="my-navbar">
            <a href="/index">لوحة التحكم</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom my-navbar  -->

<nav class="bottom-my-navbar">
    <a href="/" class="bi bi-house"></a>
    <a href="/food-products" class="bi bi-box-seam"></a>
    <a href="/cookbooks" class="bi bi-book"></a>
    <a href="/products-listing" class="bi bi-card-list"></a>
</nav>

<!-- login form  -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>sign in</h3>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <input type="password" name="" class="box" placeholder="Password" id="">
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>don't have an account ? <a href="#">create one</a></p>
    </form>

</div>
