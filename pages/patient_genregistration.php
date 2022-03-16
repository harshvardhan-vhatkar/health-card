<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Information Form</title>
<link rel="stylesheet" href="css/genregistration.css">
</head>
<body>
    <div class="container">
      <center>  <h1> General Information Form</h1> </center>  
      <div class="content">
        <form action="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Full Name</span>
              <input type="text" placeholder="Enter your name" required>
            </div>
        <div class="input-box">
          <span class="details">DOB</span>
          <input autocomplete="off" class="text" id="MoveInDate" name="DOB" placeholder="DD-MM-YYYY" type="date" min="2022-01-26" max="2023-12-31" spellcheck="false" value="2022-01-26">
        </div>
        <div class="input-box">
          <span class="details">Weight</span>
          <input type="text" placeholder="Enter your weight" required>
        </div> 
        <div class="input-box">
          <span class="details">Height</span>
          <input type="text" placeholder="Enter your height" required>
        </div> 
        <div class="input-box">
          <span class="details">Phone Number</span>
          <input type="text" placeholder="Enter your number" required>
        </div> 
        <div class="input-box">
          <span class="details">Aadhar ID</span>
          <input type="text" placeholder="Enter your aadhar no." required>
        </div> 
        <div class="input-box">
          <span class="details">Blood Group</span>
          <input type="text" placeholder="Enter your blood group" required>
        </div> 
        <div class="input-box">
          <span class="details">Sex</span>
          <input type="text" placeholder="Enter your gender" required>
        </div> 
<input type="button" value="Submit"/>

                </div>
            </div>

        </form>

    </div>

</body>
</html>