<?php

    function print_buttons_general($table_id='.table') {
        ?>
<nav class="navbar navbar-inverse">
        <!-- TODO -->
        <button type="button" class="btn btn-outline-warning">Modifica</button>
        <button type="button" class="btn btn-outline-danger">Elimina</button>
        <button type="button" class="btn btn-outline-success">Conferma modifiche</button>
        <button type="button" class="btn btn-outline-info" data-toggle="collapse" data-target=" <?php echo $table_id ?> ">
            Espandi
        </button>
    </ul>
</nav>

        <?php
    }

    function print_buttons_filter($action = 'index.php', $table_id='.table') {
        ?>
<!-- <form action="<?php echo $action ?>" method="post">
    <button type="submit" class="btn btn-primary" id="DisconnectButton">Filtra</button>
</form> -->
        <?php
    }
?>

<!-- TODO: https://datatables.net/examples/api/show_hide.html -->
