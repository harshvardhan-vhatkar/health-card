<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Medical History</title>

    <link rel="stylesheet" href="../css/fam_med_hist.css">
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

        <div>
            <table class="tablediv">
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
                        <input type="radio" name="smo" value="YES" >   
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">
                        <input type="radio" name="smo" value="NO"  >
                    </td>
                    <td style="padding-left: 35px; border-bottom: 0px; padding-top: 30px;"><input type="radio" name="smo" value="DONTKNOW" >
                    
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
                <!--bottom text present-->
                <tr>
                    <td class="smo" style="padding-left: 120px; ">
                        <div>
                        Alcohol <br>
                        <p style="font-size: 15px; display: relative; color: gray;">beer . wine . liquor</p>
                    </div>
                    </td>
                    <td>                    
                        <input type="radio" name="alc" value="YES">   
                    </td>
                    <td>
                        <input type="radio" name="alc" value="NO"  >
                    </td>
                    <td style="padding-left: 35px;"><input type="radio" name="alc" value="DONTKNOW" ></td>
                    <td>
                        <input type="text" class="ip1">
                    </td>
                </tr>
                <!--till here-->
                <tr>
                    <td class="smo" style="padding-left: 120px; ">
                        <div>
                        Drugs <br>
                        <p style="font-size: 15px; display: relative; color: gray;">heroin · cocaine · marijuana</p>
                    </div>
                    </td>
                    <td>                    
                        <input type="radio" name="dru" value="YES" >   
                    </td>
                    <td>
                        <input type="radio" name="dru" value="NO"  >
                    </td>
                    <td style="padding-left: 35px;"><input type="radio" name="dru" value="DONTKNOW" ></td>
                    <td>
                        <input type="text" class="ip1">
                    </td>
                </tr>

                <tr >
                    <td class="smo" style="padding-left: 120px; border-bottom: 0px; padding-top: 20px;">
                        High Blood Pressure
                        
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">                    
                        <input type="radio" name="hbp" value="YES" >   
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">
                        <input type="radio" name="hbp" value="NO"  >
                    </td>
                    <td style="padding-left: 35px; border-bottom: 0px; padding-top: 30px;"><input type="radio" name="hbp" value="DONTKNOW" >
                    
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
                        <input type="radio" name="aut" value="YES" >   
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">
                        <input type="radio" name="aut" value="NO"  >
                    </td>
                    <td style="padding-left: 35px; border-bottom: 0px; padding-top: 30px;"><input type="radio" name="aut" value="DONTKNOW" >
                    
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

                 <!--bottom text present-->
                 <tr>
                    <td class="smo" style="padding-left: 120px; ">
                        <div>
                        Birth Defects <br>
                        <p style="font-size: 15px; display: relative; color: gray;">Spina bafida · Heart defects</p>
                    </div>
                    </td>
                    <td>                    
                        <input type="radio" name="bir" value="YES">   
                    </td>
                    <td>
                        <input type="radio" name="bir" value="NO"  >
                    </td>
                    <td style="padding-left: 35px;"><input type="radio" name="bir" value="DONTKNOW" ></td>
                    <td>
                        <input type="text" class="ip1">
                    </td>
                </tr>
                
                <!--bottom text present-->
                <tr>
                    <td class="smo" style="padding-left: 120px; ">
                        <div>
                        Blood Clots <br>
                        <p style="font-size: 15px; display: relative; color: gray;">Deep Vien Thrombosis [DVT]</p>
                    </div>
                    </td>
                    <td>                    
                        <input type="radio" name="blo" value="YES">   
                    </td>
                    <td>
                        <input type="radio" name="blo" value="NO"  >
                    </td>
                    <td style="padding-left: 35px;"><input type="radio" name="blo" value="DONTKNOW" ></td>
                    <td>
                        <input type="text" class="ip1">
                    </td>
                </tr>


                <tr >
                    <td class="smo" style="padding-left: 120px; border-bottom: 0px; padding-top: 20px;">
                        Diabetes
                        
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">                    
                        <input type="radio" name="dia" value="YES" >   
                    </td>
                    <td style="border-bottom: 0px; padding-top: 30px;">
                        <input type="radio" name="dia" value="NO"  >
                    </td>
                    <td style="padding-left: 35px; border-bottom: 0px; padding-top: 30px;"><input type="radio" name="dia" value="DONTKNOW" >
                    
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

        


    </div>

    


  
    
</body>
</html>