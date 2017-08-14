<html>
    <head>
        <title>PHOTO</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/favicon.ico">
        <style>
            #wrapper{
                background: #EDF4E3;
                width: 420px;
                margin: 0 auto;
            }
            body{
                font-family: Times New Roman;
            }
            #header_div{
                background: #404040;
                width: 420px;
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
            .circle_button{
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 6px 7px;
                text-decoration: none;
                margin: 4px 4px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
                border-radius: 50%;
            }
            .circle_button2{
                background-color: white; 
                margin-left: 15px;
            }
            .circle_button2:hover {
                background-color: #f2eaea;
            }
            .circle_button3{
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 6px 7px;
                text-decoration: none;
                margin: 4px 4px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
                border-radius: 50%;
            }
            .circle_button4{
                background-color: #1AB4ED; 
                margin-left: 15px;
            }
            .circle_button4:hover {
                background-color: #EDF4E3;
            }
            ul{
                padding-left: 90px;
            }
            table,tr,td{
                border-collapse: collapse;
                padding-left: 93px;
                padding-top: 10px;
                width: 420px;
            }
            p{
                text-align: center;
            }
            .upload{
              color: #800080;
            }
            #one{
                background: #f2eaea;
            }
            #two{
                background: #EDF4E3;
            }
            #third{
                background: #f2eaea;
            }
            #four{
                background: #EDF4E3;
            }
            input[type=file]{
                cursor: pointer;
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
            $ID = $_GET["ProfileID"];
        ?>
        <div id=wrapper>
            <div id=header_div>
                <label id="header">Cloud Group</label>
                <label id="header2">Photo</label>
            </div>  
            <ul>    
                <li>Please upload square photo.</li>
                <li>Minumum size is 250×250(px).</li>
                <li>More than 500KB file can't upload.</li>
            </ul>
            <table>
                <tr>
                    <td id=one>
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                        Profile Photo<br>
                        <input type="hidden" name="ProfileID" value="<?php echo $ID ?>">
                        <input type="hidden" name="Photo" value="profile">
                        <label class=upload>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        </label>
                        <br>
                        <button class="circle_button circle_button2" type="submit">
                        <img src="images/camera-upload.png" width="40" alt="submit">
                        </button>
                        </form>
                    </td>
                </tr>      
                <tr>  
                    <td id=two>
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                        Left Background Photo<br>
                        <input type="hidden" name="ProfileID" value="<?php echo $ID ?>">
                        <input type="hidden" name="Photo" value="background">
                        <label class=upload>
                        <input type="file" name="fileToUpload2" id="fileToUpload2">
                        </label>
                        <br>
                        <button class="circle_button3 circle_button4" type="submit">
                        <img src="images/camera-upload.png" width="40" alt="submit">
                        </button>
                        </form>
                    </td>    
                </tr>
                <tr>
                    <td id=third>
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            Center Background Photo<br>
                            <input type="hidden" name="ProfileID" value="<?php echo $ID ?>">
                            <input type="hidden" name="Photo" value="background2">
                            <input type="file" name="fileToUpload3" id="fileToUpload3">
                            <br>
                            <button class="circle_button circle_button2" type="submit">
                            <img src="images/camera-upload.png" width="40" alt="submit">
                            </button>
                        </form>
                    </td>
                </tr>    
                <tr>    
                    <td id=four>
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            Right Background Photo<br>
                            <input type="hidden" name="ProfileID" value="<?php echo $ID ?>">
                            <input type="hidden" name="Photo" value="background3">
                            <input type="file" name="fileToUpload4" id="fileToUpload4">
                            <br>
                            <button class="circle_button3 circle_button4" type="submit">
                            <img src="images/camera-upload.png" width="40" alt="submit">
                            </button>
                        </form>
                    </td>    
                </tr>    
            </table>
            <a href='main.php' >
                <img src="images/home.png" width="40" id="home" alt="HOME icon">
            </a>
        </div>
    </body>    
</html>