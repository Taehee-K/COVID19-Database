<?php
    require "header.php"
?> 
            
        <main>  
            <section id = "main_section">
                <article>
<?php
    require 'includes/dbh.inc.php';
    $mystring = $_POST['Country-Month'];
    if (strpos($mystring, 'KOR')!==false){
	$country = 'Korea';
	//echo "the country is '".$country."'";
    }
    else {
	$country = 'United States';
    }

    if (strpos($mystring, 'Jan')!==false){
	$month = 1;
    } elseif (strpos($mystring, 'Feb')!==false){
	$month = 2;
    } elseif (strpos($mystring, 'Mar')!==false){
	$month = 3;
    } elseif (strpos($mystring, 'Apr')!==false){
	$month = 4;
    } elseif (strpos($mystring, 'May')!==false){
	$month = 5;
    } elseif (strpos($mystring, 'Jun')!==false){
	$month = 6;
    } elseif (strpos($mystring, 'Jul')!==false){
	$month = 7;
    } elseif (strpos($mystring, 'Aug')!==false){
	$month = 8;
    } elseif (strpos($mystring, 'Sep')!==false){
	$month = 9;
    } elseif (strpos($mystring, 'Oct')!==false){
	$month = 10;
    } elseif (strpos($mystring, 'Nov')!==false){
	$month = 11;
    } elseif (strpos($mystring, 'Dec')!==false){
	$month = 12;}

    $sql = "INSERT INTO time_cases VALUES ('".$_POST["Country-Month"]."', '".$country."', '$month', '".$_POST["Confirmed"]."', '".$_POST["Deaths"]."')";
    $res=mysqli_query($conn, $sql);
    
  
    if ($res==TRUE){
         	echo "A record has been inserted";
	} else {
		printf("Could not insert record: %s\n", mysqli_error($conn));
	} 
    mysqli_close($conn);
    
?>                </article>
            </section>
        </main>
        <footer id="main_footer">
                Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>