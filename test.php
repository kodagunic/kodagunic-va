<?php
    include "inc/header1.php";
    include "inc/nav1.php";
    include "district/getdistrict.php";    
?>

    <div class="container form-group">
        <form action="testpreview.php" name="testform" method="post">
        
            <div class="form-group">
                <label for="testname" class="form-label">Name:</label>
                <div class="input-group">
                    <input type="text" name="testname"  class="form-control" required>
                </div>
            </div>
            <div class="form-group my-3">
                <label for="testmobile" class="form-label">Mobile:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">+91</span>
                    </div>
                    <input type="number" name="testmobile"  class="form-control" required>
                </div>
            </div>
            <div class="form-group my-3">
                <label for="testemail">Email address:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <span class="fa fa-envelope" aria-hidden="true"></span> </span>
                    </div>
                    <input type="text" class="form-control" id="testemail" placeholder="Enter email" name="testemail" required>
                </div>
            </div>
            <div class="form-group my-3">
                <label for="testdistrictddl">Select District:</label>
                <div class="input-group">
                    <select name="testdistrictddl">
                        <option value="0" selected="" disabled="">Select District</option>
                        <?php 
                            $newObj = new District();
                            $dists = $newObj->getDistricts();
                            foreach($dists as $key => $dist) :
                        ?>
                        <option value="<?php echo $dist['district_code'] ?>">
                            <?php echo $dist['district_name_eng'] ?> / <?php echo $dist['district_name_kan'] ?>
                        </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <!--
                <div class="form-group my-3">
                    Captcha Code: <span id="error-captcha" class="demo-error">
                                    <?php //if(isset($error_message)) { echo $error_message; } ?>
                                </span>
                    <input name="captcha_code" type="text" class="demo-input captcha-input">
                </div>
                            -->
            </div>
            <button type="submit" class="btn btn-primary">PREVIEW</button>
            <button type="reset" class="btn btn-danger">CANCEL</button>
        </form>
    </div>    

<?php
    include "inc/footer.php";
    include "inc/script1.php";
?>