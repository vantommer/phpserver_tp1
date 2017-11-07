<?php

echo "Hello World!\n";

class Movie
{
    private $name=null;
    private $description="desc du film\n";
    private $time=120; 
    public function getName()
    {
        return $this->name;
    }
    public function setName($name="")
    {
        $this->name=$name;
    }
    
    
        public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description="")
    {
        $this->description=$description;
    }
    
    
        public function getTime()
    {
        return $this->time;
    }
    public function setTime($time="")
    {
        $this->thime=$time;
    }
    
    function Afficher()
    {
        echo $this->name;
        echo $this->description;
        echo $this->time;
    }
}
$movie= new Movie ("Mon film");
echo $movie->getName();
$movie->setName("Seigneur des Anneaux\n");
$movie->Afficher();