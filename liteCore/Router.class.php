<?php
/**
 * Created by PhpStorm.
 * User: Phil
 * Date: 07/01/2017
 * Time: 14:48
 */
namespace liteCore;
class Router {
    public $tplPath = '';
    public $state = 200 ;
    private $html = '';
    private $menuArr = [];

    /**
     * Router constructor.
     * @param array $menuArr
     */
    public function __construct($menuArr = []){
        $this->menuArr = $menuArr ;
    }

    /**
     * @name getRequest
     * @desc Sets $this->tplPath and ->state
     */
    public function getRequest(){
        $parsedUrl = parse_url($_SERVER['REQUEST_URI']);
        if (!isset($parsedUrl['path']))
            $parsedUrl['path'] = '/';
		
		# Fuck around with the requested url, so we're just dealing with alpha-numeric str
        $fName = str_replace(array(
            '/', '.', '?', '&', '\\', '#'
        ), '', $parsedUrl['path']);
        if ($fName == '') $fName = 'index';

        $tplDir = __DIR__ . '/../frontEnd/templates/';
        if (file_exists($tplDir . $fName . '.tpl.php')){
            $this->tplPath = $tplDir . $fName . '.tpl.php';
        } else {
            $this->state = 404 ;
            $this->tplPath = $tplDir . 'error.tpl.php';
        }
    }

    /**
     * @name render
     * @desc sets $this->html from tplPath
     */
    public function render(){
        ob_start();
        require_once($this->tplPath);
        $this->html = ob_get_clean();
    }

    /**
     * @name getNavHtml
     * @return string
     */
    public function getNavHtml(){

        $html = '';
        return $html;
    }

    /**
     * @desc Gets ->html
     * @return string
     */
    public function __toString(){
        return $this->html;
    }
}