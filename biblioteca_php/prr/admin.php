<?php
require 'config.php';

echo'Modificarea tabelei, stergerea unei coloane din baza de date<br>
        Introdu numele coloanei<br>
        <div class="forma_stergere">
            <form action="admin.php" method="get">
                <input type="text" name="columnname" id="columnname">
                <input type="submit" name="trimite">
                </form>
        </div>
';
    if(isset($_GET["columnname"]))
    {
        $column_name=$_GET["columnname"];
        $stergere='ALTER TABLE users DROP COLUMN $column_name';
    }
    echo'Modificarea tabelei, adaugarea unei coloane in baza de date<br>
    Introdu numele coloanei<br>
    <div class="forma_adaugare">
        <form action="admin.php" method="get">
            <input type="text" name="colname" id="colname">
            <input type="submit" name="trimite">
            </form>
    </div>
';
if(isset($_GET["columnname"]))
{
    $colname=$_GET["columnname"];
    $adaugare='ALTER TABLE users ADD COLUMN $colname';
}
echo'Modificarea tabelei, update pentru tabela in baza de date<br>
    Introdu email pentru care vrei sa modifici ceva<br>
    <div class="forma_update">
        <form action="admin.php" method="get">
            <input type="text" name="email" id="email_us">
            <input type="text" name="nume_modif" id="nume_modif">
            <input type="submit" name="trimite">
            </form>
    </div>
';
if(isset($_GET["nume_modif"]))
{
    $nume_modificare=$_GET["nume_modif"];
    $email_us=$_GET["email_us"];
    //$update='UPDATE users SET $nume_modificare WHERE $email_us';
}

?>