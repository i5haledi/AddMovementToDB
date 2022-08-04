<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Robot movements: by Khaled</title>

        <style>
            
            body{
    background-color: rgb(255, 255, 255);
}

.center{
    position: absolute;
    top: 30%;
    left: 35%;
    
}

.button{
    border: 2px solid white;
    border-radius: 20px;
    padding: 8px 25px 8px 25px;
    box-shadow: 0px 4px 6px 1px rgba(150, 150, 150, 0.637);
    cursor: pointer;
}

.button:hover{
    /* background-color: rgb(237, 26, 202); */
    border: 2px solid rgba(148, 36, 228, 0.885);

}
.button:focus{
    border: 2px solid rgba(148, 36, 228, 0.885);
}

.forward{
    position: sticky;
    margin-left: 30%;
    margin-bottom: 40px;
}

.Stop{
    margin-left: 20px;
    margin-right: 20px;
    border: 2px solid rgba(255, 0, 0, 0.1);
    box-shadow:none;
    background-color: rgb(51, 153, 51);
    color: white;
}

.backward{
    position: sticky;
    margin-left: 30%;
    margin-top: 40px;
}

        </style>

    </head>

    <body>


        
         
        
        

        <div class="center">
            <div>
                <button class="button forward" onclick="Movement('F')">Forward</button>
                
            </div>
            <div>
                <button class="button Left" onclick="Movement('L')">Left</button>
                <button class="button Stop" onclick="Movement('S')">Stop</button>
                <button class="button Right" onclick="Movement('R')">Right</button>
            </div>
            <div>
                <button class="button backward" onclick="Movement('B')">Backward</button>
            </div> 
        </div>
        
        
                        <?php
$servername = "localhost";
$username = "id19325596_khaled1";
$password = "KhaledKhaled307307$";
$dbname = "id19325596_robotmove";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO robotMove (ID, movement) VALUES (22, 'F');";
mysqli_query($conn, $sql);



$conn->close();
?>
        
        

        




    </body>

    

</html>