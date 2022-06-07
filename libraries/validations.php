<?php 

namespace Libraries;

trait Validations {

	protected $data = [];
	protected $error = [];
	
	private function fieldMatch($match, $ERROR_MESSAGE)
	{
		switch($match)
		{
			case "firstname":
				 return $ERROR_MESSAGE;
				 break;

		    case "surname":
				 return $ERROR_MESSAGE;
				 break;

			case "fullname":
				  return $ERROR_MESSAGE;
				  break;

			case "subject":
				  return $ERROR_MESSAGE;
				  break;

			case "message":
				  return $ERROR_MESSAGE;
				  break;

			case "location":
				  return $ERROR_MESSAGE;
				  break;
		}

	}

	protected function VALIDATE_STRING($value, $match)
	{
		if ($value == '' || $value == NULL) {
			
			$ERROR_MESSAGE = "This field cannot be empty";

			$ACTUAL_ERROR = $this->fieldMatch($match, $ERROR_MESSAGE);

			return $this->error[$match] = $ACTUAL_ERROR;

		} elseif (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $value)) {

			$ERROR_MESSAGE = "This field cannot contain special characters";

			$ACTUAL_ERROR = $this->fieldMatch($match, $ERROR_MESSAGE);

			return $this->error[$match] = $ACTUAL_ERROR;

		} elseif (is_numeric($value)) {

			$ERROR_MESSAGE = "This field cannot contain a digit";

			$ACTUAL_ERROR = $this->fieldMatch($match, $ERROR_MESSAGE);

			return $this->error[$match] = $ACTUAL_ERROR;

		} else {
			
			array_push($this->data, $value);
			return $this->data;
		}
	}

	protected function VALIDATE_EMAIL($email)
	{
		if ($email == '' || $email == NULL) {

			return $this->error['email'] = "Email cannot be empty";
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

			return $this->error['email'] = "Invalid Email";
		} else {

			array_push($this->data, $email);
			return $this->data;
		}
	}

	protected function VALIDATE_CONTACT($contact)
	{
		if (!is_numeric($contact)) {

			return $this->error['contact'] = "Invalid phone number";

		} else {
			
			array_push($this->data, $contact);
			return $this->data;
		}
	}

	protected function VALIDATE_PASSWORD($password)
	{
		if ($password == '' || $password == NULL) {

			return $this->error['password'] = "Password cannot be empty";

		} elseif (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {

			return $this->error['password'] = "Provide at least one special character";

		} else {

			array_push($this->data, md5($password));
			return $this->data;
		}
	}
}

?>