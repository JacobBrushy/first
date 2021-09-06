<html>
    <head>
        <body>




         <form method="POST">

         <input type="text" name="login">
         <input type="text" name="pass"/>
         <input type="submit" value="POST">

         </form>

        </body>
        </head>
        </html>


    <?php


$login = $_POST["login"];
$pass = $_POST["pass"];
$tab_log= ['jacek', 'bartosz', 'wiktoria', 'klaudia', 'zygmunt'];
$tab_pass= ['owca', 'baran', 'dzik', 'kuna', 'rys'];
if($tab_log)[0] == $login && $pass == $tab_pass[0]){

    echo "zostales zalogowany";
}
else{
    echo"wyjazd typie";
}


?>
                