

<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
                <?php
                    require 'includes/dbh.inc.php';

                    $ctry = $_POST['ctry'];

                    $sql = "SELECT country, 
                    confirmed/(SELECT max(confirmed)FROM confirmed_world) AS confirmed_ratio, 
                    deaths/(SELECT max(deaths) FROM confirmed_world) AS deaths_ratio
                    FROM confirmed_world
                    WHERE country = '$ctry'";

                    $res = mysqli_query($conn, $sql);
                    if ($res){
                        $newArray = mysqli_fetch_array($res);
                        $cnt = $newArray['country'];
                        $confirmed_ratio = $newArray['confirmed_ratio'];
                        $death_ratio = $newArray['deaths_ratio'];
                        echo "Country: ".$cnt."<br>
                        Confirmed Ratio: ".$confirmed_ratio."<br>
                        Death Ratio: ".$death_ratio."<br>";
                    } else {
                        printf("Could not analyze specified data: %s\n", mysqli_error($conn));
                    } 
                    mysqli_close($conn);
                ?>
                </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>