<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
<?php
    require 'includes/dbh.inc.php';

    $selectOption = $_POST['ethnicity'];

    $sql = "SELECT SUM($selectOption)/SUM(Cases_Total) AS ratio FROM confirmed_ethnicity WHERE 1=1";

    $res = mysqli_query($conn, $sql);
    if ($res){
        while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
		$ratio = $newArray['ratio'];
	            echo "The ratio (sum of total ".$selectOption."  / cases in total ) : $ratio </br>";
	}
        
    } 
    else {
            printf("Could not retrieve records: %s\n", mysqli_error($conn));
    }
    mysqli_free_result($res);
    mysqli_close($conn);
    
?>
                </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>