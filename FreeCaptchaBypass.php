<?php
	namespace FCB;
	
	class FreeCaptchaBypass {
		private $_key = NULL;
		private $server = 'https://freecaptchabypass.com';
		
		public function __construct($_key) {
			$this->key = $_key;
		}			
		
		public function getBalance() {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->server . "/getBalance");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HEADER, FALSE);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_TCP_NODELAY, TRUE);
			curl_setopt($ch, CURLOPT_USERAGENT,  "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8");					
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));
			
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array("clientKey" => $this->key)));
			
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			$_ans = curl_exec($ch);
			curl_close($ch);												
						
			return $_ans;
		}
		
		public function getTaskResult($_taskId) {
			$_payload = json_encode(array("clientKey" => $this->key, "taskId" => $_taskId));
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->server . "/getTaskResult");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HEADER, FALSE);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_TCP_NODELAY, TRUE);
			curl_setopt($ch, CURLOPT_USERAGENT,  "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8");					
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));	
			curl_setopt($ch, CURLOPT_POSTFIELDS, $_payload);	
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			$_ans = curl_exec($ch);
			curl_close($ch);							
			
			return $_ans;
		}
		
		public function createTask($_task_type, $_parameters = []) {
			$task = array("type" => $_task_type);
			
			foreach($_parameters as $key => $value) {
				$task[$key] = $value;
			}			
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->server . "/createTask");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HEADER, FALSE);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			curl_setopt($ch, CURLOPT_TCP_NODELAY, TRUE);
			curl_setopt($ch, CURLOPT_USERAGENT,  "Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1a2pre) Gecko/2008073000 Shredder/3.0a2pre ThunderBrowse/3.2.1.8");					
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));
			
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
				"clientKey" => $this->key, 
				"task" => $task
			)));
			
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			$_ans = curl_exec($ch);
			curl_close($ch);		
					
			return $_ans;
		}
	}

?>