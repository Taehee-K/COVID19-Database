<?php
    require "header.php";
?>
        <main>
            <section id = "main_section">
                <article id = "page3">
                    <h1>Insert, Update, Delete</h1><br><br>
                    <h2>Add recent policy data to database</h2>
                        <form action = "insertTK.php" method = "POST">
                        <p>Country: <select name = "country_policy">
                            <option value="Korea, South">Korea, South</option>
                            <option value="United States">United States</option>
                        </select>
                        <p>Country+Month: <select name = "country_month">
                            <option value="KOR-OCT">KOR-OCT</option>
                            <option value="USA-OCT">USA-OCT</option>
                        </select>
                        <p>Public Transport Restriction: <input type="number" name="transport" min=0 max="9"></p>
                        <p>School Closure: <input type="number" name="school" min=0 max="9"></p>
                        <p>Workplace Closure: <input type="number" name="work" min=0 max="9"></p>
                        <input type="submit" value="insert">
                        </form>
                        <br><br>
                    <h2>Update total confirmed COVID19 cases of a country</h2>
                        <p>The following are the top 12 countries of COVID19 cases on WHO's watchlist</p>
                        <p>along with South Korea</p><br>
                        <form action = "updateTK.php" method = "POST">
                        <p>Country: <select name = "country_world">
                            <option value="United States">United States</option>
                            <option value="India">India</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="France">France</option>
                            <option value="Spain">Spain</option>
                            <option value="The United Kingdom">The Unied Kingdom</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Italy">Italy</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Peru">Peru</option>
                            <option value="Korea, South">Korea, South</option>
                        </select>
                        <p>Confirmed: <input type="number" name="confirmed" size="10"></p>
                        <p></p>
                        <input type="submit" value="update">
                        </form>
                        <br><br>
                    <h2>Delete an Oceanian country's data from database</h2>
                        <img src = oceania.png height = 185 width = 228>
                        <form action = "deleteTK.php" method = "POST">
                        <p>Country: <select name = "country_oceania">
                            <option value="Australia">Australia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="P. N. G.">Paupa New Guinea</option>
                        </select>
                        <input type="submit" value="delete">
                        </form> 
                </article>
            </section>
        </main>
        <footer id="main_footer">
            Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>
