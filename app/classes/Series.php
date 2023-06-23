<?php


namespace App\classes;


class Series
{
    public $i,$startingNumber,$endingNumber,$result,$resultString,$output,$res;
    public function __construct($post)
    {
        $this->startingNumber=$post['starting_number'];
        $this->endingNumber=$post['ending_number'];

    }

    public function seriesOne()
    {
        if( $this->startingNumber > $this->endingNumber)
        {
            for ($this->i =$this->startingNumber; $this->i>=$this->endingNumber; $this->i--)
            {
                $this->result .= $this->i. ' ';
            }
        }
            elseif ($this->startingNumber <$this->endingNumber)
            {
                for ($this->i =$this->startingNumber; $this->i<=$this->endingNumber; $this->i++)
                {
                    $this->result .= $this->i. ' ';
                }
            }

        header("Location: action.php?page=seriesOne&result=$this->result");
    }
    public function seriesTwo()
    {
        if( $this->startingNumber > $this->endingNumber)
        {
            for ($this->i =$this->startingNumber; $this->i>=$this->endingNumber; $this->i--)
            {
                $this->result .= $this->i. ' ';
            }
        }
        elseif ($this->startingNumber <$this->endingNumber)
        {
            for ($this->i =$this->startingNumber; $this->i<=$this->endingNumber; $this->i++)
            {
                $this->result .= $this->i. ' ';
            }
        }

        header("Location: action.php?page=seriesOne&result=$this->result");
    }
    public function seriesThree()
    {
        $this->resultString='';
        for ($this->i=$this->startingNumber;$this->i<=$this->endingNumber;$this->i++)
        {
            $this->resultString .=$this->i.'+';
            $this->result=$this->result+ $this->i;
        }
        $this->output=rtrim($this->resultString, '+');
        $this->result=$this->output.'='.$this->result;
        $this->res =base64_encode($this->result);
        header("Location: action.php?page=seriesThree&result=$this->res");
    }
}