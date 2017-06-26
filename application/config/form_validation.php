<?php 
	$config = array(
        'auth/verify' => array(
            array(
                'field' => 'uname',
                'label' => 'Username',
                'rules' => 'required'
            ),
            array(
                'field' => 'pass',
                'label' => 'Password',
                'rules' => 'required'
            )           
        )
	);