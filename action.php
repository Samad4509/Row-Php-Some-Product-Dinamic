<?php
require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\FullName;
use App\classes\Calculator;
use App\classes\Series;
use App\classes\User;
use App\classes\Auth;
$home=new Home();

if(isset($_GET['page']))
{
    if($_GET['page']=='category')
    {
        $home->categoryProduct($_GET['id']);
    }
    elseif ($_GET['page']=='home')
    {
        $home->index();
    }
    elseif ($_GET['page']=='detail')
    {
        $home->productDetail($_GET['id']);
    }
    elseif ($_GET['page']=='full-name')
    {
        $home->fullName();
    }
    elseif ($_GET['page']=='calculator')
    {
        $home->calculator();
    }
    elseif ($_GET['page']=='seriesOne')
    {
        $home->seriesOne();
    }
    elseif ($_GET['page']=='seriesTwo')
    {
        $home->seriesTwo();
    }
    elseif ($_GET['page']=='seriesThree')
    {
        $home->seriesThree();
    }
    elseif ($_GET['page']=='login')
    {
        $home->login();
    }
    elseif ($_GET['page']=='logout')
    {
        $auth=new Auth();
        $auth->logout();
    }
    elseif ($_GET['page']=='dashboard')
    {
        $home->dashboard();
    }

}
elseif (isset($_POST['full_name_btn']))
{
    $fullName=new FullName();
    $fullName->makeFullName($_POST);
}
elseif (isset($_POST['result']))
{
    $calculator=new Calculator($_POST);
    $calculator->makeCalculator();
}
elseif (isset($_POST['series-one-button']))
{
    $seriesone=new Series($_POST);
    $seriesone->seriesOne();
}
elseif (isset($_POST['series-two-button']))
{
    $seriestwo=new Series($_POST);
    $seriestwo->seriesTwo();
}
elseif (isset($_POST['series-three-button']))
{
    $seriesthree=new Series($_POST);
    $seriesthree->seriesThree();
}
//elseif (isset($_POST['login-button']))
//{
//    $user=new User($_POST);
//    $message=$user->login();
//}
elseif (isset($_POST['login-button']))
{
    $auth=new Auth();
    $message=$auth->login($_POST);
    $home->login($message);
}



//echo'<pre>';
//print_r($_POST);
//echo "<pre>";
