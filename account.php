<?php


class account
{
    Private $account_no;
      Private $opening_date;
      private  $balance;
      public function get_account_no()
              {
          return $this->account_no;
      }

      public function get_opening_date() 
              {
          return $this->opening_date;
      }

      public function get_balance()
              {
          return $this->balance;
      }

      function __construct($account_no, $opening_date) 
                {
          $this->account_no = $account_no;
          $this->opening_date = $opening_date;
          $this->balance = $balance;
      }
  public function deposit($amount)          
{
    $this->balance=  $this->balance+$amount;
    
}

   public function witdraw($amount)          
{
    $this->balance=  $this->balance-$amount;
    
}
      
      
}
