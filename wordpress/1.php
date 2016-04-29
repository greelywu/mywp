<?php
/*if ( isset($_SERVER['HTTPS']) ) {
                if ( 'on' == strtolower($_SERVER['HTTPS']) )
                        echo 'https';
                if ( '1' == $_SERVER['HTTPS'] )
                        echo 'https';
				if (stripos(get_option('siteurl'), 'https://') === 0)
				echo 'https';
        } elseif ( isset($_SERVER['SERVER_PORT']) && ( '443' == $_SERVER['SERVER_PORT'] ) ) {
                echo 'https';
        } 
        echo 'http';
		
		if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
				echo 'https';
		if ( isset($_SERVER['SERVER_PORT']) && ( '443' == $_SERVER['SERVER_PORT'] ))
				echo 'https';
			
			var_dump($_SERVER);
			
		*/
		
	foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n"."<br>";
}
echo "----------break----------<br>";
$array1 = $_SERVER;
foreach($array1 as $key=>$value){
  echo "$key:$value".'</br>';
}
?>
