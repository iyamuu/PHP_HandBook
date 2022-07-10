<?php
class Room{
    private $room_no;
    private $room_name;
    private $information;
    private $main_image;
    private $image1;
    private $image2;
    private $image3;
    private $amenity;
    private $dayfee;
    private $capacity;
    private $room_type;


    /**
     * Get the value of room_no
     */ 
    public function getRoom_no()
    {
        return $this->room_no;
    }

    /**
     * Set the value of room_no
     *
     * @return  self
     */ 
    public function setRoom_no($room_no)
    {
        $this->room_no = $room_no;

        return $this;
    }

    /**
     * Get the value of room_name
     */ 
    public function getRoom_name()
    {
        return $this->room_name;
    }

    /**
     * Set the value of room_name
     *
     * @return  self
     */ 
    public function setRoom_name($room_name)
    {
        $this->room_name = $room_name;

        return $this;
    }

    /**
     * Get the value of information
     */ 
    public function getinformation()
    {
        return $this->information;
    }

    /**
     * Set the value of information
     *
     * @return  self
     */ 
    public function setinformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get the value of main_image
     */ 
    public function getMain_image()
    {
        return $this->main_image;
    }

    /**
     * Set the value of main_image
     *
     * @return  self
     */ 
    public function setMain_image($main_image)
    {
        $this->main_image = $main_image;

        return $this;
    }

    /**
     * Get the value of image1
     */ 
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set the value of image1
     *
     * @return  self
     */ 
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get the value of image2
     */ 
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set the value of image2
     *
     * @return  self
     */ 
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get the value of image3
     */ 
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * Set the value of image3
     *
     * @return  self
     */ 
    public function setImage3($image3)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get the value of amenity
     */ 
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Set the value of amenity
     *
     * @return  self
     */ 
    public function setAmenity($amenity)
    {
        $this->amenity = $amenity;

        return $this;
    }

    /**
     * Get the value of dayfee
     */ 
    public function getDayfee()
    {
        return $this->dayfee;
    }

    /**
     * Set the value of dayfee
     *
     * @return  self
     */ 
    public function setDayfee($dayfee)
    {
        $this->dayfee = $dayfee;

        return $this;
    }

    /**
     * Get the value of capacity
     */ 
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */ 
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    

    /**
     * Get the value of room_type
     */ 
    public function getRoom_type()
    {
        return $this->room_type;
    }

    /**
     * Set the value of room_type
     *
     * @return  self
     */ 
    public function setRoom_type($room_type)
    {
        $this->room_type = $room_type;

        return $this;
    }
}