<?php
  /**
   * The Virus Monster Class Constructor
   */
  class Virus
  {
    // protected $id;
    public $birthday;
    public $name;
    public $level;
    // protected $age;
    // protected $feeling;
    // protected $lastPlayed;
    // protected $lastEaten;

    public function __construct($birthday,$name, $level)
    {
      // $this -> $id      = $id
      $this ->birthday    = $birthday;
      $this ->name    = $name;
      $this ->level   = $level;
      // $this -> $age     = $age
      // $this -> $feeling = $feeling
    }
    public function Hatch()
    {
      // code...
    }
    public function setAge($value='')
    {
      // code...
    }
    public function Eat()
    {
      // code...
    }
    public function Sleep()
    {
      // code...
    }
    public function Happy()
    {
      // code...
    }
    public function Sad()
    {
      // code...
    }
    public function Angry()
    {
      // code...
    }
    public function Evolution()
    {
      // code...
    }
  }

?>
