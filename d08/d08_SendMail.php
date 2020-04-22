<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Send Mail</title>
    </head>
    <body> 
        <div class="container">
            <h2>Send mail Demo</h2>
            <hr>

            <form method="POST">
                <p>
                    Recipient: <input type="text" name="txtR" id="txtR" value="abc@gmail.com" required/>
                </p>
                <p>
                    Subject: <input type="text" name="txtSub" id="txtSub" value="Topic: " required/>
                </p>
                <p>Message:
                  <textarea name="txtBody" id="txtBody" cols="30" rows="10">Test Mail Demo</textarea>
                </p>
                <p><input type="submit" name="btSend" value="Send">
                    <input type="reset" name="btReset" value="Reset"></p>
            </form>


        </div>
        <?php
        // phan xu ly cua action page chi duoc thuc hien sau khi web visiter bam nut send
        if(isset($_POST["btSend"]) == TRUE){
            //lay thong tin nhap tren form
            $to = $_POST["txtR"];
            $from = "From: thuylm2020gmail.com";
            $subject = $_POST["txtSub"];
            $message = $_POST["txtBody"];
            
            $r = mail($to, $subject, $message, $from);
            if($r){
                echo "<script>alert('send mail succed!')</scipt>";
            }
            else{
                echo "<script>alert('Error: Send Mail fail!')</scipt>";
            }
            
        }
        ?>
    </body>
</html>