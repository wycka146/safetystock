<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	public function authenticate()
	{
		$user = Vartotojas::model()->findByAttributes(array('prisijungimas' => $this->username));
		if($user === null){
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		} else {
			if( $user->slaptazodis !== $this->password) {
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			} else {
				$this->_id = $user->vartotojas_id;
				
				$this->setState('role', $user->role);
				
				$this->errorCode=self::ERROR_NONE;
			}
		}
		return !$this->errorCode;
	}
	
	public function getId(){
		return $this->_id;
	}
}