<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalendarz</title>
    <link rel="stylesheet" href="./styl.css">
</head>
<body>
    <header>
        <h1>Dni, miesiące, lata</h1>
    </header>
    <section class="baner">
        <?php 
            $conn = mysqli_connect('localhost', 'root', '', 'kalendarz');
            if (!$conn) {
                die('Połączenie z bazą nie powiodło się');
            }
            $data = date('m-d');
            $sql = "SELECT imiona FROM imieniny WHERE data = '$data'";
            $result = mysqli_query($conn, $sql);
            $imiona = mysqli_fetch_row($result);
            $dzien = ['niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota'];
            $dzien = $dzien[date('w')];
            echo '<p>Dziś jest ' . $dzien . ', ' . date('d-m-Y') . ', imieniny: ' . $imiona[0].'</p>';
        ?>
    </section>
    <main>
        <section class="left">
            <table>
                <tr>
                    <th>liczba dni</th>
                    <th>miesiąc</th>
                </tr>
                <tr>
                    <td rowspan="7">31</td>
                    <td>styczeń</td>
                </tr>
                <tr>
                    <td>marzec</td>
                </tr>
                <tr>
                    <td>maj</td>
                </tr>
                <tr>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>sierpień</td>
                </tr>
                <tr>
                    <td>październik</td>
                </tr>
                <tr>
                    <td>grudzień</td>
                </tr>
                <tr>
                    <td rowspan="4">30</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>czerwiec</td>
                </tr>
                <tr>
                    <td>wrzesień</td>
                </tr>
                <tr>
                    <td>listopad</td>
                </tr>
                <tr>
                    <td>28 lub 29</td>
                    <td>luty</td>
                </tr>
            </table>
        </section>
        <section class="middle">
            <h2>Sprawdź kto ma imieniny</h2>
            <form action="kalendarz.php" method="post">
                <input type="date" name="data" min="2024-01-01" max="2024-12-31" required>
                <button type="submit" name="submit">wyślij</button>
            </form>
            <?php 
                if(isset($_POST['submit'])) {
                    $data = substr($_POST['data'], 5);
                    $sql = "SELECT imiona FROM imieniny WHERE data = '$data'";
                    $result = mysqli_query($conn, $sql);
                    $result = mysqli_fetch_row($result);
                    $data = date('Y-m-d', strtotime($_POST['data']));
                    echo "Dnia $data są imieniny: $result[0]";
                }
            ?>
        </section>
        <section class="right">
            <a href="https://pl.wikipedia.org/wiki/Kalendarz_Majów" target="_blank"><img src="kalendarz.gif" alt="Kalendarz Majów"></a>
                <h2>Rodzaje kalendarzy</h2>
                <ol>
                    <li>Słoneczny
                        <ul>
                            <li>Kalendarz Majów</li>
                            <li>Juliański</li>
                            <li>Gregoriański</li>
                        </ul>
                    </li>
                    <li>Księżycowy 
                        <ul>
                            <li>Kalendarz starogrecki</li>
                            <li>babiloński</li>
                        </ul>
                    </li>
                </ol>
        </section>
    </main>
    <footer><p>Stronę opracował: 09</p></footer>
</body>
</html>