 <!DOCTYPE html>
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
            $filename = $row["filename"];
            $background = $row["background"];
            $background_mid = $row["background_mid"];
            $background_right = $row["background_right"];
        }
    }
    if ($result2->num_rows > 0) {
        while($row2 = $result2->fetch_assoc()) {
            $self = $row2["Selfintroduction"];
            $goal = $row2["Life_Goal"];
        }
    }
    if ($result3->num_rows > 0) {
        $hobby = array();
        while($row3 = $result3->fetch_assoc()){
        $hobby[] = $row3["Hobbies"];
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
        while($row5 = $result5->fetch_assoc()) {
            $school[] = $row5["School_Name"];
            $school_add[] = $row5["Address"];
            $graduated[] = $row5["Year_Graduated"];
        }
    }
    if ($result6->num_rows > 0) {
        $company = array();
        $position = array();
        $start = array();
        $end = array();
        while($row6 = $result6->fetch_assoc()) {
            $company[] = $row6["Name_of_company"];
            $position[] = $row6["Position"];
            $start[] = $row6["start_date"];
            $end[] = $row6["end_date"];
        }
    }
?>
<html>
<head> 
    <title>VIEW</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="detail.css">
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
    <div id="wrapper">
        <div id=header_div>
            <label id="header">Cloud Group</label>
            <label id="header2">View</label>
        </div>
        <div id=backphoto>
            <?php   
                if($background == ""){
                    echo "<img class=dummy src='images/graph.png' width='250' height='250' alt='Photo'>";
                }
                else {
                    echo "<img class=ppp src='$background' width='250' height='250' alt='Photo'>";
                }
              
                if($background_mid == ""){
                    echo "<img class=dummy src='images/graph.png' width='250' height='250' alt='Photo'>";
                }
                else {
                    echo "<img class=ppp src='$background_mid' width='250' height='250' alt='Photo'>";
                }
                
                if($background_right == ""){
                    echo "<img class=dummy src='images/graph.png' width='250' height='250' alt='Photo'>";
                }
                else {
                    echo "<img class=ppp src='$background_right' width='250' height='250' alt='Photo'>";
                }
            ?>    
        </div>
            <h1><?php echo "$name"; ?></h1>
        <div id=picture>
            <?php   
                if($filename == ""){
                    echo "<img src='images/dummy.png' width='250' height='250' alt='Photo'>";
                }
                else {
                    echo "<img src='$filename' width='250' height='250' alt='Photo'>";
                }
            ?>    
        </div>
        <div id=profile>
                <p>
                    <label class=basicinfo>Address</label><br>
                    <?php echo "$cebu"; ?><br><br>
                    <label class=basicinfo>Date of Birth</label><br>
                    <?php echo "$bday"; ?><br><br>
                    <label class=basicinfo>Email</label><br>
                    <?php echo "$mail"; ?><br><br>
                    <label class=basicinfo>Phone</label><br>
                    <?php echo "$mobile"; ?>
                </p>
        </div>
        
        <div id=wall>
            <div id=about>
                <h3>About Me:</h3>
                <p id=me><?php echo "$self"; ?></p>    
            </div>
            <div id=goal>    
                <h3 id=header_goal>Life Goal:</h3>
                <p><?php echo "$goal"; ?></p>
            </div>  
        </div>
        <br>
        <div id="favorite">
            <table id="favorite_table">
                <tr>
                    <td class="favorite_td"><h3>Favorite</h3></td>
                    <td class="favorite_value"><h3>Hobbies:</h3></td>
                </tr>
                <tr>
                    <td class="favorite_td"><strong>Food: </strong><?php echo "$food"; ?></td>
                    <td class="favorite_value"><?php echo "$hobby[0]"; ?></td>
                </tr>
                <tr>
                    <td class="favorite_td"><strong>Color: </strong><?php echo "$color"; ?></td>
                    <td class="favorite_value"><?php echo "$hobby[1]"; ?></td>
                </tr>
                <tr>
                    <td class="favorite_td"><strong>Place: </strong><?php echo "$place"; ?></td>
                    <td class="favorite_value"><?php echo "$hobby[2]"; ?></td>
                </tr>
            </table>
        </div>
        <div id="life">
            <br>
            <h3>Education:</h3>
                <table class="other">
                    <tr class="category">
                        <th class="other">Category</th>
                        <th class="other">School Name</th>
                        <th class="other">Address</th>
                        <th class="other">Year Graduated</th>
                    </tr>
                    <tr>
                        <td class="other">High School</td>
                        <td class="other"><?php echo "$school[0]"; ?></td>
                        <td class="other"><?php echo "$school_add[0]"; ?></td>
                        <td class="other"><?php echo "$graduated[0]"; ?></td>
                    </tr>
                    <tr>
                        <td class="other">College</td>
                        <td class="other"><?php echo "$school[1]"; ?></td>
                        <td class="other"><?php echo "$school_add[1]"; ?></td>
                        <td class="other"><?php echo "$graduated[1]"; ?></td>
                    </tr>
                </table>
                <br>
                <h3>Work Experiences:</h3>
                    <table class="other">
                        <tr class = "category">
                            <th class="other">Company Name</th>
                            <th class="other">Position</th>
                            <th class="other">Start Date</th>
                            <th class="other">End Date</th>
                        </tr>
                        <tr height="22">
                            <td class="other"><?php echo "$company[0]"; ?></td>
                            <td class="other"><?php echo "$position[0]"; ?></td>
                            <td class="other"><?php echo "$start[0]"; ?></td>
                            <td class="other"><?php echo "$end[0]"; ?></td>
                        </tr>
                        <tr>
                            <td class="other"><?php echo "$company[1]"; ?></td>
                            <td class="other"><?php echo "$position[1]"; ?></td>
                            <td class="other"><?php echo "$start[1]"; ?></td>
                            <td class="other"><?php echo "$end[1]"; ?></td>
                        </tr>
                    </table>
                    <br><br>
                <table id="sns">
                    <tr>
                        <th>
                            <a href=<?php echo "$facebook"; ?> target="_blank">
                            <img src="images/facebook-white.png" width="50" alt="FB picture">
                            </a>
                        </th>
                        <th>
                            <a href=<?php echo "$twitter"; ?> target="_blank">  
                            <img src="images/twitter-white.png" width="50" alt="Twitter picture">
                            </a>
                        </th>
                        <th> 
                            <a href=<?php echo "$instagram"; ?> target="_blank">
                            <img src="images/instagram-white.png" width="50" alt="Instagram picture">
                            </a>
                        </th>
                    </tr>
                </table>
                </div>
            <div id="footer">
                <div id=house>    
                    <a href='main.php' >
                        <img src="images/home.png" width="40" alt="HOME icon">
                    </a>
                </div>    
            </div>    
        </div>    
    </div>    
</body>    
</html>