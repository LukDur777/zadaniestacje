<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=adevice-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "stacje");
    //$sql = "SELECT nazwa, adres, miasto, FROM `staca` JOIN ON `stacje paliw`. adres";
    $wynik = $conn->query($sql);

    while ($staca = $wynik->fetch_assoc()){
        echo '<div class="card flex-column gap-12 center-both">';
        echo '<h2>' .$staca["nazwa"].'</h2>';
        echo '<div>';
        echo '<h3>cena paliwa:</h3>';
        echo '<p>'. $staca["cena_paliwa"] . 'zl'. '</p>';
        echo '</div>';
        echo '<div>';
        echo '<h3>adres:</h3>';
        echo '<p>' . $staca["miasto"] . '</p>';
        echo '<p>' . $staca["ulica"] . ''. $staca["numer"]. '</p>';
        echo '</div>';
    }
    ?>
    <div class="lewo">
        <div class="logo">
            <img class="logo1" src="logo.jpg" alt="">

        </div>
        <div class="text">
            <h2>Dostepne filtry</h2>

        </div>
        <input class="szukanie" type="search" name="nazwastacji" id="" placeholder="Nazwa stacji" >
        <label for="nazwastacji"></label>
        
        <div class="miasto">
        <label for="miasto"></label>
        <select name="miasto" class="miasto">
            <option value="Gdansk">Gdansk</option>
            <option value="Sopot">Sopot</option>
            <option value="Gdynia">Gdynia</option>
            <option value="Kartuzy">Kartuzy</option>
        </select>
        </div>
        <div class="reszta">
            <h2>Cena za litr od:</h2>
            <input type="range" name="Cenalitr" class="cenalitr" min="1.00" max="9.00">
            <span class="minimum-price-value">1.00</span> zł<br>
        
            <h2>Cena za litr do:</h2>
            <input type="range" name="Cenalitrdo" class="cenalitrdo" min="1" max="9">
            <span class="maximum-price-value">9.00</span> zł<br>
        </div>
        

        <div class="szukajreset">

        <input type="submit" value="Szukaj">
        <label for="szukaaj"></label>
        <input type="reset" value="reset">
          
        </div>

    </div>
    
    
    
    <div class="prawo">
        <footer>
            <h3>
                Wynik Wyszukiwania:
            </h3>
        </footer>

    </div>
    
    <footer>

    </footer>
    
</body>
<script src="script.js"></script>
</html>