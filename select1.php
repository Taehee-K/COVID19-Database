<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
<?php
    require 'includes/dbh.inc.php';

    $State = $_POST['State'];
    $Ethnicity = $_POST['Ethnicity'];
    $Gender = $_POST['Gender'];

    $sql = "SELECT * FROM confirmed_ethnicity WHERE state='".$State."'";
    $sql2 = "SELECT * FROM confirmed_gender WHERE state='".$State."'";

    $res = mysqli_query($conn, $sql);
    if ($res){
        while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
		$Eth_num = $newArray[$Ethnicity];
            	
	            echo "The ".$State." State has ".$Eth_num."  ".$Ethnicity." </br>";
	}
        
    } 
    else {
            printf("Could not retrieve records: %s\n", mysqli_error($conn));
    }
    mysqli_free_result($res);
    $res2= mysqli_query($conn, $sql2);
    if ($res2){
	while ($newArray = mysqli_fetch_array($res2, MYSQLI_ASSOC)){
		$gend_num = $newArray[$Gender];
            	
	            echo "The ".$State." State has ".$gend_num."  ".$Gender." </br>";
	}
        
    } 
    else {
            printf("Could not retrieve records: %s\n", mysqli_error($conn));
    }
    
    mysqli_free_result($res2);
    mysqli_close($conn);
    
?>
</article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>