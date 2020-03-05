<?php
    function print_menu() {
    ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark shadow-lg">
    <a class="navbar-brand" href="index.php">Home</a>

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="controlli.php">Controlli</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="lista_dogane.php">Lista dogane</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="lista_addetti.php">Lista addetti</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="account.php">Account</a>
        </li>
    </ul>
</nav>

    <?php
    }
?>
