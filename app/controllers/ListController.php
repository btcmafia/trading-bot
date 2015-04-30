<?php

namespace app\controllers;

use app\models\IgOrders;
use app\models\BitstampUsdOrders;
use app\models\CoinprismOrders;
use app\models\TcpOrders;

class ListController extends \lithium\action\Controller {

protected function _init() {
	parent::_init();
	$this->_render['layout'] = false;
}


public function AddToIg($transaction_id, $amount) {

	$result = IgOrders::create(array('TransactionID' => $transaction_id,
					 'Amount' 	 => $amount,
					 'TimeRecorded'  => $time_recorded,
					 'Status' 	 => $status,
					 'ExternalID' 	 => $external_id)
				   );

}





/////////////////////////IGNORE//////////////////////////////////////
public function news($id) {
    $news = Mylists::first(array(
      'conditions' => array('id' => $id)
    ));
    return array(
      'news' => $news->data()  
    );
  }

    public function addtonews($title,$body) {


        $list = Mylists::create(array('title' => urldecode($title),
                                    'body' => urldecode($body),
				));

//	$list->save();

	echo "<p>Title: $title<br />
		Body: $body</p>";

        }
////////////////STOP IGNORING/////////////////////////////////////////
}

?>
