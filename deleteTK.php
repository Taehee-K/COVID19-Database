<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
                <?php
                    require 'includes/dbh.inc.php';

                    $country_oceania = $_POST['country_oceania'];

                    
                    $sql = "DELETE from confirmed_world WHERE country = '$country_oceania'";


                    $res = mysqli_query($conn, $sql);
                    if ($res==TRUE){
                            echo "A record has been deleted";
                    } else {
                        printf("Could not delete record: %s\n", mysqli_error($conn));
                    } 
                    mysqli_close($conn);

                ?>
                </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>