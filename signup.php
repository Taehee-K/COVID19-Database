<?php
    require "header.php"
?>

        <main>
            <section id = "main_section">
                <article id = "signup">
                    <h1>Signup</h1>
                    <form action = "includes/signup.inc.php" method = "post">
                        <p><input type = "text" name = "uid" placeholder = "Username">
                        <p><input type = "text" name = "mail" placeholder = "E-mail">
                        <p><input type = "password" name = "pwd" placeholder = "Password">
                        <p><input type = "password" name = "pwd-repeat" placeholder = "Repeat Password">
                        <p><button type = "submit" name = "signup-submit">Signup</button>
                    </form>
                </article>
            </section>
        </main>
        <footer id="main_footer">
            Copyright &copy;2020 by Taehee Kim and Hyoyoung Lho, BigDataApplication
        </footer>
