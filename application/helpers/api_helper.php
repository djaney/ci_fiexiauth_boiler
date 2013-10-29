<?php

function apiOut($result,$message ='',$payload = array()){
	echo json_encode(array(
		'success'=>$result,
		'message'=>$message,
		'data'=>$payload,
	));
	exit;
}

function apiGetPayload(){
	return json_decode(file_get_contents('PHP://input'));
}