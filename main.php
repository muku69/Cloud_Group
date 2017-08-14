<html>
    <head> 
        <title>HOME</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="main.css">
        <link rel="shortcut icon" href="images/favicon.ico">
        
            <script>
            function myFunction(userid,myname) {
                var values = document.getElementById(userid).value;
                var nameval = document.getElementById(myname).value;                
                var txt;
                var r = confirm("Do you want to delete " + nameval + "?");
                if (r == true) {
                    document.location.href = "remove.php?ProfileID="+values+"";
                    txt = "";
                } else {
                    txt = "<h4 id=error>Cancel button is clicked.</h4>";
                }
                document.getElementById("demo").innerHTML = txt;
            }
            </script>
            
    </head>
    <body>
        <div id="wrapper">
            <div id="header_div">
                <label id="header">Cloud Group</label>
                <label id="header2">Home</label>
            </div>
            <a href = "add.html"><button class="circle_button circle_button2"><b>+</b></button></a>
            <p id="demo"></p>
            <?php
                include 'db.php';
                
                $sql = "select * from profile";
                $result = $conn->query($sql);
                
                $x = 1;
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    $ID = $row['ProfileID'];
                    $name = $row['Name'];
                    $photo = $row["filename"];
            ?>
            <div id=member>
                <?php   
                    if($photo == ""){
                        echo "<img src='images/placeholder.png' width='235' height='235' alt='Photo'>";
                    }
                    else {
                        echo "<img src='$photo' width='235' height='235' alt='Photo'>";
                    }
                ?>    
                <br>    
                <h4><?php echo $name ?></h4>
                <table>
                    <tr>
                        <td>
                            <button class="button button2" onclick="myFunction('<?php echo "user$x"; ?>','<?php echo "name$x"; ?>')">
                            <img src="images/trash.svg" width="20" alt="Garbage can picture">
                            </button>
                            <input type="hidden" value=<?php echo $ID; ?> id=<?php echo "user$x"; ?>>
                            <input type="hidden" value=<?php echo $name; ?> id=<?php echo "name$x"; ?>>                            
                        </td>
                        <td>
                            <a href="file.php?ProfileID=<?php echo $ID ?> ">
                            <button class="button button2"><img src="images/camera.png" width="20" alt="Camera picture"></button>
                            </a>
                        </td>
                        <td>
                            <a href="edit_hw.php?ProfileID=<?php echo $ID ?> ">
                            <button class="button3 button4"><b>EDIT</b></button>
                            </a>
                        </td>
                        <td>
                            <a href="detail.php?ProfileID=<?php echo $ID ?> ">
                            <button class="button3 button4"><b>VIEW</b></button>
                            </a>
                        </td> 
                    </tr>
                </table>
            </div>
            <?php        
                  $x++;  }
                } 
                else {
                    echo "0 results";
                }
            ?>  
        </div>
        <div id=footer> 
        </div>
    </body>
</html>