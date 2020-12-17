<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
<?php
    require 'includes/dbh.inc.php';

    $date = $_POST['date'];
    $state = $_POST['state'];
    $women = $_POST['women'];
    $men = $_POST['men'];

    $sql = "UPDATE confirmed_gender SET date='".$date."', women='".$women."', men='".$men."' WHERE state='".$state."'";
    

    $res = mysqli_query($conn, $sql);
    if ($res){
        echo "A table has been updated";  
    } 
    else {
            printf("Could not update table: %s\n", mysqli_error($conn));
    }
    mysqli_close($conn);
    
?>                </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>