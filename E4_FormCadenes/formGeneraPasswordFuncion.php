<html>
    <body>
        <?php?>
        <form name="genera" action="generaPasswordFuncion.php" method="GET">
            Long. de Basicos <input type="text" name="basico" value="" size="10" /><br>
            Long. de Especiales <input type="text" name="espec" value="" size="10" /><br><br>
            
            <input type="radio" name="carac" value="basesp" /> Caracteres basicos - Caracteres especiales<br>
            <input type="radio" name="carac" value="espbas"  /> Caracteres especiales - Caracteres basicos<br><br>
            <input type="submit" value="Enviar" name="Enviar" />
        </form>


    </body>
</html>