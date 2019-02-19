static public function charset_iconv($input,$convert_type=1, $in = 'GBK', $out = 'UTF-8'){
		if(is_array($input)) {
			foreach ($input as $key => $val){
				$input[$key] = self::charset_iconv($val,$convert_type,$in,$out);
			}
		} else {
			if( $convert_type == 1)
				$input = iconv($in,$out,$input);
			else
				$input = mb_convert_encoding($input,$out,$in);
		}
		
		return $input;
	}
