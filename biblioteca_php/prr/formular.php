<?php
echo'
<html>
<head>
<link rel="stylesheet" href="css/style.css"
</head>
<body>
<h1>Formular de compatibilitate</h1>
<div class="Formular">
    <form action="formular.php" method="get">
        <br><label>Culoarea ochilor</label>
            <select id="culori" name="culori">
                <option value="caprui">Caprui</option>
                <option value="verzi">Verzi</option>
                <option value="negrii">Negrii</option>
                <option value="albastrii">Albastrii</option>
            </select><br>
        <br><label>Culoarea parului</label>
            <select id="culori" name="culori">
                <option value="blond">Blond</option>
                <option value="saten_deschis">Saten Deschis</option>
                <option value="saten_inchis">Saten_inchis</option>
                <option value="negru">Negru</option>
                <option value="roscat">Roscat</option>
                <option value="grizonat">Grizonat</option>
        </select><br>
        <label>Varsta dumneavoastra:</label>
            <input type="number" id="varsta" min=0 max=110>
        <br><label>Inaltime:</label>
        <input type="number" id="inaltime"  step=0.50>
        <input type="submit" >
    </form>
</div>
</body>
</html>
';





?>