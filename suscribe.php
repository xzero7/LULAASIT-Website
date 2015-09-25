<?php
/*
	@AUTHOR: Alvaro Home
	@PURPOSE: WIll send an email to lulaasit to notify them of a new suscriber
*/
	if(!empty($_POST['email']))
	{
		$email = $_POST['email'];
		$message = "Congratulations lulaasit! \r\n ".$email." Has requested to be added your mailing list!";
		$subject = "LULAASIT You Have a new suscriber!";

		//send mail
		if(mail('lulaasit@gmail.com', $subject, wordwrap($message, 70, "\r\n")))
		{
			echo "mail sent";
		}
		else
		{
			//print_r(error_get_last());
			echo "sasdsad";
		}
	}
	else
	{
		echo "create redirect page";
	}


	//header("Refresh:0");
	



?>
