<?php


namespace App\classes;
use App\classes\Category;
use App\classes\Product;


class Home
{
    public $product,$products=[],$category,$categories=[],$singleProduct;
    public function __construct()
    {
        session_start();
        $this->category=new Category();
        $this->categories=$this->category->getAllCategory();

    }
    public function index()
    {
//        $x=1589;
//        $p=rand(1000,2000);
//        $y=base64_encode($x).$p;
//        echo $y;
//        exit();
//        $_SESSION['name']='Abdullah Al Samad'; //value
        $this->product=new Product();
        $this->products=$this->product->getAllProduct();

       return view('home',['products'=>$this->products,'categories'=>$this->categories]);
    }
    public function categoryProduct($id)
    {

        $this->product=new Product();
        $this->products=$this->product->getCategoryProduct($id);

        return view('category',['categories'=>$this->categories,'products'=>$this->products]);
    }
    public function productDetail($id)
    {

        $this->product=new Product();
        $this->singleProduct=$this->product->getProductByid($id);

        return view( 'detail',['categories'=>$this->categories,'product'=>$this->singleProduct]);
    }
    public function fullName()
    {

        if(isset($_SESSION['id']))
        {
            return view('full-name',['categories'=>$this->categories]);
        }
        else
        {
            header("Location: action.php?page=login");
        }
    }
    public function calculator()
    {
        if(isset($_SESSION['id']))
        {
            return view('calculator', ['categories'=>$this->categories]);
        }
        else
        {
            header("Location: action.php?page=login");
        }
    }
    public function seriesOne()
    {
        if(isset($_SESSION['id']))
        {
            return view('series-one',['categories'=>$this->categories]);
        }
        else
        {
            header("Location: action.php?page=login");
        }
    }
    public function seriesTwo()
    {

        if(isset($_SESSION['id']))
        {
            return view('series-two',['categories'=>$this->categories]);
        }
        else
        {
            header("Location: action.php?page=login");
        }
    }
    public function seriesThree()
    {

        if(isset($_SESSION['id']))
        {
            return view('series-three',['categories'=>$this->categories]);
        }
        else
        {
            header("Location: action.php?page=login");
        }
    }
    public function login($message=null)
    {
        if(isset($_SESSION['id']))
        {
            header("Location: action.php?page=dashboard");
        }
        else
        {
            return view( 'login',['categories'=>$this->categories,'message'=>$message]);
        }

    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        header("Location: action.php?page=login");
    }
    public function dashboard()
    {

        if(isset($_SESSION['id']))
        {
            return view('dashboard',['categories'=>$this->categories]);
        }
        else
        {
            header("Location: action.php?page=login");
        }
    }

}