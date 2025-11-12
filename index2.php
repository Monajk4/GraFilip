<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicker</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <span></span>
        <h1>Clicker</h1>
        <a id="login_tekst" href="logowanie.php">
            <?php 
            echo 'Witaj '.$_COOKIE["nazwa"].' (Wyloguj)';
            $nazwa = $_COOKIE["nazwa"];
            setcookie("nazwa","",time() - 86400);
            ?>
        </a>

    </header>
    
    <main>
        <section id="lewy">
            <form action="" method="POST">
            <h2>Ilość punktów: <span id="punkty" name="punkty">0</span></h2>
            <h2>Ilość mamony: <span id="mamona">0</span></h2>
            </form>
            <button id="klik">KLIKAJ Misiaku😏</button>
            <nav>
                <button id="serca" style="background-image: url('serca.png');">Mnożysz razy 1.5 punkty<br>(Cena: <span id="sercaCena">100</span>)</button>
            </nav>
        </section>
        <section id="prawy">
            <h1 style="text-align: center; color: white;">Ranking:</h1>
            <ol>
                <?php
                $pol = mysqli_connect("localhost","root","","uzytkownik");
                $query = "SELECT username, points FROM users ORDER BY points DESC;";
                $d = mysqli_query($pol, $query);
                while ($row=mysqli_fetch_row($d)){
                    echo"<li>$row[0]   $row[1]</li>";
                }
                mysqli_close($pol);
                ?>
            </ol>
        </section>
    </main>
    <footer>
        <p>Wykonali: Monika Pawłowska, Bartosz Graca i Bartosz Bartczak </p>
        
</footer>
</body>
<script src="script.js"></script>
</html>