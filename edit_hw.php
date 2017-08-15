<html>
    <head>
        <title>EDIT</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico">
        <style>
            body{
                font-family: Times New Roman;
            }
            #wrapper{
                background: #EDF4E3;
                width: 782px;
                margin: 0 auto;
            }
            #header_div{
                background: #404040;
                width: 782px;
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
            table, tr{
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 30px 20px;
            }
            #basic_info{
                margin: 0 auto;
                width: 500px;
            }
            .table_info{
                margin: 0 auto;
                margin-top: 10px;
                width: 680px;
            }
            .category{
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 30px 20px;
                background: #404040;
                text-align: right;
                color: white;
            }
            .category2{
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                text-align: right;
                padding: 10px;
                margin: 30px 20px;
            }
            .value{
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 30px 20px;
            }
            .title{
                background-color: white;
                margin-left: 51px;
                padding-right: 3px;
                padding-left: 3px;
            }
            input[type=submit] {
                padding: 10px; 
                background: #DFF276; 
                border: 1px solid #C7CAD3;
                cursor:pointer;
                border-radius: 10px;
                font-family: Georgia;
                font-weight: bold;
                margin-left: 50px;
            }
            #footer{
                margin-left: 40px;
            }
        </style>    
    </head>
    <body>
        <?php
            include 'db.php';
            
            $ID = $_GET["ProfileID"];
        
            $sql = "select * from profile where ProfileID = '$ID'";
            $result = $conn->query($sql);
                
            $sql2 = "select * from personalinfo where ProfileID = '$ID'";
            $result2 = $conn->query($sql2);
        
            $sql3 = "select * from hobbies where ProfileID = '$ID'";
            $result3 = $conn->query($sql3);
            
            $sql4 = "select * from sns where ProfileID = '$ID'";
            $result4 = $conn->query($sql4);
            
            $sql5 = "select * from Education where ProfileID = '$ID'";
            $result5 = $conn->query($sql5);
            
            $sql6 = "select * from work_experience where ProfileID = '$ID'";
            $result6 = $conn->query($sql6);    
                
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $name = $row["Name"];
                    $cebu = $row["Address_in_Cebu"];
                    $bday = $row["Birthday"];
                    $mail = $row["Email_Address"];
                    $mobile = $row["Mobile_Number"];
                    $food = $row["Favorite_Food"];
                    $color = $row["Favorite_Color"];
                    $place = $row["Favorite_Place"];
                }
            } 
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) {
                    $self = $row2["Selfintroduction"];
                    $goal = $row2["Life_Goal"];
                    $infoid = $row2["ID"];
                }
            }
            if ($result3->num_rows > 0) {
                $hobby = array();
                $hobbyid = array();
                while($row3 = $result3->fetch_assoc()){
                    $hobby[] = $row3["Hobbies"];
                    $hobbyid[] = $row3["ID"];
                }
            }
            if ($result4->num_rows > 0) {
                while($row4 = $result4->fetch_assoc()) {
                    $facebook = $row4["facebook"];
                    $twitter = $row4["twitter"];
                    $instagram = $row4["instagram"];
                }
            }
            if ($result5->num_rows > 0) {
                $school = array();
                $school_add = array();
                $graduated = array();
                $schoolID = array();
                    while($row5 = $result5->fetch_assoc()) {
                        $school[] = $row5["School_Name"];
                        $school_add[] = $row5["Address"];
                        $graduated[] = $row5["Year_Graduated"];
                        $schoolID[] = $row5["ID"];
                }
            }
            if ($result6->num_rows > 0) {
                $company = array();
                $position = array();
                $start = array();
                $end = array();
                $workID = array();
                    while($row6 = $result6->fetch_assoc()) {
                        $company[] = $row6["Name_of_company"];
                        $position[] = $row6["Position"];
                        $start[] = $row6["start_date"];
                        $end[] = $row6["end_date"];
                        $workID[] = $row6["ID"];
                }
            }
        ?>
        <div id=wrapper>
            <div id=header_div>
                <label id="header">Cloud Group</label>
                <label id="header2">Edit</label>
            </div>
            <form action="edited_hw.php" method="POST">
                <input type="hidden" name="ProfileID" value="<?php echo $ID ?>">
                <input type="hidden" name="PersonalinfoID" value="<?php echo $infoid?>">
                <table id=basic_info>
                    <tr>
                        <td class="category"><label for="Name2">* Name :</label></td>
                        <td class="value"><input type="text" name="Name" size="30" maxlength="30" minlength="2" value="<?php echo $name?>" id="Name2"></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="Add">* Address :</label></td>
                        <td class="value"><input type="text" name="Address_in_Cebu" size="30" maxlength="80" minlength="6" value="<?php echo $cebu?>" id="Add"></td>
                        
                    </tr>
                    <tr>
                        <td class="category"><label for="Bday">* Date of Birth :</label></td>
                        <td class="value"><input type="date" name="Birthday" size="30" value="<?php echo $bday?>" id="Bday"></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="Email">* Email :</label></td>
                        <td class="value"><input type="email" name="Email_Address" size="30" maxlength="30" minlength="6" value="<?php echo $mail?>" id="Email"></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="Number">* Phone :</label></td>
                        <td class="value"><input type="text" name="Mobile_Number" size="30" maxlength="13" minlength="6" value="<?php echo $mobile?>" id="Number"></td>
                    </tr>  
                    <tr>
                        <td class="category"><label for="food">Favorite Food :</label></td>
                        <td class="value"><input type="text" name="Favorite_Food" size="30" maxlength="20" value="<?php echo $food?>" id="food"></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="color">Favorite Color :</label></td>
                        <td class="value"><input type="text" name="Favorite_Color" size="30" maxlength="20" value="<?php echo $color?>" id="color"></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="place">Favorite Place :</label></td>
                        <td class="value"><input type="text" name="Favorite_Place" size="30" maxlength="20" value="<?php echo $place?>" id="place"></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="hobby1">Hobby1 :</label></td>
                        <td class="value"><input type="text" name="Hobbies1" size="30" maxlength="30" minlength="2" value="<?php echo $hobby[0]?>" id="hobby1"></td>
                        <input type="hidden" name="Hobbies1ID" value="<?php echo $hobbyid[0]?>">
                    </tr>
                    <tr>
                        <td class="category"><label for="hobby2">Hobby2 :</label></td>
                        <td class="value"><input type="text" name="Hobbies2" size="30" maxlength="30" minlength="2" value="<?php echo $hobby[1]?>" id="hobby2"></td>
                        <input type="hidden" name="Hobbies2ID" value="<?php echo $hobbyid[1]?>">
                    </tr>
                    <tr>
                        <td class="category"><label for="hobby3">Hobby3 :</label></td>
                        <td class="value"><input type="text" name="Hobbies3" size="30" maxlength="30" minlength="2" value="<?php echo $hobby[2]?>" id="hobby3"></td>
                        <input type="hidden" name="Hobbies3ID" value="<?php echo $hobbyid[2]?>">
                    </tr>
                    <tr>
                        <td class="category"><label for="fb">Facebook URL :</label></td>
                        <td class="value"><input type="url" name="facebook" size="45" maxlength="50" value="<?php echo $facebook ?>" id="fb"></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="tw">Twitter URL :</label></td>
                        <td class="value"><input type="url" name="twitter" size="45" maxlength="50" value="<?php echo $twitter ?>" id="tw"></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="insta">Instagram URL :</label></td>
                        <td class="value"><input type="url" name="instagram" size="45" maxlength="50" value="<?php echo $instagram ?>" id="insta"></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="about">About Me :</label></td>
                        <td class="value"><textarea rows="10" cols="45" name="Selfintroduction" maxlength="1000" minlength="11" id="about"><?php echo $self?></textarea></td>
                    </tr>
                    <tr>
                        <td class="category"><label for="goal">Life Goal :</label></td>
                        <td class="value"><textarea rows="3" cols="45" name="Life_Goal" maxlength="100" minlength="10" id="goal"><?php echo $goal?></textarea></td>
                    </tr>
                </table>
                <br>
                <label class=title> Education :</label>
                <table class=table_info>
                    <tr>
                        <td class="category">Category</td>
                        <td class="category">School Name</td>
                        <td class="category">Address</td>
                        <td class="category">Year Graduated</td>
                    </tr>
                    <tr>
                        <td class="category2">High School :</td>
                        <td class="value"><input type="text" name="School_Name1" size="24" maxlength="50" minlength="2" value="<?php echo $school[0]?>"></td>
                        <td class="value"><input type="text" name="Address1" size="24" maxlength="80" minlength="5" value="<?php echo $school_add[0]?>"></td>
                        <td class="value"><input type="month" name="Year_Graduated1" size="24" value="<?php echo $graduated[0]?>"></td>
                        <input type="hidden" name="SchoolID1" value="<?php echo $schoolID[0]?>">
                    </tr>
                    <tr>
                        <td class="category2">College :</td>
                        <td class="value"><input type="text" name="School_Name2" size="24" maxlength="50" minlength="2" value="<?php echo $school[1]?>"></td>
                        <td class="value"><input type="text" name="Address2" size="24" maxlength="80" minlength="5" value="<?php echo $school_add[1]?>"></td>
                        <td class="value"><input type="month" name="Year_Graduated2" size="24" value="<?php echo $graduated[1]?>"></td>
                        <input type="hidden" name="SchoolID2" value="<?php echo $schoolID[1]?>">
                    </tr>
                </table>
                <br>
                <label class=title>Work Experiences :</label>
                <table class=table_info>
                    <tr>
                        <td class="category">Company Name</td>
                        <td class="category">Position</td>
                        <td class="category">Start Date</td>
                        <td class="category">End Date</td>
                    </tr>
                    <tr>
                        <td class="value"><input type="text" name="Name_of_company1" maxlength="50" minlength="2" value="<?php echo $company[0]?>"></td>
                        <td class="value"><input type="text" name="Position1" maxlength="30" minlength="2" value="<?php echo $position[0]?>"></td>
                        <td class="value"><input type="date" name="start_date1" value="<?php echo $start[0]?>"></td>
                        <td class="value"><input type="date" name="end_date1" value="<?php echo $end[0]?>"></td>
                        <input type="hidden" name="jobID1" value="<?php echo $workID[0]?>">
                    </tr>
                     <tr>
                        <td class="value"><input type="text" name="Name_of_company2" maxlength="50" minlength="2" value="<?php echo $company[1]?>"></td>
                        <td class="value"><input type="text" name="Position2" maxlength="30" minlength="2" value="<?php echo $position[1]?>"></td>
                        <td class="value"><input type="date" name="start_date2" value="<?php echo $start[1]?>"></td>
                        <td class="value"><input type="date" name="end_date2" value="<?php echo $end[1]?>"></td>
                        <input type="hidden" name="jobID2" value="<?php echo $workID[1]?>">
                    </tr>
                </table>    
                <br>
                <input type="submit" value="Submit">
            <div id=footer>    
                <a href='main.php' >
                    <img src="images/home.png" width="40" id="home" alt="HOME icon">
                </a>
            </div>      
        </div>    
    </body>
</html>