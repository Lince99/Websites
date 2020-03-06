<?php
    include_once 'db_config.php';

    $Q_create_database = "source sql/database.sql; source sql/select_multiple_controlli.sql";

    $Q_use_database = "USE $DB_database_name;";

    $Q_select_all_controlli = "SELECT * FROM `Tutti_controlli`;";

    $Q_select_all_passeggeri = "SELECT * FROM `Passeggeri_controllati`;";
    $Q_select_all_merce = "SELECT * FROM `Merce_controllata`;";
?>
