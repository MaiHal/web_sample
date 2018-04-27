<?php 

class RecipesController extends AppController{
	public function index(){
		$recipes = array($this->Recipe->find('first'));
		$this->set('recipes', $recipes);
	}
}
