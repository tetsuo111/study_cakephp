<?php
//memoします

class productController{
	public $uses = array('product');

	public function yourAction(){
			$products = $this->product->find('all');
			$this->set('products' , $products);
			$this->render('index');
	}
}



