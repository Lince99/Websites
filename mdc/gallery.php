<!--<?php
    require_once("config.php");
    
    /*connect to db*/
    /*try {
		$conn = new PDO("mysql:host=$db_server;dbnamee=$db_database", $db_username, $db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		$error .= "Connection failed: ".$e->getMessage();
	}*/
	/*close connection*/
    //$conn = null;
?>-->

<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		<meta name = "keywords" content = "mdc, computer, museo, ITIS"/>
		<meta name = "description" content = "Old PC's Museum"/>
        <title>Galleria MdC</title>
        <link rel="stylesheet" href="default_style.css">
    </head>
    <body>
        <div class="navbar">
            <a href="index.php" class="btn">Home</a><a href="#" class="btn active">Galleria</a><a href="news.php" class="btn">News</a><a href="contacts.php" class="btn">Contatti</a>
        </div>
        <div class="section">
            <div class="article">
                <div class="title">
                    PC presenti nel nostro museo:
                </div>
                <div class="content">
                    <ul class="pc_list">
                        <?php
                            /*get manufacturer list that has produced pcs*/
                            //$query_manufacturer_list = "SELECT name FROM Product WHERE Type_ID = 1;";
                            /*get */
                            /*execute list query*/
                            /*parse query results to html*/
                            
                        ?>
                        <button onclick="showHideTree(this)">></button>
                        <span> MANUFACTURER 0 </span>
                        <li class="manufacturer">
                            <ul>
                                <button onclick="showHideTree(this)">></button>
                                <span> PC 0 </span>
                                <li class="computer">
                                    <ul>
                                        <li><a href="scheda_PC0.html" >Scheda PC 0</a></li>
                                        <li><span>Donatore:</span> Mario Rossi</li>
                                    </ul>
                                </li>
                                <br/><button onclick="showHideTree(this)">></button>
                                <span> PC 0 </span>
                                <li class="computer">
                                    <ul>
                                        <li><a href="scheda_PC0.html" >Scheda PC 0</a></li>
                                        <li><span>Donatore:</span> Mario Rossi</li>
                                    </ul>
                                </li>
                                <br/><button onclick="showHideTree(this)">></button>
                                <span> PC 0 </span>
                                <li class="computer">
                                    <ul>
                                        <li><a href="scheda_PC0.html" >Scheda PC 0</a></li>
                                        <li><span>Donatore:</span> Mario Rossi</li>
                                    </ul>
                                </li>
                                <br/><button onclick="showHideTree(this)">></button>
                                <span> PC 0 </span>
                                <li class="computer">
                                    <ul>
                                        <li><a href="scheda_PC0.html" >Scheda PC 0</a></li>
                                        <li><span>Donatore:</span> Mario Rossi</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <br/><button onclick="showHideTree(this)">></button>
                        <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </span>
                        <li class="manufacturer">
                            <ul>
                                <br/><button onclick="showHideTree(this)">></button>
                                <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </span>
                                <li class="computer">
                                    <ul>
                                        <li><a href="scheda_PC0.html" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a></li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                                    </ul>
                                </li>
                                <br/><button onclick="showHideTree(this)">></button>
                                <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </span>
                                <li class="computer">
                                    <ul>
                                        <li><a href="scheda_PC0.html" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a></li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                                    </ul>
                                </li>
                                <br/><button onclick="showHideTree(this)">></button> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <li class="computer">
                                    <ul>
                                        <li><a href="scheda_PC0.html" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a></li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                                    </ul>
                                </li>
                                <br/><button onclick="showHideTree(this)">></button>
                                <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </span>
                                <li class="computer">
                                    <ul>
                                        <li><a href="scheda_PC0.html" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a></li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer">
            <a href="#" class="return-top"> RETURN TOP </a>
            <p class="content">
                <span> (C) Copyright </span><br>e link esterni<br>
                <?php echo $error ?>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>

        <script type="text/javascript">
            function showHideTree(current) {
                if(current == null)
                    return;
                var next = current;
                while(next.tagName != "LI") {
                    if(next == null || next.nextSibling == null)
                        return;
                    next = next.nextSibling;
                }
                if(next.style.display == "none") {
                    next.style.display = "block";
                    current.innerText = ">";
                    if(next.innerText != null)
                        current.style.borderRightStyle = "dotted";
                    current.style.borderBottomStyle = "solid";
                }
                else {
                    next.style.display = "none";
                    current.innerText = "v";
                    current.style.borderRightStyle = "solid";
                    if(next.innerText != null)
                        current.style.borderBottomStyle = "dotted";
                }
            }
        </script>
    </body>
</html>
