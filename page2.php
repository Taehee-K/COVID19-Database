<?php
    require "header.php";
?>


<!DOCTYPE html>

    
<main>
    <section id = "main_section">
        <article id = "page2">
        <h1>Insert, Update, Delete</h1><br><br>
        <h2>Insert newly updates in time_cases</h2>
            <form action="insert.php" method="POST"><br>
                <p>Country-Month: <input type="text" name="Country-Month" size="10" placeholder="KOR-Nov"></p>
	    <p>Confirmed: <input type="text" name="Confirmed" size="10"></p>
	    <p>Deaths: <input type="text" name="Deaths" size="10"></p>
                <p></p>
                <input type="submit" value="insert">
            </form>
        <p></p><br><br>
        <h2>Delete records in time_cases inserted by mistake </h2><br>
            <form action="delete.php" method="POST">
                <p>Country-Month: <input type="text" name="Country-Month" size="10" placeholder="KOR-Nov"></p>
                <p></p>
                <input type="submit" value="delete">
            </form>
        <p></p><br><br>
        <h2>Update data you want to modify</h2><br>
            <form action="update.php" method="POST">
                <p>date: <input type="text" name="date" size="10" placeholder="2020-11-19"></p>
	    <p>state: <input type="text" name="state" size="10" placeholder="Alaska"></p>
	    <p>women: <input type="text" name="women" size="10"></p>
	    <p>men: <input type="text" name="men" size="10"></p>
	    
                <p></p><br>
	    <input type="reset" value="Reset">
                <input type="submit" value="update">
            </form><br><br>
	<h2>Commit transaction : insert small countries in table with one click</h2>
		<form action = "transaction.php" method = "POST">
		<input type="submit" name="commit" class="button" value="commit!"> 
		  
                </article>
            </section>


</main>
 <footer id="main_footer">
            Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>
        