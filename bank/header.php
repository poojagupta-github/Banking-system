<style>
.navbar-collapse {
    flex-grow: 0;
}

.flex-row {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.navfont{
    font-size:17px;
    font-weight:400;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navfont">
    <div class="container-fluid flex-row">
        <div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">TSF Bank</a>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#abt">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customers.php">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transactions.php">Transactions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contact">Contact</a>
                </li>

            </ul>

        </div>
    </div>
</nav>