<?php
    require "header.php";
?>


<!DOCTYPE html>

<main>
    <section id = "main_section">
        <article id = "page1">
     <h1>Show and Calculate various results (Ethnicity, Gender, Time)</h1><br><br>
    
        <h2>Confirmed number of people by State, Ethnicity, Gender</h2><br>
            <form action="select1.php" method="POST">
                <p>State: <input type="text" name="State" size="10" placeholder="Texas"></p>
                <p>Ethnicity: <input type="text" name="Ethnicity" size="10" placeholder="Cases_White"></p>
                <p>Gender: <input type="text" name="Gender" size="10" placeholder="women"></p>
                <p></p>
                <input type="submit" value="search">
            </form><br><br>
        <p></p>
        <h2>Average population of states having more than N confirmed people</h2><br>
            <form action="advanced1.php" method="POST">
                <p>N: <input type="number" name="ConfirmedCases" min="10" max="50000000" size="10"></p><br>
                <p></p>
                <input type="submit" value="calculate">
            </form><br><br>
        <p></p>
        <h2>Ratio (# confirmed / # of population)</h2><br>
            <form action="advanced2.php" method="POST">
                <p>State: <input type="text" name="ratio" size="10" placeholder="California"></p>
                <p></p><br>
                <input type="submit" value="calculate">
            </form><br>
        <p></p>
        <h2>Ratio (# sum of confirmed ethnicity / # of cases in total) </h2><br>
            <form action="advanced3.php" method="POST">
                <select name="ethnicity">
		<option value="Cases_Total" selected>Total</option>
		<option value="Cases_White">White</option>
		<option value="Cases_Black">Black</option>
		<option value="Cases_LatinX">Latin</option>
		<option value="Cases_Asian">Asian</option>
		<option value="Cases_AIAN">American Indian or Alaska Nativel</option>
		<option value="Cases_NHPI">Native Hawaiian and Pacific Islander</option>
		<option value="Cases_Multiracial">Two or more races</option>
		<option value="Cases_Other">Others</option>
		<option value="Cases_Unknown">Unknown</option>
		<option value="Cases_Ethnicity_Hispanic">Hispanic</option>
		<option value="Cases_Ethnicity_NonHispanic">Non-Hispanic</option>
		<option value="Cases_Ethnicity_Unknown">Ethnicity-Unknown</option>
	   </select>
	   <p></p><br>
               <input type="submit" value="calculate"><br><br>
            </form>
        <p></p>
        <p></p>
        <p></p>
        <h2>Increase/Decrease Rate</h2><br>
            <form action="advanced4.php" method="POST">
	    <p>country: <input type="text" name="country" size="10" placeholder="Korea">
	    <p>month: <input type="number" name="month" size="10"></p>
	    <p></p><br>
                <input type="submit" value="calculate">		 
        <p></p>
</article>
</main>
 <footer id="main_footer">
            Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>