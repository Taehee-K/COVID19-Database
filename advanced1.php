<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
<?php
    require 'includes/dbh.inc.php';

    $N = $_POST['ConfirmedCases'];

    $sql = "SELECT AVG(population) AS AveragePop FROM region_info AS r INNER JOIN confirmed_ethnicity AS c ON 
r.province_state=c.state WHERE Cases_Total >= $N";

    $res = mysqli_query($conn, $sql);
    if ($res){
        while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
		$AveragePop = $newArray['AveragePop'];
            	
	            echo "The average population of states having more than $N confirmed people : $AveragePop</br>";
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