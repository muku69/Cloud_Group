<html>
    <head> 
        <title>DELETE</title>
        <meta charset = "UTF-8">
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
            h4{
                text-align: center;
            }
            p {
                margin-left: 25px;
                padding-bottom: 15px;
            }
            #delete{
                width: 585px;
                margin: 0 auto;
                height: 60px;
                border: #EDF4E3 5px dotted;
                background-color: #DCDCDC;
            }
            #home{
                margin-left: 10px;
                padding-bottom: 5px;
            }
        </style>
    </head>
    <body>
        <div id=wrapper>
            <div id=header_div>
                <label id="header">Cloud Group</label>
                <label id="header2">Delete</label>
            </div>  
            <?php
                include 'db.php';
                
                $ID = $_GET["ProfileID"];
                
                $sql = "DELETE FROM personalinfo WHERE ProfileID = '$ID';";
                
                $sql .= "DELETE FROM hobbies WHERE ProfileID = '$ID';";
                
                $sql .= "DELETE FROM sns WHERE ProfileID = '$ID';";
                
                $sql .= "DELETE FROM Education WHERE ProfileID = '$ID';";
                
                $sql .= "DELETE FROM work_experience WHERE ProfileID = '$ID';";
                
                $sql .= "DELETE FROM profile WHERE ProfileID = '$ID'";
                
                if (mysqli_multi_query($conn, $sql)) {
                    echo "<div id = delete>
                        <h4>The member is deleted successfully.</h4>
                        </div>";
                    
                } 
                else {
                    echo "Error during deleting member: " . $conn->error;
                }
            ?>
            <a href='main.php' >
                <img src="images/home.png" width="40" id="home" alt="HOME icon">
            </a>
            </a>
        </div>
    </body>
</html>