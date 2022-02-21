<?php 
$outmessage = array();
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$vn = false;
$ve = false;
$vm = false;

if(isset($_POST["submit"])){
    if(strlen($name) > 100){
        $outmessage[] = "very long name";
    }elseif(empty($_POST["name"])){
        $outmessage[] = "Please, enter your name";
    }else{
        $vn = true;
    }

    if(empty($_POST["email"])){
        $outmessage[] = "Please, enter your email";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $outmessage[] = "invalid email";
    }else{
        $ve = true;
    }

    if(strlen($message)>255){
        $outmessage[] = "message is very long";
    }elseif(empty($_POST["message"])){
        $outmessage[] = "Please, enter the message";
    }else{
        $vm = true;
    }

    if($vn && $ve && $vm){
        die("<h2>Thanks for contacting us</h2>
        Name: $name<br/>
        Email: $email<br/>
        Message: $message");
    }


}

function get_default($field){
    if(isset($_POST[$field])){
        echo $_POST[$field];
    }else{
        echo "";
    }
}


?>

<html>
    <head>
        <title> contact form </title>


    </head>

    <body>
        <h3> Contact Form </h3>
        <div id="after_submit">
            <?php 
                foreach($outmessage as $line)
                    echo "** $line <br/>";
            ?>
        </div>
        <form id="contact_form" action="indie.php" method="POST" enctype="multipart/form-data">

            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="<?php get_default("name") ?>" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="<?php get_default("email") ?>" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30"><?php get_default("message") ?></textarea><br />

            </div>

            <input id="submit" name="submit" type="submit" value="Send email" />
            <input id="clear" name="clear" type="reset" value="clear form" />

        </form>
    </body>

</html>