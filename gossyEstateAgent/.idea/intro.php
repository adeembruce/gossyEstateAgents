<hmtl>
   <?php

$firstName = "Nell";
$lastName = "Anders";
$fullName = $firstName . " " . $lastName;
?>

        <div class ='formGrid'>
            <div>
                <form action='login_process.php' mecthod='post' name='login'>
                    <p>username</p>
                    <input type = 'text' name='username' placeholder='enter username ...'
                           required /> <br>
                    <p>password</p>
                    <input type='password' name='password' placeholder='password'
                           required /> <br>
                    <input name = 'submit' type = 'submit' value = 'login' />
                </form>
            </div>

            <div class = 'navigation'>
                <?php
        include ("navigation.php")
    ?>
            </div>

            <p style="font-family:verdana"><?php echo $fullName; ?> </p>

            <?php
$numberOne = 50;
$numberTwo = 5;
$total = $numberOne * $numberTwo;
echo $total;



?>
</html>