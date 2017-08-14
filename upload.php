<html>
    <head>
        <title>PHOTO</title>
        <meta charset = "UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico">
        <style>
            #wrapper{
                    background: #EDF4E3;
                    width: 538px;
                    margin: 0 auto;
                }
                body{
                    font-family: Georgia;
                }
                #header_div{
                    background: #404040;
                    width: 538px;
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
                #error{
                    width: 500px;
                    margin: 0 auto;
                    border: #EDF4E3 5px dotted;
                    background-color: #DCDCDC;
                    text-align: center;
                    padding: 12px;
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
            $photo = $_POST["Photo"];
            
            $target_dir = "uploads/";
        ?>    
        <div id=wrapper>
            <div id=header_div>
                <label id="header">Cloud Group</label>
                <label id="header2">Photo</label>
            </div> 
            <div id=error>
            <?php    
                if($photo === "profile"){
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    // Check if image file is a actual image or fake image
                    $target_tmpname = $_FILES["fileToUpload"]["tmp_name"];
                    $target_name = $_FILES["fileToUpload"]["name"];
                    
                    if(isset($_POST["submit"])) {
                        $check = getimagesize($target_tmpname);
                        if($check !== false) {
                            echo "File is an image -" . $check["mime"] . ".<br>";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.<br>";
                            $uploadOk = 0;
                        }
                    }
                $filename = addslashes($target_file);  
                
                $sqlupdate = "update profile set filename = '$filename'
                    where ProfileID = '$ID'";
                    
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                
                    if ($target_file == "uploads/") {
                        echo "Please select photo.<br>";
                    }
                    // Check if file already exists
                    elseif (file_exists($target_file)) {
                        echo "Sorry, file already exists.<br>";
                        $uploadOk = 0;
                    }
                    // Check file size
                    elseif ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "Please select image file with valid size.<br>";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
                        $uploadOk = 0;
                    }
                    else{
                        if ($conn->query($sqlupdate) === TRUE) {
                        } 
                        else {
                            echo "Error: " . $sqlupdate . "<br>" . $conn->error;
                        }
                        }
                }
                elseif ($photo === "background") {
                    $target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
                    $uploadOk = 1;
                    // Check if image file is a actual image or fake image
                    $target_tmpname = $_FILES["fileToUpload2"]["tmp_name"];
                    $target_name = $_FILES["fileToUpload2"]["name"];
                    
                    if(isset($_POST["submit"])) {
                    $check = getimagesize($target_tmpname);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".<br>";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.<br>";
                        $uploadOk = 0;
                    }
                }
                $filename = addslashes($target_file);  
                
                $sqlupdate = "update profile set background = '$filename'
                    where ProfileID = '$ID'";
                    
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                
                    if ($target_file == "uploads/") {
                            echo "Please select photo.<br>";
                    }
                    // Check if file already exists
                    elseif (file_exists($target_file)) {
                        echo "Sorry, file already exists.<br>";
                        $uploadOk = 0;
                    }
                    // Check file size
                    elseif ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "Please select image file with valid size.<br>";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
                        $uploadOk = 0;
                    }    
                    else{
                        if ($conn->query($sqlupdate) === TRUE) {
                        } 
                        else {
                            echo "Error: " . $sqlupdate . "<br>" . $conn->error;
                        }
                    }
                    
                }
                elseif ($photo === "background2") {
                    $target_file = $target_dir . basename($_FILES["fileToUpload3"]["name"]);
                    $uploadOk = 1;
                    // Check if image file is a actual image or fake image
                    $target_tmpname = $_FILES["fileToUpload3"]["tmp_name"];
                    $target_name = $_FILES["fileToUpload3"]["name"];
                    
                    if(isset($_POST["submit"])) {
                    $check = getimagesize($target_tmpname);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".<br>";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.<br>";
                        $uploadOk = 0;
                    }
                }
                $filename = addslashes($target_file);  
                
                $sqlupdate = "update profile set background_mid = '$filename'
                    where ProfileID = '$ID'";
                
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);    
                    
                    if ($target_file == "uploads/") {
                        echo "Please select photo.<br>";
                    }
                    // Check if file already exists
                    elseif (file_exists($target_file)) {
                        echo "Sorry, file already exists.<br>";
                        $uploadOk = 0;
                    }
                    // Check file size
                    elseif ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "Please select image file with valid size.<br>";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
                        $uploadOk = 0;
                    }
                    else{
                        if ($conn->query($sqlupdate) === TRUE) {
                        } 
                        else {
                            echo "Error: " . $sqlupdate . "<br>" . $conn->error;
                        }
                        }
                    
                }
                elseif ($photo === "background3") {
                    $target_file = $target_dir . basename($_FILES["fileToUpload4"]["name"]);
                    $uploadOk = 1;
                    // Check if image file is a actual image or fake image
                    $target_tmpname = $_FILES["fileToUpload4"]["tmp_name"];
                    $target_name = $_FILES["fileToUpload4"]["name"];
                    
                    if(isset($_POST["submit"])) {
                    $check = getimagesize($target_tmpname);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".<br>";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.<br>";
                        $uploadOk = 0;
                    }
                }
                $filename = addslashes($target_file);  
                
                $sqlupdate = "update profile set background_right = '$filename'
                    where ProfileID = '$ID'";
                    
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);    
                    
                    if ($target_file == "uploads/") {
                        echo "Please select photo.<br>";
                    }
                    // Check if file already exists
                    elseif (file_exists($target_file)) {
                        echo "Sorry, file already exists.<br>";
                        $uploadOk = 0;
                    }
                    // Check file size
                    elseif ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "Please select image file with valid size.<br>";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
                        $uploadOk = 0;
                    }
                    else{
                        if ($conn->query($sqlupdate) === TRUE) {
                        } 
                        else {
                            echo "Error: " . $sqlupdate . "<br>" . $conn->error;
                        }
                        }
                }
                
                
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($target_tmpname, $target_file)) {
                        echo "The file ". basename($target_name). " has been uploaded.";
                    } else {
                        // echo "<br> Check". $uploadOk . "<br>";
                        echo "Sorry, there was an error uploading your file.";
                        echo $target_tmpname;
                    }
                }
            ?>
            </div>
            <a href='main.php' >
                <img src="images/home.png" width="40" id="home" alt="HOME icon">
            </a>
        </div>
    </body>
</html>