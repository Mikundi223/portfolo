<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Automat który lepiej zapisać w C++</title>
        <link rel="stylesheet" href="widok.css">
    </head>
    <body>
        <p>
            <form action="#" method="GET">
                Numer towaru <br><input type="text" name="nrtowaru" id="nt">
                <br>
                Kwota <br><input type="text" name="kwota" id="zł">
                <br>
                <button type="submit">Zapłać</button>
            </form>
            <br>
        <?php
            $db = mysqli_connect ('localhost','root','','15.02automatkp');
            $pani = mysqli_connect ('10.10.10.24','4gc','4gc', '4gd_automat');

                                                                 // $z = '<img src="batonik.jpg" alt="gg">';
            $nt = $_GET["nrtowaru"];
            $zl = $_GET["kwota"];
                $q = "SELECT a.nazwa FROM automat a where a.id='$nt' and '$zl'>=a.cena";
            $zp = mysqli_query($db, $q);
                                                             //     $q2 = "SELECT p.nazwa From produkty p where p.id='.$nt.'and'.$z.'=p.nazwa";
            
            $filip = mysqli_fetch_array($zp);
            echo $filip[0];
                                                                            // <!--" ".$nt."=id.automat, nt=id.zdjecie," zł>=cena -->
        ?>
        <?php
            mysqli_close($db);
            mysqli_close($pani);
        ?>
        </p>
        <br>
            <!-- <table class="darkTable">
                <thead>
                    <tr>
                        <td>Nr</td>
                        <td>Nazwa</td>
                        <td>Cena</td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                    </tr>
                </thead>
            </table> -->
    </body>
</html>