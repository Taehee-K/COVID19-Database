<?php
    require "header.php";
?>
        <main>
            <section id = "main_section">
                <article id = "page3">
                    <h1>Analysis of Data</h1><br><br>
                    <h2>Define a standard number of cases to see continents with exceeding total confirmed people</h2>
                        <form action = "selectTK.php" method = "POST">
                        <p>Cases: <input type="number" name="cases" min=0 max="10000000000">
                        <input type="submit" value="search">
                        </form>
                        <br><br>
                    <h2>Select a continent to analyze countries that have below average number of confirmed cases</h2>
                    <h2>Among them, get the top 5 countries with highest casualties to COVID19 in descending order</h2>
                        <form action = "analyze1TK.php" method = "POST">
                        <p>Continent: <select name = "continent">
                            <option value="AFRICA">AFRICA</option>
                            <option value="AMERICA">AMERICA</option>
                            <option value="ASIA">ASIA</option>
                            <option value="EUROPE">EUROPE</option>
                            <option value="MIDDLE EAST">MIDDLE EAST</option>
                        </select>
                        <input type="submit" value="analyze">
                        </form>
                        <br><br>
                    <h2>Show countries ranking by casualties of COVID19 up until place specified</h2>
                        <form action = "analyze2TK.php" method = "POST">
                        <p>Number: <input type="number" name="number" min=1 max="184">
                        <input type="submit" value="rank">
                        </form> 
                        <br><br>
                    <h2>Compare a country's confirmed and death cases to the maximum statistics</h2>
                        <form action = "analyze3TK.php" method = "POST">
                        <p>Country: <input type="text" name="ctry" size="25">
                        <input type="submit" value="calculate rate">
                        </form> 
                </article>
            </section>
        </main>
        <footer id="main_footer">
            Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>
