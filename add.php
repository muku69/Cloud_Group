<html>
    <head> 
        <title>REGISTER</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico">
        <style>
            body{
                font-family: Times New Roman;
            }
            #wrapper{
                background: #EDF4E3;
                width: 600px;
                margin: 0 auto;
            }
            #header_div{
                background: #404040;
                width: 600px;
                height: 25px;
                text-align: right;
                margin-bottom: 30px;
            }
            #header{
                padding-right: 10px;
                color: white;
                font-variant: small-caps;
            }
            #header2{
                padding-right: 20px;
                color: white;
                font-variant: small-caps;
            }
            .create{
                width: 585px;
                margin: 0 auto;
                border: #EDF4E3 5px dotted;
                background-color: #DCDCDC;
            }
            h4{
                text-align: center;
            }
            table, tr, td{
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 0 auto;
            }
            .category {
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 30px 20px;
                color: white;
                background-color: #404040;
                text-align: right;
            }    
            .value{
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 30px 20px;
                min-width: 150px;
                max-width: 400px;
            }
            #home{
                margin-left: 10px;
                padding-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <?php
        include 'db.php';
            
            $name = $_POST["Name"];
            $cebu = $_POST["Address_in_Cebu"];
            $bday = $_POST["Birthday"];
            $email = $_POST["Email_Address"];
            $mobile = $_POST["Mobile_Number"];
        ?>
        <div id=wrapper>
            <div id=header_div>
                <label id="header">Cloud Group</label>
                <label id="header2">Register</label>
            </div>
            <div class = create>
            <?php
                $sql = "INSERT INTO profile (Name, Address_in_Cebu, Birthday, Email_Address, Mobile_Number)
                        values ('$name', '$cebu', '$bday', '$email', '$mobile')";  
            
                $username = "select * from profile where Name = '$name'";
                $savename = $conn->query($username);
                $namerow = $savename->num_rows;
                
                $usermail = "select * from profile where Email_Address = '$email'";
                $savemail = $conn->query($usermail);
                $mailrow = $savemail->num_rows;
                
                $userphone = "select * from profile where Mobile_Number = '$mobile'";
                $savephone = $conn->query($userphone);
                $phonerow = $savephone->num_rows;
                
                if($name == ""){
                    echo "<h4>Please set Name.</h4>";
                }
                elseif ($namerow == 1){
                    echo "<h4>Please specify Name that is not registered.</h4>";
                }
                if($cebu == ""){
                        echo "<h4>Please set Address.</h4>";
                }
                if($bday == ""){
                        echo "<h4>Please set Date of Birth.</h4>";
                }
                if($email == ""){
                        echo "<h4>Please set Email.</h4>";
                }
                elseif ($mailrow == 1){
                    echo "<h4>Please specify Email that is not registered.</h4>";
                }
                if($mobile == ""){
                        echo "<h4>Please set Phone Number.</h4>";
                }
                elseif ($phonerow == 1){
                    echo "<h4>Please specify Phone Number that is not registered.</h4>";
                }
                if (is_numeric($mobile)){
                }
                elseif($mobile == ""){
                }    
                else{
                    echo "<h4>Please set correct Phone number.</h4>";
                }
                if($name != "" && $cebu != "" && $bday != "" && $email != "" && $mobile != "" && 
                       $namerow == 0 && $mailrow == 0 && $phonerow == 0){
                    $conn->query($sql);
                    echo "<h4>New member is registered successfully.</h4>";
                } 
            ?>
            </div>
            <br>
            <table>
                <tr>
                    <td class="category">Name :</td>
                    <td class="value"><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td class="category">Address :</td>
                    <td class="value"><?php echo $cebu; ?></td>
                </tr>
                <tr>
                    <td class="category">Date of Birth :</td>
                    <td class="value"><?php echo $bday; ?></td>
                </tr>
                <tr>
                    <td class="category">Email :</td>
                    <td class="value"><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td class="category">Phone :</td>
                    <td class="value"><?php echo $mobile; ?></td>
                </tr>    
            </table>
            <a href='main.php' >
                <img src="images/home.png" width="40" id="home" alt="HOME icon">
            </a>
        </div>    
    </body>
</html>    