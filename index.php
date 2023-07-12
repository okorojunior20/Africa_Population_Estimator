<?php 
require("actions.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
<div style="background-color:white;width:100%;height:16vh;border-radius:30px;box-shadow:0px 2px 2px 5px #E9DEDE;display:flex;justify-content: center;align-content: center;">
  <div style="font-family: 'Courier New', Courier, monospace;margin-top:10px">
  <h1><center>Africa Population Estimator</center><h1></div></div>
<center>                                                                                                      
    <form action="" method="POST">
                <br><br>
               
        <!-- //   foreach ($Countrylist as $key) { -->
        <!-- //      echo "<option value='".$Countrylist['key']."'>" . $Countrylist['key']. "</option>"; -->
        
        <!-- //   foreach ($Countrylist as $key) {
        //      echo $Countrylist['key']."'>" . $Countrylist['key']. "</option>";
        //   }       -->
        
                
      <select name="Countries1"  style="width:180px;height:30px;">
        <option value="Nigeria" name="Nigeria">Nigeria</option>
        <option value="Ethiopia" name="Ethiopia">Ethiopia</option>
        <option value="Egypt">Egypt</option>
         <option value="Morocco">Morocco</option>
         <option value="South Africa">South Africa</option>
         <option value="Kenya">Kenya</option>
         <option value="Tanzania">Tanzania</option>
         <option value="Uganda">Uganda</option>
         <option value="Algeria">Algeria</option>
         <option value="Sudan">Sudan</option>
         <option value="Angola">Angola</option>
         <option value="Mozambique">Mozambique</option>
         <option value="Ghana">Ghana</option>
         <option value="Madagascar">Madagascar</option>
         <option value="Algeria">Algeria</option>
         <option value="Cameroon">Cameroon</option>
         <option value="Côte d'Ivoire">Côte d'Ivoire</option>
         <option value="Niger">Niger</option>
         <option value="Burkina Faso">Burkina Faso</option>
         <option value="Mali">Mali</option>
         <option value="Malawi">Malawi</option>
         <option value="Zambia">Zambia</option>
         <option value="Senegal">Senegal</option>
         <option value="Chad">Chad</option>
         <option value="Somalia">Somalia</option>
         <option value="Zimbabwe">Zimbabwe</option>
         <option value="Guinea">Guinea</option>
         <option value="Rwandar">Rwanda</option>
         <option value="Benin">Benin</option>
         <option value="Burundi">Burundi</option>
         <option value="Tunisia">Tunisia</option>
         <option value="South Sudan">South Sudan</option>
         <option value="Togo">Togo</option>
         <option value="Sierra Leone">Sierra Leone</option>
         <option value="Libya">Malawi</option>
         <option value="DR Congo">DR Congo</option>
         <option value="Liberia">Liberia</option>
         <option value="Central African Republic">Central African Republic</option>
         <option value="Mauritania">Mauritania</option>
         <option value="Eritrea">Eritrea</option>
         <option value="Namibia">Namibia</option>
         <option value="Gambia">Gambia</option>
         <option value="Botswana">Botswana</option>
         <option value="Gabon">	Gabon</option>
         <option value="Lesotho">Lesotho</option>
         <option value="Guinea-Bissau">Guinea-Bissau</option>
         <option value="Equatorial Guinea">Equatorial Guinea</option>
         <option value="Seychelles">Seychelles</option>
         <option value="Sao Tome & Principe">Sao Tome & Principe</option>
         <option value="Cabo Verde">Cabo Verde</option>
         <option value="Liberia">Liberia</option>
         <option value="Central African Republic">Central African Republic</option>
         <option value="Puntland">Puntland</option>
         <option value="Cabinda">Cabinda (Angolan exclave)</option>
         <option value="Equatorial Guinea'">Equatorial Guinea'</option>

</select>
   
 
      <select name="Countries2"  style="width:180px;height:30px;">
        <option value="Nigeria" name="Nigeria">Nigeria</option>
        <option value="Ethiopia" name="Ethiopia">Ethiopia</option>
        <option value="Egypt">Egypt</option>
         <option value="Morocco">Morocco</option>
         <option value="South Africa">South Africa</option>
         <option value="Kenya">Kenya</option>
         <option value="DR Congo">DR Congo</option>
         <option value="Tanzania">Tanzania</option>
         <option value="Uganda">Uganda</option>
         <option value="Algeria">Algeria</option>
         <option value="Sudan">Sudan</option>
         <option value="Angola">Angola</option>
         <option value="Mozambique">Mozambique</option>
         <option value="Ghana">Ghana</option>
         <option value="Madagascar">Madagascar</option>
         <option value="Algeria">Algeria</option>
         <option value="Cameroon">Cameroon</option>
         <option value="Côte d'Ivoire">Côte d'Ivoire</option>
         <option value="Niger">Niger</option>
         <option value="Burkina Faso">Burkina Faso</option>
         <option value="Mali">Mali</option>
         <option value="Malawi">Malawi</option>
         <option value="Zambia">Zambia</option>
         <option value="Senegal">Senegal</option>
         <option value="Chad">Chad</option>
         <option value="Somalia">Somalia</option>
         <option value="Zimbabwe">Zimbabwe</option>
         <option value="Guinea">Guinea</option>
         <option value="Rwandar">Rwanda</option>
         <option value="Benin">Benin</option>
         <option value="Burundi">Burundi</option>
         <option value="Tunisia">Tunisia</option>
         <option value="South Sudan">South Sudan</option>
         <option value="Togo">Togo</option>
         <option value="Sierra Leone">Sierra Leone</option>
         <option value="Libya">Malawi</option>
         <option value="Congo">Congo</option>
         <option value="Liberia">Liberia</option>
         <option value="Central African Republic">Central African Republic</option>
         <option value="Mauritania">Mauritania</option>
         <option value="Eritrea">Eritrea</option>
         <option value="Namibia">Namibia</option>
         <option value="Gambia">Gambia</option>
         <option value="Botswana">Botswana</option>
         <option value="Gabon">	Gabon</option>
         <option value="Lesotho">Lesotho</option>
         <option value="Guinea-Bissau">Guinea-Bissau</option>
         <option value="Equatorial Guinea">Equatorial Guinea</option>
         <option value="Seychelles">Seychelles</option>
         <option value="Sao Tome & Principe">Sao Tome & Principe</option>
         <option value="Cabo Verde">Cabo Verde</option>
         <option value="Liberia">Liberia</option>
         <option value="Central African Republic">Central African Republic</option>
         <option value="Puntland">Puntland</option>
         <option value="Cabinda">Cabinda (Angolan exclave)</option>
         <option value="Equatorial Guinea'">Equatorial Guinea'</option>

</select><br><br>
    <button type="Search" name="search">Search</button>
   </form>
   <br><br><br>

   <?php
         foreach ($Countrylist as $key) {
           echo '<img src="'.$key['countryflag'] . '"style="width:60px;"> <br>';
            echo 'Country:  '. $key['Country'].'<br>';
            echo 'Capital:  '. $key['Capital'].'<br>';
            echo 'Resources:  '. $key['Resources'].'<br>';
            echo 'Population:  '. $key['Population'].'<br>'.'<br>'.'<br>';
        
        };
    ?>
          </br></br>
         
        <div style="width:100%;color:white;background-color:#646764;">
        Thanks for participating in Nwachukwu Africa Population Estimator.Use the livechat botton to leave a Feedback/Comment.🥰😍</div>

        </center>
        <script src="//code.tidio.co/m0ou2netwuchz2qaeqedniifcdyfir6g.js" async></script>
      </body>
</html>






