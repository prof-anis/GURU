<?php
$namespace='lollypop\HTT\Controllers';

Route::group([
	'namespace'=>$namespace,
	'prefix'=>'audit',
	],function(){
		Route::get('/',function(){
			return 'hello';
		}
	});



?>