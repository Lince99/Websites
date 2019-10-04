<?php
	$error = "";
	$table_name = "";
	$table_struct = "";
	$table_in = "";
	$user_in = array();
	$db_server = "localhost";
	$db_database = "Mdc_db";
	$db_username = "pi";
	$db_password = "WeMercy1";
	
	/*insertion queries*/
    $q_ins_type = "INSERT INTO Type(Typology) VALUES ($user_in[0]);";
    $q_ins_manufacture = "INSERT INTO Manufacturer(Name, Country, Alive, Dead_date) VALUES ($user_in[0], $user_in[1], $user_in[2], $user_in[3]);";
    $q_ins_commercial = "INSERT INTO Commercial(Manufacturer_ID, Price, Born_date, Dead_date) VALUES ($user_in[0], $user_in[1], $user_in[2], $user_in[3]);";
    $q_ins_product = "INSERT INTO Product(Name, Assemblated, Functional, Commercial_ID, Type_ID, Donator, Description, Size, Weight) VALUES ($user_in[0], $user_in[1], $user_in[2], $user_in[3], $user_in[4], $user_in[5], $user_in[6], $user_in[7], $user_in[8]);";
    
    /*selection queries*/
    $q_sel_type = "SELECT Typology FROM Type;";
    $q_sel_manufacture = "SELECT Name, Country, Alive, Dead_date FROM Manufacturer;";
    $q_sel_commercial = "SELECT Manufacturer_ID, Price, Born_date, Dead_date FROM Commercial;";
    $q_sel_product = "SELECT Name, Assemblated, Functional, Commercial_ID, Type_ID, Donator, Description, Size, Weight FROM Product;";
    
    /*custom table*/
    $q_get_table = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='$table_name';";
    $q_sel_table = "SELECT * FROM $table_name;"
    $q_ins_table = "INSERT INTO $table_name($table_struct) VALUES ($table_in)";
?>
