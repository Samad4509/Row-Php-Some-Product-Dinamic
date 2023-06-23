<?php


namespace App\classes;


class Calculator
{
    public $first_number,$second_number,$result,$choice;
    public function __construct($post)
    {
        $this->first_number=$post['first_number'];
        $this->second_number=$post['second_number'];
        $this->choice=$post['choice'];
    }

    public function makeCalculator()
    {
//        echo '<pre>';
//        print_r($post);
//        exit();


        switch ($this->choice)
        {
            case '+':
                echo $this->result =$this->first_number + $this->second_number;
                break;
            case '-':
                echo $this->result =$this->first_number - $this->second_number;
                break;
            case '*':
                echo $this->result =$this->first_number * $this->second_number;
                break;
            case '/':
                echo $this->result =$this->first_number / $this->second_number;
                break;
            case '%':
                echo $this->result =$this->first_number % $this->second_number;
                break;
            default:
               echo $this->result=0;
        }
//        if($this->choice=='+')
//        {
//            $this->result =$this->first_number + $this->second_number;
//        }
//        elseif($this->choice=='-')
//        {
//            $this->result =$this->first_number - $this->second_number;
//        }
//        elseif($this->choice=='*')
//        {
//            $this->result =$this->first_number * $this->second_number;
//        }
//        elseif($this->choice=='/')
//        {
//            $this->result =$this->first_number / $this->second_number;
//        }
//        elseif($this->choice=='%')
//        {
//            $this->result =$this->first_number % $this->second_number;
//        }
//        $this->result=$this->first_number + $this->second_number;
//        $this->result=$this->first_number - $this->second_number;
        header( "Location: action.php?page=calculator&result=$this->result&first_number=$this->first_number&second_number=$this->second_number");
    }

}