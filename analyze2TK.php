
<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
                <?php
                    require 'includes/dbh.inc.php';

                    $number = $_POST['number'];

                    $sql = "SELECT rank() OVER(ORDER BY deaths DESC) AS rank, country, confirmed, deaths
                    FROM confirmed_world
                    LIMIT $number";

                    $res = mysqli_query($conn, $sql);
                    if ($res){
                        while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                            $rank = $newArray['rank'];
                            $country = $newArray['country'];
                            $confirmed = $newArray['confirmed'];
                            $deaths = $newArray['deaths'];

                            echo "rank: ".$rank."&nbsp;&nbsp; 
                            country: ".$country."&nbsp;&nbsp; 
                            confirmed: ".$confirmed."&nbsp;&nbsp; 
                            deaths: ".$deaths."<br>";
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