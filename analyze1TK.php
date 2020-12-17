
<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
                <?php
                    require 'includes/dbh.inc.php';

                    $continent = $_POST['continent'];

                    $sql = "SELECT country, deaths 
                    FROM confirmed_world 
                    WHERE confirmed < (SELECT avg(confirmed) FROM confirmed_world) AND continent = '$continent' 
                    ORDER BY deaths DESC 
                    LIMIT 5";

                    $res = mysqli_query($conn, $sql);
                    if ($res){
                        while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                            $country = $newArray['country'];
                            $deaths = $newArray['deaths'];
                            echo "country: ".$country."<br>&nbsp; deaths: ".$deaths."<br>===============<br>";
                        }
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