<?php

$router->get('/informations', 'InformationController@index');
$router->post('/informations/store', 'InformationController@store');
$router->delete('/informations/destroy/{id}', 'InformationController@destroy');
$router->put('/informations/update/{id}', 'InformationController@update');