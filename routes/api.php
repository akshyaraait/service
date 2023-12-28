<?php

Route::group(['prefix' => 'api', 'namespace' => 'AkshyaraaIt\Service\Controllers\Api',], function(){
	Route::get('service/check', 'CheckController@index');
});