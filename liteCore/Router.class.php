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
	
	private $_relativeRoot = '/';
	private $_protocol = 'http://';

    /**
     * Router constructor.
     * @param array $menuArr
     */
    public function __construct($menuArr = []){
		if (
			isset($_SERVER['HTTPS']) &&
			($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
			isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
			$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
		) {
			$protocol = 'https://';
		} else {
			$protocol = 'http://';
		}
		$this->_protocol = $protocol;
        $this->menuArr = $menuArr ;
    }
	
	/*
	 * @param $url string 
	 * @param $httpCode int | 301 
	 * @desc Redirect helper, kills script execution
	 */
	public function redirect($url, $httpCode = 301 ){		
		$relativeLen = strlen($this->_relativeRoot); 
		$parsedUrl = parse_url($url);
		if (!isset($parsedUrl['host'])){
			$constructedUrl = $this->_protocol;
			if (!isset($parsedUrl['host']))
				$constructedUrl .= $_SERVER['HTTP_HOST'];
			else
				$constructedUrl .= $parsedUrl['host'];
			if (substr($url, 0, $relativeLen) != $this->_relativeRoot)
				$constructedUrl .= $this->_relativeRoot;
			if (isset($parsedUrl['path'])) $constructedUrl .= $url;
		} else {
			$constructedUrl = $url;
		}
		
		http_response_code($httpCode);
		header('Location: ' . $constructedUrl, true, $httpCode);
		exit();
	}

	

    /**
     * @name getRequest
     * @desc Sets $this->tplPath and ->state
     */
    public function getRequest(){
        $parsedUrl = parse_url($_SERVER['REQUEST_URI']);
        if (!isset($parsedUrl['path']))
            $parsedUrl['path'] = '/';
		
		/*
		 * Remove trailing slash via re-dir, if not homepage
		 */
		if ($parsedUrl['path'] != '/' && substr($parsedUrl['path'], -1 ) == '/'){
			$this->redirect(trim($parsedUrl['path'], '/'));
		}
		
		
		# Fuck around with the requested url, so we're just dealing with alpha-numeric str
		# could regex, but eh, thats overkill 
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