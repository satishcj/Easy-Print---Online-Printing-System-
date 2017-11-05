<?php


class File{
	private $_suporttedFormats = ['image/png','image/jpeg','image/jpg','image/gif'];

	public function uploadFile($file){
		if (is_array($file)){
			//continue
			if(in_array($file['type'],$this->_suporttedFormats)){
				//continue
				move_uploaded_file($file['tmp_name'], 'uploads/'.$file['name']);
				echo 'File has been uploaded.';
			}else{
				die('File format is not supported');
			}
		}else{
			die('No file was Uploaded');
		}
	}
}