
<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
                <?php
                    require 'includes/dbh.inc.php';

                    $cases = $_POST['cases'];

                    $sql = "SELECT continent, SUM(confirmed)AS total FROM confirmed_world GROUP BY continent HAVING sum(confirmed)> $cases";

                    $res = mysqli_query($conn, $sql);
                    if ($res){
                            $number_of_rows = mysqli_num_rows($res);
                            echo "There are ".$number_of_rows."continents exceeding the input number of cases<br><br/>";

                            while($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                                $continent = $newArray['continent'];
                                $total_cases = $newArray['total'];
                                echo "continent: ".$continent."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; total: ".$total_cases."<br>===============<br>";
                            }
                    }else {
                        printf("Could not select record: %s\n", mysqli_error($conn));
                    } 
                    mysqli_close($conn);
                ?>
                </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>