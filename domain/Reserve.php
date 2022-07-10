<?php
class Reserve{
    private $reserve_no;
    private $reserve_date;
    private $room_no;
    private $customer_id;
    private $numbers;
    private $checkin_time;
    private $message;

    /**
     * Get the value of reserve_no
     */ 
    public function getReserve_no()
    {
        return $this->reserve_no;
    }

    /**
     * Set the value of reserve_no
     *
     * @return  self
     */ 
    public function setReserve_no($reserve_no)
    {
        $this->reserve_no = $reserve_no;

        return $this;
    }

    /**
     * Get the value of reserve_date
     */ 
    public function getReserve_date()
    {
        return $this->reserve_date;
    }

    /**
     * Set the value of reserve_date
     *
     * @return  self
     */ 
    public function setReserve_date($reserve_date)
    {
        $this->reserve_date = $reserve_date;

        return $this;
    }

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
     * Get the value of customer_id
     */ 
    public function getCustomer_id()
    {
        return $this->customer_id;
    }

    /**
     * Set the value of customer_id
     *
     * @return  self
     */ 
    public function setCustomer_id($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * Get the value of numbers
     */ 
    public function getNumbers()
    {
        return $this->numbers;
    }

    /**
     * Set the value of numbers
     *
     * @return  self
     */ 
    public function setNumbers($numbers)
    {
        $this->numbers = $numbers;

        return $this;
    }

    /**
     * Get the value of checkin_time
     */ 
    public function getCheckin_time()
    {
        return $this->checkin_time;
    }

    /**
     * Set the value of checkin_time
     *
     * @return  self
     */ 
    public function setCheckin_time($checkin_time)
    {
        $this->checkin_time = $checkin_time;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}