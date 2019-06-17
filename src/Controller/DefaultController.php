<?php
/**
 * Created by PhpStorm.
 * User: Master Cy
 * Mail: mist.cy27@gmail.com
 * Company: BOSSI GROUP
 * Date: 23/05/2019
 * Time: 11:48
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController {

	public function index(){
		return $this->render('Default/index.html.twig');
	}
	public function topup(){
		return $this->render('Default/topup.html.twig');
	}
	public function help(){
		return $this->render('Default/help.html.twig');
	}
	public function join(){
		return $this->render('Default/join.html.twig');
	}
	public function connect(){
		return $this->render('Default/connect.html.twig');
	}
	public function about(){
		return $this->render('Default/Res/about.html.twig');
	}
	public function contact(){
		return $this->render('Default/Res/contact.html.twig');
	}
	public function terms(){
		return $this->render('Default/Res/terms.html.twig');
	}
	public function privacy_policy(){
		return $this->render('Default/Res/privacy_policy.html.twig');
	}
}