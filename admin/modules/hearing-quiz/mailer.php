<?php
//Set up ajax function
add_action('wp_ajax_submit_form', 'submit_form');
add_action('wp_ajax_nopriv_submit_form', 'submit_form');

function submit_form() {

	//echo '1';

	$data = $_POST['datavar'];

	$mumble = $data[0]['value'];
	$strain = $data[1]['value'];
	$misunderstand = $data[2]['value'];
	$tv_loud = $data[3]['value'];
	$background_noise = $data[4]['value'];
	$repeat = $data[5]['value'];
	$ringing = $data[6]['value'];
	$loud_noise = $data[7]['value'];
	$name = $data[8]['value'];
	$phone = $data[9]['value'];
	$email = $data[10]['value'];

	$message = '';

	$message .= '<strong>Name: </strong>' . $name;
	$message .= '<br/><strong>Email: </strong>' . $email;
	$message .= '<br/><strong>Phone: </strong>' . $phone;
	$message .= '<br/><br/><strong>Do people seem to mumble or speak softly? </strong>' . $mumble;
	$message .= '<br/><strong>Do you have to strain to hear and find it tiring? </strong>' . $strain;
	$message .= '<br/><strong>Do you misunderstand what others are saying and sometimes answer inappropriately? </strong>' . $misunderstand;
	$message .= '<br/><strong>Do people complain that you are turning the TV or radio too loud? </strong>' . $tv_loud;
	$message .= '<br/><strong>Are you having more trouble hearing in background noise than in quiet? </strong>' . $background_noise;
	$message .= '<br/><strong>Do you often ask people to repeat what they have said? </strong>' . $repeat;
	$message .= '<br/><strong>Do you hear a ringing or hissing noise, constantly or even occasionally? </strong>' . $ringing;
	$message .= '<br/><strong>Have you been exposed to loud noise over a period of time? </strong>' . $loud_noise;

	//echo $message;

	$to = get_option('hearing_quiz_email_to');

	$subject = 'Hearing Quiz Submission';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '.get_bloginfo('name').' <noreply@ihearu.com>'. "\r\n";

	//print_r($message);

	if(mail($to,$subject,$message,$headers)) {
		echo json_encode(array(
		'success' => 'true'
	));
	}
	else {
		echo json_encode(array(
		'success' => 'false'
	));
	}

    exit;
}
