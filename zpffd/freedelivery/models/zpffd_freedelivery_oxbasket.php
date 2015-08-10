<?php


/**
 * Class zpffd_freedelivery_oxbasket extends oxBasket.
 *
 * @see oxBasket
 */
class zpffd_freedelivery_oxbasket extends zpffd_freedelivery_oxbasket_parent{

 /**
  * return the price departure between the value of its basket and the minimum order size.
  *
  * @return decimal
  */  
  public function getPriceDeparture(){

      //set the minimum order size in admin as 100 euro.
	  $dFreeDeliveryCondition = 100;
      
	  //the total price in this basket
	  $dBasketSum = $this->getBruttoSum();

      //get the price departure
	  $dPriceDeparture = $dFreeDeliveryCondition-$dBasketSum;

	  return $dPriceDeparture;
  }
}