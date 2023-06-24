<!DOCTYPE html>
<?php
    if(isset($_COOKIE["registered"])){
        header("Location: reqs.php");
        exit;
    }
?>
<html>
    <head>
        <title>Απαιτήσεις κυρErasmus</title>
        <link rel="stylesheet" type="text/css" href="../styles/styles.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="first">
                <header>ERASMUS+:A program for the students who want to avoid their studies in a "multicultural" way</header>
            </div>
            <div class="sidebar second">
                <nav>
                    <h3 class="a1">Διάλεξε ιστοσελίδα</h3>
                    <a class="a1" href="index.php">.INDEX</a>
                    <?php
                    if (isset($_COOKIE["registered"])) {
                        echo '<a class="a1" href="application.php">application</a>';
                    }
                    ?>
                    <a class="a1" href="reqs.php">reqs</a>
                    <a class="a1" href="sign-up.php">sign-up</a>
                    <a class="a1" href="login.php">login</a>
                    <a class="a1" href="more.php">more</a>
                    <?php
                    if (isset($_COOKIE["registered"])) {
                        echo '<a class="a1" href="profile.php">profile</a>';
                    }
                    ?>
                </nav>
                <img src="./images-videos/eReErasmusTiles.jpg" alt="erasmus wise words">
            </div>
            <div class="third">
                <main>
                    <h1>Απαιτήσεις για εγγραφή</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tristique senectus et netus et malesuada fames. Praesent semper feugiat nibh sed pulvinar proin. Nunc consequat interdum varius sit. Phasellus faucibus scelerisque eleifend donec pretium vulputate. Proin libero nunc consequat interdum varius. Sagittis id consectetur purus ut faucibus pulvinar elementum integer. Habitant morbi tristique senectus et netus et malesuada fames. Aliquam ut porttitor leo a. Viverra aliquet eget sit amet tellus. Et malesuada fames ac turpis.
                    </p>
                    
                    <br>
                    <h2>Με λίγα λόγια</h2>
                    <img src="images-videos/Memes+Erasmus+11-4046478554.jpg" alt="aliens alla erasmus"/> 
                    
                    <table class="not_main2">
                        <tr><th>Κατ' ελάχιστον απαιτήσεις για αίτηση μετακίνησης</th></tr>
                        <tr><td>α: Τρέχον έτος σπουδών (απαίτηση: μεγαλύτερο ή ίσο του 2ου έτους), Τμήμα Πληροφορικής και Τηλεπικοινωνιών</td></tr>
                        <tr><td>β: Ποσοστό «περασμένων» μαθημάτων έως το προηγούμενο έτος σπουδών (απαίτηση: μεγαλύτερο ή ίσο του 70% του συνόλου των μαθημάτων)</td></tr>
                        <tr><td>γ: Μέσος όρος των «περασμένων» μαθημάτων έως το προηγούμενο έτος σπουδών (απαίτηση: μεγαλύτερος ή ίσος του 6.50)</td></tr>
                        <tr><td>δ: Πιστοποιητικό γνώσης της αγγλικής γλώσσας (απαίτηση: κατ’ ελάχιστον «καλή γνώση της αγγλικής γλώσσας», που αντιστοιχεί σε επίπεδο B2 ή ανώτερο)</td></tr>
                    </table>
                    
                    <br>
                    
                    <form id="applicationForm" method="post">
                        Τρέχον έτος σπουδών
                        <select name="paneps">
                            <option selected value="1ο">1ο</option>
                            <option value="2ο">2o</option>
                            <option value="3ο">3o</option>
                            <option value="bigger">μεγαλύτερο</option>
                        </select>
                        <br>Ποσοστό «περασμένων» μαθημάτων έως και το προηγούμενο έτος σπουδών: <input type="number" name="num1" min="0" max="100" placeholder="ex 50=50%">
                        <br>Μέσος όρος «περασμένων» μαθημάτων έως και το προηγούμενο έτος σπουδών: <input type="number" name="num2" min="0" placeholder="ex 2.1">
                        <br>Πιστοποιητικό γνώσης της αγγλικής γλώσσας<br>
                        <input type="radio" name="my_radio_choice" value="radioA1" checked>A1
                        <input type="radio" name="my_radio_choice" value="radioA2">A2
                        <input type="radio" name="my_radio_choice" value="radioB1">B1
                        <input type="radio" name="my_radio_choice" value="radioB2">B2
                        <input type="radio" name="my_radio_choice" value="radioC1">C1
                        <input type="radio" name="my_radio_choice" value="radioC2">C2
                        <br><input type="submit" value="Check"><br>
                    </form>
                </main>
            </div>
            <div class="fourth">
                <img src="images-videos/b96557b4-80dd-11e8-bc55-50daf11b720d-4204702437.jpg" height="600" width="500" alt="erasmus potrait"/> 
                <p>
                    Επιπλέον πληροφορίες:<br>
                    <a href="./text/1923_lausanne_treaty.pdf">NOT FAKE NEWS FOR REAL FOR REAL</a></p>
                    <a href="./text/naskarios.pdf">Erasmus study guide</a></p>
            </div>
            <div class="last">
                <footer>
                    <a href="judas.htm">παρακαλώ να είστε νόμιμος πολίτης</a>
                </footer>
            </div>
        </div>

        <script src="../scripts/reqs.js"></script>
    </body>
</html>
