<link rel='stylesheet' href='styles.css'>

<h1>Piedra, Papel o Tijera</h1>
<form action="index.php" method="post">
    <label for="jugador1">Jugador 1</label>
    <select name="jugador1">
        <option value="Papel">Papel</option>
        <option value="Piedra">Piedra</option>
        <option value="Tijera">Tijera</option>
    </select>
    <br><br>
    <label for="jugador2">Jugador 2</label>
    <select name="jugador2">
        <option value="Papel">Papel</option>
        <option value="Piedra">Piedra</option>
        <option value="Tijera">Tijera</option>
    </select>
    <br><br>
    <input type="submit" name="enviar">
</form>

<?php
include_once("Figuras/FiguraFactory.php");

if(isset($_POST["enviar"])){

    $figurasFactory = new FiguraFactory();

    $jugador1 = $figurasFactory->create($_POST["jugador1"], "Jugador 1");
    $jugador2 = $figurasFactory->create($_POST["jugador2"], "Jugador 2");

    echo "<section><p>Resultado: ".$jugador1->competirContra($jugador2)."</p></section>";
}
