<?php

class pojedynczy_zimowy
{
    public $title;
    public $date;
    public $description;
    public $description_extra;
    public $photo;

    public function __construct($Title, $Date, $Descripton, $DescriptionExtra, $Photo)
    {
        $this->title = $Title;
        $this->date = $Date;
        $this->description = $Descripton;
        $this->description_extra = $DescriptionExtra;
        $this->photo = $Photo;
    }
}
