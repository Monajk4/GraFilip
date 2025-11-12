<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<style>
    *{
        font-family: sans-serif;
    }
    body{
        background-color: #242323;
        margin: 0;
    }
    header{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height:10vh;
        background-color: #B79FAD;
        font-size: 3em;
    }
    main{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-weight: 600;
        border: 2px solid #8c05e6;
        font-size: 2em;
        padding: 2%;
        border-radius: 20px;
        text-align: center;
    }
    input{
        width: 90%;
        height: 2vh;
        font-size: 1.1em;
        color: white;
        background:none;
        border: 2px solid #7ad603;
        border-radius: 10px;;
        padding: 1%;
    }
    input:focus{
        outline: none;
    }
    button{
        width: 50%;
        background: none;
        border: 2px solid #7ad603;
        color: white;
        border-radius: 10px;
        font-size: 0.7em;
        transition: 0.5s;

    }
    button:hover{
        background-color: #7ad603;
        transition: 0.5s;
        width: 60%;
        cursor: pointer;
    }
    a{
        text-decoration: none;
        font-weight: 800;
    }
</style>
<body>
    <a href="http://localhost/gra/cliker/index.php"><header>Clicker</header></a>
    <form method="POST">
        <main>
        Nazwa użytkownika:   <br>
        <input type="text" id="username" name="username"><br><br>
        Hasło:<br>
        <input type="password" id="password" name="password"><br><br>
        <button id="signin">Zaloguj</button>
        <?php
        $pol = mysqli_connect("localhost","root","","uzytkownik");
        if(isset($_POST["username"])&&isset($_POST["password"]))
        {
        $nazwa=$_POST["username"];
        $haslo=$_POST["password"];
        

        $query='SELECT username, password From users Where username = "'.$nazwa.'"' ;
        $d = mysqli_query($pol,$query);
        $row = mysqli_fetch_assoc($d);
        if(empty($row["username"]))
        {
            echo '<br><br>Błędna nazwa użytkownika';
        }
        else{
        if($row["password"]==$haslo)
        {
            Echo '<br><br>Zalogowano <br><br> <a href="http://localhost/gra/cliker/index2.php">Wróć do strony z grą</a>';
            $wartość = $nazwa;
            setcookie("nazwa",$wartość, time()+86400, "http://localhost/gra/cliker/index2.php");
        }
        else {
            echo '<br><br>Błędne hasło';
        }
        }
        }
        mysqli_close($pol);
    ?>
        </main>
        
    </form>
    
    
</body>
</html>