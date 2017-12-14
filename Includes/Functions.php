<?php





function adduser()
{
    $db = new \DataBaseConnection\DataBaseConnection();
    $results = $db->query("SELECT * FROM registertable");

    if (isset($_POST['Submit'])) {

        $Email = $_POST["Email"];
        $Name = $_POST["Name"];
        $Password = $_POST["Password"];

        $db->query("INSERT INTO registertable(Name,Email,Password) VALUES ('" . $Name . "','" . $Email . "','" . $Password . "')");
        echo "<div class='alert alert-success'>User has been added!</div>";


    }
}



function datess()
{
 echo "Today is " . date("Y-m-d") . "<br>";
}





function login()
{

   $login_ok = false;
    if (isset($_POST['submit'])) {
        require_once '../Includes/DataBaseConnection.php';

        $db = new \DataBaseConnection\DataBaseConnection();
        $userFetch = $db->query("SELECT * FROM registertable WHERE Name = '" . $_POST['Name'] . "'");

        $user = $userFetch->fetch_assoc();

        if ($user['Password'] == $_POST['Password']) {
            $login_ok = true;
            header('Location: ../Webpages/Adminpanel.php');


        } else {
            echo "<div class='alert alert-danger'>Je hebt verkeerde gegevens ingevuld</div>";
        }

    }
}
function logout()
{

    header("Location: ../Webpages/Login.php");
    session_destroy();

}




function register()
{
    require_once '../Includes/DataBaseConnection.php';
    $db = new \DataBaseConnection\DataBaseConnection();
    if (isset($_POST['submit'])) {

        $Email = $_POST["Email"];
        $Name = $_POST["Name"];
        $Password = $_POST["Password"];

        $db->query("INSERT INTO registertable(Name,Email,Password) VALUES ('" . $Name . "','" . $Email . "','" . $Password . "')");
        echo "<div class='alert alert-success'>Registratie voltooid!</div>";;
    }
}

function UserTable()
{
    require_once '../Includes/DataBaseConnection.php';
    $db = new \DataBaseConnection\DataBaseConnection();
    $results = $db->query("SELECT * FROM registertable");
    while ($row = mysqli_fetch_array($results)) {

        echo "
    
    <tr >
        <td>".$row ["ID"] ."</td>
        <td>" . $row["Name"] . "</td>
        <td>" . $row["Email"] . "</td>
        <td>" . $row["Password"] . "</td>
        <td><a href='../Includes/deletebutton.php?id=" . $row['ID'] . "' value='Delete' type=\"button\" class=\"btn btn-danger\" style='margin-left: 100px;'>Verwijderen</a> </td>               
    </tr >
";
    }
}

function content()
{
    require_once '../Includes/DataBaseConnection.php';
    $db = new \DataBaseConnection\DataBaseConnection();
    if (isset($_POST['Test'])) {

        $title = $_POST['title'];
        $content = $_POST['content'];
        $about = $_POST['about'];

        $result = $db->query("INSERT into contenttable(title,about,content) VALUES('" . $title . "','". $about. " ','" . $content . "')");

        if ($result) {
            echo "<div class='alert alert-success'>article has been posted</div>";;
        } else {
            echo "<div class='alert alert-danger'>failed to post the article</div>";;
        }


    }
}


function GetContent()
{
    require_once '../Includes/DataBaseConnection.php';
    $db = new \DataBaseConnection\DataBaseConnection();
    $results = $db->query("SELECT * FROM contenttable");
    while ($row = mysqli_fetch_array($results))
    {
        echo"
            <tbody >
    <tr >
    <div  id='cardid'class= 'container'>
    <div class = row>
    <div class='col-md-6'>
    <div class='card'
    <div class='card-body'>
        <td><h3>" . $row["title"] . "</h3></td>
         <td><p>about:  ". $row["about"]."</p></td>

        <td>" . $row["content"] . "</td>
       
    </tr >  
    </div>
    </div>
    </div>
    </div>
    </div>
        ";
    }

}









?>