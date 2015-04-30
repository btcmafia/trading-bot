<?php

namespace app\controllers;

use app\models\News;

class HelloController extends \lithium\action\Controller {

protected function _init() {
	parent::_init();
	$this->_render['layout'] = 'HelloLayout';
}

public function index() {
   echo "Hello World!";
return $this->render(array('layout' => false));
 }

public function goodbye($name) {

	return array(
	'name' => $name
	);
}

public function news($id) {
    $news = News::first(array(
      'conditions' => array('id' => $id)
    ));
    return array(
      'news' => $news->data()  
    );
  }

    public function addtonews($title,$body) {


        $list = News::create(array('title' => urldecode($title),
                                    'body' => urldecode($body),
				));

	$list->save();

	echo "<p>Title: $title<br />
		Body: $body</p>";

        }

}

?>
