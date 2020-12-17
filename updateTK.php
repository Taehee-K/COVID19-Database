
<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
                <?php
                    require 'includes/dbh.inc.php';

                    $country_world = $_POST['country_world'];
                    $confirmed = $_POST['confirmed'];

                    $sql = "UPDATE confirmed_world SET confirmed = $confirmed WHERE country = '$country_world'";

                    $res = mysqli_query($conn, $sql);
                    if ($res==TRUE){
                        echo "A record has been successfully updated";
                        } else {
                            printf("Could not update record: %s\n", mysqli_error($conn));
                        } 
                        mysqli_close($conn);
                ?>
                </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>