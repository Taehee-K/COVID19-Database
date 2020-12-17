<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
                <?php
                    require 'includes/dbh.inc.php';

                    $country_policy = $_POST['country_policy'];
                    $country_month = $_POST['country_month'];
                    $transport = $_POST['transport'];
                    $school = $_POST['school'];
                    $work = $_POST['work'];

                    $sql = "INSERT INTO policy VALUES('$country_policy', '$country_month', $transport, $school, $work)";
                    

                    $res = mysqli_query($conn, $sql);
                    if ($res==TRUE){
                            echo "A record has been inserted";
                    } else {
                        printf("Could not insert record: %s\n", mysqli_error($conn));
                    } 
                    mysqli_close($conn);
                    
                ?>
                </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>