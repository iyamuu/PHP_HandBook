<?php

class Customer{
    private $customer_id;
    private $customer_name;
    private $customer_telno;
    private $customer_address;

    

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
     * Get the value of customer_name
     */ 
    public function getCustomer_name()
    {
        return $this->customer_name;
    }

    /**
     * Set the value of customer_name
     *
     * @return  self
     */ 
    public function setCustomer_name($customer_name)
    {
        $this->customer_name = $customer_name;

        return $this;
    }

    /**
     * Get the value of customer_telno
     */ 
    public function getCustomer_telno()
    {
        return $this->customer_telno;
    }

    /**
     * Set the value of customer_telno
     *
     * @return  self
     */ 
    public function setCustomer_telno($customer_telno)
    {
        $this->customer_telno = $customer_telno;

        return $this;
    }

    /**
     * Get the value of customer_address
     */ 
    public function getCustomer_address()
    {
        return $this->customer_address;
    }

    /**
     * Set the value of customer_address
     *
     * @return  self
     */ 
    public function setCustomer_address($customer_address)
    {
        $this->customer_address = $customer_address;

        return $this;
    }
}