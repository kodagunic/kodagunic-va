<?php

session_start();
    include "inc/header1.php";
    include "inc/nav1.php";
    require('inc/insTest.php');
    include "inc/script1.php";
    $obj = new insTest();
    $flag=0;
    if(isset($_POST['testsubmit']))
    {
        $status = '';
        if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
        if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0){
    
                //$ref = $_POST['refid'];
                echo '<script type="text/javascript">'; 
                echo 'alert("Incorrect Captcha..!");';
                //echo 'window.location.href = "try.php";';
                echo '</script>';
            
        // $status = "<p style='color:#FFFFFF; font-size:20px'>
        // <span style='background-color:#FF0000;'>Entered captcha code does not match! 
        // Kindly try again.</span></p>";
        }else{
            
        $status = "<p align='center' style='color:#FFFFFF; font-size:20px'>
        <span style='background-color:#46ab4a;'>Apllication Submitted Succesfully.</span>
        </p>";	
        $ret_val = $obj->insTest();
        //$GLOBALS['ref'] = $GLOBALS['data'];
        
        if($ret_val==1)
        {
            echo $status;
            //$ref = $_POST['refid'];
            echo '<script type="text/javascript">'; 
            echo 'alert("Record Saved Successfully with reference no:");';
            //echo 'window.location.href = "try.php";';
            echo '</script>';
        }
        else{
            echo '<script type="text/javascript">'; 
            echo 'alert("Wrong Captcha..!");';
            echo '</script>';
        }
            }
        }
        
        
    }   




?>
<html>
<script>
//Refresh Captcha
function validateForm() {
  let x = document.forms["form"]["captcha"].value;
  if (x == "") {
    alert("Please enter captcha..!");
    return false;
  }
}

function refreshCaptcha(){
    var img = document.images['captcha_image'];
    img.src = img.src.substring(
		0,img.src.lastIndexOf("?")
		)+"?rand="+Math.random()*1000;
}
</script></head><body>
    <div class="container form-group">
        <form method="post" name="form" id="form" action="" onsubmit="return validateForm()">
            
            <div class="col-md-12 p-5 table-responsive">
                <h4 class="text-center">Test Form Preview</h4>
                <table class="table table-bordered text-nowrap">
                    <tr>
                        <td width="10%">Name:</td>
                        <td>
                            <?php echo $_POST['testname']; ?>
                            <input type="hidden" name="testname" value="<?php echo $_POST['testname']; ?>">
                        </td>
                    </tr>
                    <tr>
                                <td width="10%">Mobile:</td>
                                <td>
                                    <?php echo $_POST['testmobile']; ?>
                                    <input type="hidden" name="testmobile" value="<?php echo $_POST['testmobile']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">Email address:</td>
                                <td>
                                    <?php echo $_POST['testemail']; ?>
                                    <input type="hidden" name="testemail" value="<?php echo $_POST['testemail']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td width="10%">District:</td>
                                <td>
                                    <?php echo $_POST['testdistrictddl']; ?>
                                    <input type="hidden" name="testdistrictddl" value="<?php echo $_POST['testdistrictddl']; ?>">
                                </td>
                            </tr><tr>
                            <td colspan='2'>
                            <input type="text" name="captcha" id="captcha" placeholder="Captcha" class="form-control" required>
<p><br />
<img src="captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>
</p>
<p>
<a href='javascript: refreshCaptcha();'>Refresh</a>
</p>

                            </td>
                        </tr>
                </table>

            </div>
            <div align="center">
                <a href="test.php" class="btn btn-danger"><-- BACK to TEST FORM</a>
              
                <button type="submit" name="testsubmit" id="testsubmit" class="btn btn-primary" >SUBMIT</button>
                         
            </div>
           
        </form>
    </div>
            </body>
            </html>
<?php
    include "inc/footer.php";
    include "inc/script1.php";
?>