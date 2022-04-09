<?php
session_start();
require "includes/database_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Medical History</title>

    <link rel="stylesheet" href="css/fam_med_hist.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/common.css">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
</head>
<body class="bodyy">
    <div class="main_panel">
        <div>
            <h1 class="h1t">Family Medical History</h1>
            <hr class="breakline"/>
        </div>
        <?php 
$uname=$_SESSION['username'];

$sql_4 = "SELECT * FROM fam_med_history WHERE user = '$uname'";

$result_1 = mysqli_query($conn, $sql_4);

if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong!";
    return;
}
?>
        <div>
            <table class="tablediv">
            <form id="hist-form" class="form" role="form" method="post" action="api/hist_submit.php">
            <tr>
                    <th >
                        Health Conditions
                    </th>
                    <th >YES</th>
                    <th>NO</th>
                    <th>Don't Know</th>
                    <th>Relation with that Person</th>
                </tr>
                <!--no bottom text-->
                <tr >
                    <td class="smo" style="padding-left: 120px; border-bottom: 0px; padding-top: 20px;">
                        Smoking
                        
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">                    
                        <input type="radio" name="smoking" value="YES" <?=$user['smoking']=="YES" ? "checked" : ""?> >   
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">
                        <input type="radio" name="smoking" value="NO"  <?=$user['smoking']=="NO" ? "checked" : ""?>>
                    </td>
                    <td style="padding-left: 35px; border-bottom: 0px; padding-top: 30px;"><input type="radio" name="smoking" value="DONTKNOW" <?=$user['smoking']=="DONTKNOW" ? "checked" : ""?> >
                    
                    </td>
                    
                    <td style=" border-bottom: 0px; padding-top: 20px;">
                        <input type="text" class="ip1" name="relation_smoking" value="">
                    </td>
                </tr>
                <tr>
                    <td><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


                
                 <tr>
                    <td class="smo" style="padding-left: 120px; ">
                        <div>
                        Alcohol <br>
                        <p style="font-size: 15px; display: relative; color: gray;">beer . wine . liquor</p>
                    </div>
                    </td>
                    <td>                    
                    <input type="radio" name="alcohol" value="YES" <?=$user['alcohol']=="YES" ? "checked" : ""?> >
                    </td>
                    <td>
                    <input type="radio" name="alcohol" value="NO" <?=$user['alcohol']=="NO" ? "checked" : ""?> >
                    </td>
                    <td style="padding-left: 35px"><input type="radio" name="alcohol" value="DONTKNOW" <?=$user['alcohol']=="DONTKNOW" ? "checked" : ""?> >
</td>
                    <td>
                        <input type="text" class="ip1">
                    </td>
                </tr>
       
                <tr>
                    <td class="smo" style="padding-left: 120px; ">
                        <div>
                        Drugs <br>
                        <p style="font-size: 15px; display: relative; color: gray;">heroin · cocaine · marijuana</p>
                    </div>
                    </td>
                    <td>                    
                    <input type="radio" name="drugs" value="YES" <?=$user['drugs']=="YES" ? "checked" : ""?> >
                    </td>
                    <td>
                    <input type="radio" name="drugs" value="NO" <?=$user['drugs']=="NO" ? "checked" : ""?> >
                    </td>
                    <td style="padding-left: 35px"><input type="radio" name="drugs" value="DONTKNOW" <?=$user['drugs']=="DONTKNOW" ? "checked" : ""?> >
</td>
                    <td>
                        <input type="text" class="ip1">
                    </td>
                </tr>

                <tr >
                    <td class="smo" style="padding-left: 120px; border-bottom: 0px; padding-top: 20px;">
                        High Blood Pressure
                        
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">                    
                    <input type="radio" name="bp" value="YES" <?=$user['bp']=="YES" ? "checked" : ""?> > 
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">
                    <input type="radio" name="bp" value="NO" <?=$user['bp']=="NO" ? "checked" : ""?> >
                    </td>
                    <td style="padding-left: 35px; border-bottom: 0px; padding-top: 30px;"><input type="radio" name="bp" value="DONTKNOW" <?=$user['bp']=="DONTKNOW" ? "checked" : ""?> >
                    
                    </td>
                    
                    <td style=" border-bottom: 0px; padding-top: 20px;">
                        <input type="text" class="ip1">
                    </td>
                </tr>
                <tr>
                    <td><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                
                <tr >
                    <td class="smo" style="padding-left: 120px; border-bottom: 0px; padding-top: 20px;">
                        Autism
                        
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">                    
                    <input type="radio" name="autism" value="YES" <?=$user['autism']=="YES" ? "checked" : ""?> >  
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">
                    <input type="radio" name="autism" value="NO" <?=$user['autism']=="NO" ? "checked" : ""?> >
                    </td>
                    <td style="padding-left: 35px; border-bottom: 0px; padding-top: 30px;"><input type="radio" name="autism" value="DONTKNOW" <?=$user['autism']=="DONTKNOW" ? "checked" : ""?> >
                    
                    
                    </td>
                    
                    <td style=" border-bottom: 0px; padding-top: 20px;">
                        <input type="text" class="ip1">
                    </td>
                </tr>
                <tr>
                    <td><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


                 <tr>
                    <td class="smo" style="padding-left: 120px; ">
                        <div>
                        Birth Defects <br>
                        <p style="font-size: 15px; display: relative; color: gray;">Spina bafida · Heart defects</p>
                    </div>
                    </td>
                    <td>                    
                    <input type="radio" name="birthdefects" value="YES" <?=$user['birthdefects']=="YES" ? "checked" : ""?> >  
                    </td>
                    <td>
                    <input type="radio" name="birthdefects" value="NO" <?=$user['birthdefects']=="NO" ? "checked" : ""?> >
                    </td>
                    <td style="padding-left: 35px;"><input type="radio" name="birthdefects" value="DONTKNOW" <?=$user['birthdefects']=="DONTKNOW" ? "checked" : ""?> >
                    
                    <td>
                        <input type="text" class="ip1">
                    </td>
                </tr>
                

                <tr>
                    <td class="smo" style="padding-left: 120px; ">
                        <div>
                        Blood Clots <br>
                        <p style="font-size: 15px; display: relative; color: gray;">Deep Vien Thrombosis [DVT]</p>
                    </div>
                    </td>
                    <td>                    
                    <input type="radio" name="bloodclots" value="YES" <?=$user['bloodclots']=="YES" ? "checked" : ""?> >  
                    </td>
                    <td>
                    <input type="radio" name="bloodclots" value="NO" <?=$user['bloodclots']=="NO" ? "checked" : ""?> >
                    </td>
                    <td style="padding-left: 35px;"><input type="radio" name="bloodclots" value="DONTKNOW" <?=$user['bloodclots']=="DONTKNOW" ? "checked" : ""?> >
                    
                    <td>
                        <input type="text" class="ip1">
                    </td>
                </tr>


                <tr >
                    <td class="smo" style="padding-left: 120px; border-bottom: 0px; padding-top: 20px;">
                        Diabetes
                        
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">                    
                    <input type="radio" name="diabetes" value="YES" <?=$user['diabetes']=="YES" ? "checked" : ""?> >  
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">
                    <input type="radio" name="diabetes" value="NO" <?=$user['diabetes']=="NO" ? "checked" : ""?> >
                    </td>
                    <td style="padding-left: 35px; border-bottom: 0px; padding-top: 30px;"><input type="radio" name="diabetes" value="DONTKNOW" <?=$user['diabetes']=="DONTKNOW" ? "checked" : ""?> >
                    
                    </td>
                    
                    <td style=" border-bottom: 0px; padding-top: 20px;">
                        <input type="text" class="ip1">
                    </td>
                </tr>
                <tr>
                    <td><br></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> 

            </table>

            
                
                  
                  
                        
              
            
        </div>

        <div class="oth">
            
            <h2 style="font-size: 25px; padding-top: 20px;">If you or someone in your families has a medical condition that is not listed above, please write about it here:
            </h2>
            
            <textarea id="demo-textarea">
                  </textarea>

            <input type="submit" value="OK" class="btnn">
        </div>
</form>

        


    </div>

    


  
    
</body>
</html>