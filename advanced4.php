<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
<?php
    require 'includes/dbh.inc.php';
    $country = $_POST['country'];
    $month = $_POST['month'];
    $month_before = $_POST['month']-1;
    $month_before_before = $_POST['month']-2;
    
    $sql1 = "SELECT month, confirmed FROM time_cases WHERE month=$month and country='".$country."'";
    $sql2 = "SELECT month, confirmed FROM time_cases WHERE month=$month_before and country='".$country."'";
    $sql3 = "SELECT month, confirmed FROM time_cases WHERE month=$month_before_before and country='".$country."'";

    $res1 = mysqli_query($conn, $sql1);
    if ($res1){
        while ($newArray = mysqli_fetch_array($res1, MYSQLI_ASSOC)){
		$confirmed = $newArray['confirmed'];
		//echo "$confirmed cases at $month</br>";
	}   
    }
    else {
            printf("Could not retrieve records: %s\n", mysqli_error($conn));
    }
    

    $res2 = mysqli_query($conn, $sql2);
    if ($res2){
        while ($newArray2 = mysqli_fetch_array($res2, MYSQLI_ASSOC)){
		$confirmed_before = $newArray2['confirmed'];
		//echo "$confirmed_before cases at $month_before</br>";
	}
        
    } 
    else {
            printf("Could not retrieve records: %s\n", mysqli_error($conn));
    }

    $res3 = mysqli_query($conn, $sql3);
    if ($res3){
        while ($newArray3 = mysqli_fetch_array($res3, MYSQLI_ASSOC)){
		$confirmed_before_before = $newArray3['confirmed'];
		//echo "$confirmed_before_before cases at $month_before_before</br>";
	}
        
    } 
    else {
            printf("Could not retrieve records: %s\n", mysqli_error($conn));
    }

    $a=$confirmed-$confirmed_before;
    $b=$confirmed_before-$confirmed_before_before;
    $final_result=$a/$b*100;
    echo " $a number of people were confirmed during month $month </br>";
    echo " $b number of people were confirmed during the previous month </br>";
    echo " Therefore, the % of increased number of confirmed cases in '".$country."' compared to the previous month is : $final_result";
    mysqli_free_result($res1);
    // mysqli_close($conn); 
    mysqli_free_result($res2);
    // mysqli_close($conn);
    mysqli_free_result($res3);
    mysqli_close($conn);
    

    
?>

                </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>