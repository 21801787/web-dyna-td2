<?php
namespace controllers;
 /**
 * Controller InscriptionsController
 **/
class InscriptionsController extends ControllerBase{
    /**
     *
     * @get("_default","name"=>"Home")
     */
	public function index(){
		echo 'Bienvenue ! Cette application vous permet de vous inscrire à notre prochaine flasmob.';

	}
}
