<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
<?php
    require 'includes/dbh.inc.php';

if(isset($_POST['commit'])) {
    
    // Turn autocommit off
    mysqli_autocommit($conn,FALSE);

    // Insert some values
    mysqli_query($conn,"INSERT INTO confirmed_world VALUES ('America', 'Aruba', 4668, 44)");
    mysqli_query($conn,"INSERT INTO confirmed_world VALUES ('Oceania', 'French Polynesia', 12362, 61)");

    // Commit transaction
    if (!mysqli_commit($conn)) {
	
      echo "Commit transaction failed";
      exit();
    } else { 
	echo "Commit transaction done";
} 
}

    
    

    // Close connection
    mysqli_close($conn);

?>
 </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>