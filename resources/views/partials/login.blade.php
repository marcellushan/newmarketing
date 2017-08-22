

<?php
session_start();
if(isset($_GET['username']))
{
    $_SESSION['username'] = $_GET['username'];
}
//if($servername=='forms.highlands.edu')
//{

    if (!isset($_SESSION['username']))
    {
        header("Location: https://www.highlands.edu/site/connect/login.php?url=https://www.highlands.edu/site/misc/assessment_2/holder.php");
        exit(0);
    }
//}

