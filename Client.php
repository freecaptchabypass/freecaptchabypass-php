<?php

	namespace FCB;

	class Client {
		
		private $client = NULL;
		private $key = NULL;
		
		public function __construct($_key)
		{
			$this->client = new FreeCaptchaBypass($_key);
			$this->key = $_key;
		}
		
		public function imageToText($_image_base64) {
			$_type = 'ImageToTextTask';
			$_captcha['body'] = $_image_base64;
			
			$this->solve($_type, $_captcha);
		}
		
		public function recaptchaV2TaskProxyless($_site_key, $_page_url) {
			$_type = 'RecaptchaV2TaskProxyless';
			$_captcha['websiteKey'] = $_site_key;
			$_captcha['websiteURL'] = $_page_url;
			
			return $this->solve($_type, $_captcha);
		}	
	
		public function recaptchaV2Task($_site_key, $_page_url, $_page_action, $_min_score, $_proxy_address, $_proxy_type, $_proxy_port, $_proxy_login, $_proxy_password) {
			$_type = 'RecaptchaV2Task';
			$_captcha['websiteKey'] = $_site_key;
			$_captcha['websiteURL'] = $_page_url;
			$_captcha['pageAction'] = $_page_action;
			$_captcha['minScore'] = $_min_score;
			$_captcha['proxyAddress'] = $_proxy_address;
			$_captcha['proxyType'] = $_proxy_type;
			$_captcha['proxyPort'] = $_proxy_port;
			$_captcha['proxyLoginHere'] = $_proxy_login;
			$_captcha['proxyPasswordHere'] = $_proxy_password;			
			
			return $this->solve($_type, $_captcha);
		}
		
		public function recaptchaV3TaskProxyless($_site_key, $_page_url, $_page_action, $_min_score) {
			$_type = 'RecaptchaV3TaskProxyless';
			$_captcha['websiteKey'] = $_site_key;
			$_captcha['websiteURL'] = $_page_url;
			$_captcha['pageAction'] = $_page_action;
			$_captcha['minScore'] = $_min_score;
			
			return $this->solve($_type, $_captcha);
		}
		
		public function recaptchaV3Task($_site_key, $_page_url, $_page_action, $_min_score, $_proxy_address, $_proxy_type, $_proxy_port, $_proxy_login, $_proxy_password) {
			$_type = 'RecaptchaV3Task';
			$_captcha['websiteKey'] = $_site_key;
			$_captcha['websiteURL'] = $_page_url;
			$_captcha['pageAction'] = $_page_action;
			$_captcha['minScore'] = $_min_score;
			$_captcha['proxyAddress'] = $_proxy_address;
			$_captcha['proxyType'] = $_proxy_type;
			$_captcha['proxyPort'] = $_proxy_port;
			$_captcha['proxyLoginHere'] = $_proxy_login;
			$_captcha['proxyPasswordHere'] = $_proxy_password;			
			
			return $this->solve($_type, $_captcha);
		}		
		
		public function recaptchaV2EnterpriseTaskProxyless($_site_key, $_page_url) {
			$_type = 'RecaptchaV2EnterpriseTaskProxyless';
			$_captcha['websiteKey'] = $_site_key;
			$_captcha['websiteURL'] = $_page_url;
			
			return $this->solve($_type, $_captcha);
		}
		
		public function recaptchaV2EnterpriseTask($_site_key, $_page_url, $_proxy_address, $_proxy_type, $_proxy_port, $_proxy_login, $_proxy_password) {
			$_type = 'RecaptchaV2EnterpriseTask';
			$_captcha['websiteKey'] = $_site_key;
			$_captcha['websiteURL'] = $_page_url;
			$_captcha['proxyAddress'] = $_proxy_address;
			$_captcha['proxyType'] = $_proxy_type;
			$_captcha['proxyPort'] = $_proxy_port;
			$_captcha['proxyLoginHere'] = $_proxy_login;
			$_captcha['proxyPasswordHere'] = $_proxy_password;			
			
			return $this->solve($_type, $_captcha);
		}	
		
		public function funCaptchaTaskProxyless($_public_key, $_page_url, $_funcaptchaApiJSSubdomain, $_data) {
			$_type = 'FunCaptchaTaskProxyless';
			$_captcha['websitePublicKey'] = $_public_key;
			$_captcha['websiteURL'] = $_page_url;
			$_captcha['funcaptchaApiJSSubdomain'] = $_funcaptchaApiJSSubdomain;
			$_captcha['data'] = $_data;
			
			return $this->solve($_type, $_captcha);
		}
		
		public function funCaptchaTask($_public_key, $_page_url, $_funcaptchaApiJSSubdomain, $_data, $_proxy_address, $_proxy_type, $_proxy_port, $_proxy_login, $_proxy_password) {
			$_type = 'FunCaptchaTask';
			$_captcha['websitePublicKey'] = $_public_key;
			$_captcha['websiteURL'] = $_page_url;
			$_captcha['funcaptchaApiJSSubdomain'] = $_funcaptchaApiJSSubdomain;
			$_captcha['data'] = $_data;
			$_captcha['proxyAddress'] = $_proxy_address;
			$_captcha['proxyType'] = $_proxy_type;
			$_captcha['proxyPort'] = $_proxy_port;
			$_captcha['proxyLoginHere'] = $_proxy_login;
			$_captcha['proxyPasswordHere'] = $_proxy_password;
			
			return $this->solve($_type, $_captcha);
		}		
		
		public function hCaptchaTaskProxyless($_public_key, $_page_url, $_is_invisible, $_data) {
			$_type = 'HCaptchaTaskProxyless';
			$_captcha['websitePublicKey'] = $_public_key;
			$_captcha['websiteURL'] = $_page_url;
			$_captcha['isInvisible'] = $_is_invisible;
			$_captcha['data'] = $_data;
			
			return $this->solve($_type, $_captcha);
		}
		
		public function hCaptchaTask($_public_key, $_page_url, $_is_invisible, $_data, $_proxy_address, $_proxy_type, $_proxy_port, $_proxy_login, $_proxy_password) {
			$_type = 'HCaptchaTask';
			$_captcha['websitePublicKey'] = $_public_key;
			$_captcha['websiteURL'] = $_page_url;
			$_captcha['isInvisible'] = $_is_invisible;
			$_captcha['data'] = $_data;
			$_captcha['proxyAddress'] = $_proxy_address;
			$_captcha['proxyType'] = $_proxy_type;
			$_captcha['proxyPort'] = $_proxy_port;
			$_captcha['proxyLoginHere'] = $_proxy_login;
			$_captcha['proxyPasswordHere'] = $_proxy_password;
			
			return $this->solve($_type, $_captcha);
		}

		public function hCaptchaEnterpriseTask($_public_key, $_page_url) {
			$_type = 'HCaptchaEnterpriseTask';
			$_captcha['websitePublicKey'] = $_public_key;
			$_captcha['websiteURL'] = $_page_url;
			
			return $this->solve($_type, $_captcha);
		}		
		
		public function solve($_type, $_task) {
			return $this->client->createTask($_type, $_task);				
			
		}
		
		public function balance() {
			return $this->client->getBalance();
		}
		
		public function getResult($_task_id) {
			return $this->client->getTaskResult($_task_id);
		}
	}

?>
