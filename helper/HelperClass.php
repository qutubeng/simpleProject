<?php
class HelperClass{
	public function __construct(){
		
	}
	/**
	 * takes 1 parameter of directory path and return only the files under that folder, not sub folder or sub folder files
	 * @param String $dir_path
	 */
	public function getOnlyFilesInDirectory($dir_path){
		$files = array();
		
		$all = scandir($dir_path);
		if($all != false){
// 			echo "not false";
			$total_file_folder = count($all);
			//echo $total_file_folder;
			foreach($all as $file)
			{
				//echo $file;
				if(is_file($dir_path."/".$file)){ // is_file(full path is necessary)
					$files[] = $file;
				}
			}
			
		}else{
			return $all;
		}
		return $files;
	}
	public function filterFilesWithAllowedFormats($files, $allowed){
		$return_array = array();
		foreach($files as $file){
			$extension = explode('.', $file);
			$extension = end($extension);
			if(in_array($extension, $allowed)){
				$return_array[] = $file;
			}
		}
		return $return_array;
	}
	/**
	 * check if the transaction is valid
	 */
	public function checkTransValidity($row){
		foreach($row as $key => $value){
			if($value < 0){
				return false;
				break;
			}else{
				if($key == 'ReceiptNumber' && $value == 'INVOICE'){
					return false;
					break;
				}
			}
		}
		return true;
	} 
	/**
	 * Web application: checks the URL validation for MVC and return mapped url
	 * url['language'] = string;
	 * url['controller'] = string;
	 * url['action'] = string;
	 * url['params] = array(1,2,3);
	 */
	public function urlMapper($url, $config){
		$url_array = array();
		$params = array();
		$param_count = 0;
		
		if(is_string($url) && !empty($url)){
			$url_list = explode('/', $url);
			$count = count($url_list);
			if($url_list[0] != 'my-admin'){
				$url_array['src'] = 'site';
				$languages = $config['languages'];
				if(in_array($url_list[0], $languages)){ //$url_list[0] == "se" || $url_list[0] == "en"){
					$url_array['language'] = $url_list[0];
				}else{
					return false;
				}
				if(isset($url_list[1])){
					$url_array['controller'] = $url_list[1];
				}
				if(isset($url_list[2])){
					$url_array['action'] = $url_list[2];
				}
				if($count >= 3){
					for($i = 3; $i < $count; $i++ ){
						$params[] = $url_list[$i];
						$param_count++;
					}
					$url_array['params'] = $params;
					$url_array['params_total'] = $param_count;
				}
			}else{
				$url_array['src'] = 'admin';
				if($url_list[1] == "se" || $url_list[1] == "en"){
					$url_array['language'] = $url_list[1];
				}else{
					return 'admin';
				}
				if(isset($url_list[2])){
					$url_array['controller'] = $url_list[2];
				}
				if(isset($url_list[3])){
					$url_array['action'] = $url_list[3];
				}
				if($count >= 4){
					for($i = 4; $i < $count; $i++ ){
						$params[] = $url_list[$i];
						$param_count++;
					}
					$url_array['params'] = $params;
					$url_array['params_total'] = $param_count;
				}
			}
		}else{
			return false;
		}
		return $url_array;
	}
}