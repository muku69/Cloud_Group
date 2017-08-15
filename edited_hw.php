<html>
    <head> 
        <title>EDIT</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico">
        <style>
            #wrapper{
                width: 782px;
                background: #EDF4E3;
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
            #create{
                width: 767px;
                border: #EDF4E3 5px dotted;
                background-color: #DCDCDC;
                margin: 0 auto;
            }
            h4{
                text-align: center;
            }
            body{
                background-color: #F9F9F9;
                font-family: Times New Roman;
            }
            table, tr{
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 30px 20px;
            }
            table{
                margin: 0 auto;
            }
            .category {
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 30px 20px;
                background: #404040;
                text-align: left;
                width: 200px;
                color: white;
            }    
            .value{
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 30px 20px;
                width: 580px;
            }
            .table_value{
                border: 1px solid #C7CAD3;
                border-collapse: collapse;
                padding: 10px;
                margin: 30px 20px;
                width: 580px;
                text-align: left;
            }
            .title{
                background-color: #FFFFFF;
                margin-left: 10px;
                margin-bottom: 30px;
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
            
            $ID = $_POST["ProfileID"];
            $infoid = $_POST["PersonalinfoID"];
            
            $name = $_POST["Name"];
            $cebu = $_POST["Address_in_Cebu"];
            $bday = $_POST["Birthday"];
            $mail = $_POST["Email_Address"];
            $mobile = $_POST["Mobile_Number"]; 
            $food = $_POST["Favorite_Food"];
            $color = $_POST["Favorite_Color"];
            $place = $_POST["Favorite_Place"];
            
            $introduction = addslashes($_POST["Selfintroduction"]);
            $goal = $_POST["Life_Goal"];
            
            $hobbies1 = $_POST["Hobbies1"];
            $hobbies2 = $_POST["Hobbies2"];
            $hobbies3 = $_POST["Hobbies3"];
            $hobbies1ID = $_POST["Hobbies1ID"];
            $hobbies2ID = $_POST["Hobbies2ID"];
            $hobbies3ID = $_POST["Hobbies3ID"];
            
            $facebook = addslashes($_POST["facebook"]);
            $twitter = addslashes($_POST["twitter"]);
            $instagram = addslashes($_POST["instagram"]);
            $snsid = $_POST["instagram"];
            
            $school_name1 = $_POST["School_Name1"];
            $school_name2 = $_POST["School_Name2"];
            $school_address1 = $_POST["Address1"];
            $school_address2 = $_POST["Address2"];
            $year_graduated1 = $_POST["Year_Graduated1"];
            $year_graduated2 = $_POST["Year_Graduated2"];
            $schoolID1 = $_POST["SchoolID1"];
            $schoolID2 = $_POST["SchoolID2"];
            
            $name_of_company1 = $_POST["Name_of_company1"];
            $name_of_company2 = $_POST["Name_of_company2"];
            $position1 = $_POST["Position1"];
            $position2 = $_POST["Position2"];
            $start_date1 = $_POST["start_date1"];
            $start_date2 = $_POST["start_date2"];
            $end_date1 = $_POST["end_date1"];
            $end_date2 = $_POST["end_date2"];
            $workID1 = $_POST["jobID1"];
            $workID2 = $_POST["jobID2"];
        ?>
        <div id="wrapper">
            <div id="header_div">
                <label id="header">Cloud Group</label>
                <label id="header2">Edit</label>
            </div>
            <div id = create>
                <?php
                    $sql2 = "select * from personalinfo where ProfileID = '$ID'";
                    $result2 = $conn->query($sql2);
                    $countinfo = $result2->num_rows; 
                    
                    $sql3 = "select * from hobbies where ProfileID = '$ID'";
                    $result3 = $conn->query($sql3);
                    $counthobbies = $result3->num_rows;    
                    
                    $sql4 = "select * from sns where ProfileID = '$ID'";
                    $result4 = $conn->query($sql4);
                    $countsns = $result4->num_rows;
                    
                    $sql5 = "select * from Education where ProfileID = '$ID'";
                    $result5 = $conn->query($sql5);
                    $counteducation = $result5->num_rows;
                    
                    $sql6 = "select * from work_experience where ProfileID = '$ID'";
                    $result6 = $conn->query($sql6);
                    $countwork = $result6->num_rows;
                    
                    if($name == ""){
                            echo "<h4>Please set Name.</h4>";
                    }
                    if($cebu == ""){
                            echo "<h4>Please set Address.</h4>";
                    }
                    if($bday == ""){
                            echo "<h4>Please set Date of Birth.</h4>";
                    }
                    if($mail == ""){
                            echo "<h4>Please set Email.</h4>";
                    }
                    if($mobile == ""){
                            echo "<h4>Please set Phone Number.</h4>";
                    }
                    else{
                        $sql = "update profile 
                                set Name = '$name', Address_in_Cebu = '$cebu', Birthday = '$bday',
                                    Email_Address = '$mail', Mobile_Number = '$mobile', Favorite_Food = '$food', 
                                    Favorite_Color = '$color', Favorite_Place = '$place'
                                    where ProfileID = '$ID' ;";               
                            
                        if($countinfo > 0){
                            $sql .= "update personalinfo set Selfintroduction = '$introduction', Life_Goal = '$goal'
                            where ID = '$infoid' ;";
                        }
                        else{
                            $sql .= "INSERT INTO personalinfo (Selfintroduction, Life_Goal, ProfileID)
                                values ('$introduction', '$goal', '$ID') ;";   
                        }
                            
                        if($counthobbies > 0){
                            $sql .= "update hobbies set Hobbies = '$hobbies1'
                            where ID = '$hobbies1ID' ;";
                            $sql .= "update hobbies set Hobbies = '$hobbies2'
                            where ID = '$hobbies2ID' ;";
                            $sql .= "update hobbies set Hobbies = '$hobbies3'
                            where ID = '$hobbies3ID' ;";
                        }
                        else{
                            $sql .= "INSERT INTO hobbies (Hobbies, ProfileID)
                            values ('$hobbies1', '$ID'), ('$hobbies2', '$ID'), ('$hobbies3', '$ID') ;";    
                        }
                        
                        if($countsns > 0){
                            $sql .= "update sns set facebook = '$facebook', twitter = '$twitter', instagram = '$instagram'
                            where ProfileID = '$ID' ;";
                        }
                        else{
                            $sql .= "INSERT INTO sns (facebook, twitter, instagram, ProfileID)
                            values ('$facebook', '$twitter', '$instagram', '$ID') ;";
                        }    
                        
                        if($counteducation > 0){
                            $sql .= "update Education set School_Name = '$school_name1', Address = '$school_address1', 
                                    Year_Graduated = '$year_graduated1'
                                    where ID = '$schoolID1' ;";
                            $sql .= "update Education set School_Name = '$school_name2', Address = '$school_address2', 
                                    Year_Graduated = '$year_graduated2'
                                    where ID = '$schoolID2' ;";
                        }
                        else{   
                            $sql .= "INSERT INTO Education (Category, School_Name, Address, Year_Graduated, ProfileID)    
                                values('High School', '$school_name1', '$school_address1', '$year_graduated1', '$ID'),
                                      ('College', '$school_name2', '$school_address2', '$year_graduated2', '$ID') ;"; 
                        }   
                        
                        if($countwork > 0){
                            $sql .= "update work_experience set Name_of_company = '$name_of_company1', Position = '$position1', 
                                    start_date = '$start_date1', end_date = '$end_date1'
                                    where ID = '$workID1' ;";
                            $sql .= "update work_experience set Name_of_company = '$name_of_company2', Position = '$position2', 
                                    start_date = '$start_date2', end_date = '$end_date2'
                                    where ID = '$workID2' ;";
                        }
                        else{       
                            $sql .= "INSERT INTO work_experience (Name_of_company, Position, start_date, end_date, ProfileID)    
                            values ('$name_of_company1', '$position1', '$start_date1', '$end_date1', '$ID'),
                                   ('$name_of_company2', '$position2', '$start_date2', '$end_date2', '$ID')";
                        }           
                    
                        if (mysqli_multi_query($conn, $sql)) {
                            echo "<h4>Updated successfully.</h4>";
                        } 
                        else {
                            echo "<br>Error: " . $sql . "<br>" . $conn->error;
                        }
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
                    <td class="value"><?php echo $mail; ?></td>
                </tr>
                <tr>
                    <td class="category">Phone :</td>
                    <td class="value"><?php echo $mobile; ?></td>
                </tr>
                
                <tr>
                    <td class="category">Favorite Food :</td>
                    <td class="value"><?php echo $food ?></td>
                </tr>
                <tr>
                    <td class="category">Favorite Color :</td>
                    <td class="value"><?php echo $color ?></td>
                </tr>
                <tr>
                    <td class="category">Favorite Place :</td>
                    <td class="value"><?php echo $place ?></td>
                </tr>
                <tr>
                    <td class="category">Hobby1 :</td>
                    <td class="value"><?php echo $hobbies1 ?></td>
                </tr>
                <tr>
                    <td class="category">Hobby2 :</td>
                    <td class="value"><?php echo $hobbies2 ?></td>
                </tr>
                <tr>
                    <td class="category">Hobby3 :</td>
                    <td class="value"><?php echo $hobbies3 ?></td>
                </tr>
                <tr>
                    <td class="category">Facebook URL :</td>
                    <td class="value"><?php echo $facebook ?></td>
                </tr>
                <tr>
                    <td class="category">Twitter URL :</td>
                    <td class="value"><?php echo $twitter ?></td>
                </tr>
                <tr>
                    <td class="category">Instagram URL :</td>
                    <td class="value"><?php echo $instagram ?></td>
                </tr>
                <tr>
                    <td class="category">About Me :</td>
                    <td class="value"><?php echo $introduction ?></td>
                </tr>
                <tr>
                    <td class="category">Life Goal :</td>
                    <td class="value"><?php echo $goal ?></td>
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td class="category">Category</td>
                    <td class="category">School Name</td>
                    <td class="category">Address</td>
                    <td class="category">Year Graduated</td>
                </tr>
                <tr>
                    <td class="table_value">High School :</td>
                    <td class="table_value"><?php echo $school_name1; ?></td>
                    <td class="table_value"><?php echo $school_address1; ?></td>
                    <td class="table_value"><?php echo $year_graduated1; ?></td>
                    <input type="hidden" name="SchoolID1" value="<?php echo $schoolID[0]?>">
                </tr>
                <tr>
                    <td class="table_value">College :</td>
                    <td class="table_value"><?php echo $school_name2; ?></td>
                    <td class="table_value"><?php echo $school_address2; ?></td>
                    <td class="table_value"><?php echo $year_graduated2; ?></td>
                    <input type="hidden" name="SchoolID2" value="<?php echo $schoolID[1]?>">
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td class="category">Company Name</td>
                    <td class="category">Position</td>
                    <td class="category">Start Date</td>
                    <td class="category">End Date</td>
                </tr>
                <tr>
                    <td class="table_value"><?php echo $name_of_company1; ?></td>
                    <td class="table_value"><?php echo $position1; ?></td>
                    <td class="table_value"><?php echo $start_date1; ?></td>
                    <td class="table_value"><?php echo $end_date1; ?></td>
                    <input type="hidden" name="jobID1" value="<?php echo $workID[0]?>">
                </tr>
                <tr>
                    <td class="table_value"><?php echo $name_of_company2; ?></td>
                    <td class="table_value"><?php echo $position2; ?></td>
                    <td class="table_value"><?php echo $start_date2; ?></td>
                    <td class="table_value"><?php echo $end_date2; ?></td>
                    <input type="hidden" name="jobID2" value="<?php echo $workID[1]?>">
                </tr>
            </table>  
        <br><br>
        <a href='main.php' >
            <img src="images/home.png" width="40" id="home" alt="HOME icon">
        </a>
        </div>
    </body>
</html>    