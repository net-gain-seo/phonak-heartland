<?php

function quiz_cycle_scripts_method() {
	wp_enqueue_script( 'cycle-hq', get_bloginfo('stylesheet_directory').'/admin/modules/hearing-quiz/cycle.js', array('jquery'), '1.7.1', true);
    wp_enqueue_script( 'quiz-slider', get_bloginfo('template_directory').'/admin/modules/hearing-quiz/slider.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'quiz_cycle_scripts_method');

function hearing_quiz() {
	$slider = '';

	$slider .= '<form method="post" class="quiz">';

		$slider .= '<div class="ngslider '.$class.'" '.(($id != '')? "id='\".$id.\"'":"").'>';
			$slider .= '<div class="ngslides" id="ngslides_1" data-offset="1" data-fx="fade" data-timeout="0">';

				//Questions/Slides
				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Is it time to have your hearing checked?</span>';
						$slider .= '<span class="subtext">Please answer the following questions to find out</span>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" class="nextQ1">Start Questionnaire</a>';
						$slider .= '<a href="#" class="arrow nextQ1"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Do people seem to mumble or speak softly?</span>';
						$slider .= '<div class="qwrap">';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="mumble" value="Yes"/>';
								$slider .= '<div class="check-display">Yes</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="mumble" value="Not Sure"/>';
								$slider .= '<div class="check-display">Not Sure</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="mumble" value="No"/>';
								$slider .= '<div class="check-display">No</div>';
							$slider .= '</label>';
						$slider .= '</div>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" class="nextQ1 hidden">Next Question</a>';
						$slider .= '<a href="#" class="arrow nextQ1 hidden"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Do you have to strain to hear and find it tiring?</span>';
						$slider .= '<div class="qwrap">';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="strain" value="Yes"/>';
								$slider .= '<div class="check-display">Yes</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="strain" value="not sure"/>';
								$slider .= '<div class="check-display">Not Sure</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="strain" value="No"/>';
								$slider .= '<div class="check-display">No</div>';
							$slider .= '</label>';
						$slider .= '</div>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" class="nextQ1 hidden">Next Question</a>';
						$slider .= '<a href="#" class="arrow nextQ1 hidden"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Do you misunderstand what others are saying and sometimes answer inappropriately?</span>';
						$slider .= '<div class="qwrap">';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="misunderstand" value="Yes"/>';
								$slider .= '<div class="check-display">Yes</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="misunderstand" value="not sure"/>';
								$slider .= '<div class="check-display">Not Sure</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="misunderstand" value="No"/>';
								$slider .= '<div class="check-display">No</div>';
							$slider .= '</label>';
						$slider .= '</div>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" class="nextQ1 hidden">Next Question</a>';
						$slider .= '<a href="#" class="arrow nextQ1 hidden"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Do people complain that you are turning the TV or radio too loud?</span>';
						$slider .= '<div class="qwrap">';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="tv_loud" value="Yes"/>';
								$slider .= '<div class="check-display">Yes</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="tv_loud" value="not sure"/>';
								$slider .= '<div class="check-display">Not Sure</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="tv_loud" value="No"/>';
								$slider .= '<div class="check-display">No</div>';
							$slider .= '</label>';
						$slider .= '</div>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" class="nextQ1 hidden">Next Question</a>';
						$slider .= '<a href="#" class="arrow nextQ1 hidden"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Are you having more trouble hearing in background noise than in quiet?</span>';
						$slider .= '<div class="qwrap">';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="background_noise" value="Yes"/>';
								$slider .= '<div class="check-display">Yes</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="background_noise" value="not sure"/>';
								$slider .= '<div class="check-display">Not Sure</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="background_noise" value="No"/>';
								$slider .= '<div class="check-display">No</div>';
							$slider .= '</label>';
						$slider .= '</div>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" class="nextQ1 hidden">Next Question</a>';
						$slider .= '<a href="#" class="arrow nextQ1 hidden"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Do you often ask people to repeat what they have said?</span>';
						$slider .= '<div class="qwrap">';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="repeat" value="Yes"/>';
								$slider .= '<div class="check-display">Yes</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="repeat" value="not sure"/>';
								$slider .= '<div class="check-display">Not Sure</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="repeat" value="No"/>';
								$slider .= '<div class="check-display">No</div>';
							$slider .= '</label>';
						$slider .= '</div>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" class="nextQ1 hidden">Next Question</a>';
						$slider .= '<a href="#" class="arrow nextQ1 hidden"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Do you hear a ringing or hissing noise, constantly or even occasionally?</span>';
						$slider .= '<div class="qwrap">';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="ringing" value="Yes"/>';
								$slider .= '<div class="check-display">Yes</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="ringing" value="not sure"/>';
								$slider .= '<div class="check-display">Not Sure</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="ringing" value="No"/>';
								$slider .= '<div class="check-display">No</div>';
							$slider .= '</label>';
						$slider .= '</div>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" class="nextQ1 hidden">Next Question</a>';
						$slider .= '<a href="#" class="arrow nextQ1 hidden"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Have you been exposed to loud noise over a period of time?</span>';
						$slider .= '<div class="qwrap">';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="loud_noise" value="Yes"/>';
								$slider .= '<div class="check-display">Yes</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="loud_noise" value="not sure"/>';
								$slider .= '<div class="check-display">Not Sure</div>';
							$slider .= '</label>';
							$slider .= '<label class="custom-label checkbox-label">';
								$slider .= '<input type="radio" name="loud_noise" value="No"/>';
								$slider .= '<div class="check-display">No</div>';
							$slider .= '</label>';
						$slider .= '</div>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" class="nextQ1 getResults hidden">Results</a>';
						$slider .= '<a href="#" class="arrow nextQ1 hidden getResults"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div class="results">';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">You answered yes to <span class="num_qs">4</span> questions</span>';
                        $slider .= '<span class="subtext subTextHearingLoss" style="display: none">This may mean you have a hearing loss.</span>';
						$slider .= '<span class="subtext">If you would like us to contact you to go over the results please fill out the contact form</span>';
						$slider .= '<div class="qwrap">';
							$slider .= '<input type="text" name="name" placeholder="*Name"/>';
							$slider .= '<input type="text" name="telephone" placeholder="Telephone"/>';
							$slider .= '<input type="text" name="email" placeholder="*Email Address"/>';
							$slider .= '<input type="hidden" class="nextQ1"/>';
							$slider .= '<div class="submit">Submit</div>';
							$slider .= '<span class="subtext">*Please note that if you experience a sudden loss of hearing, with or without onset of dizziness and/or noises in your ears, you should seek medical attention immediately.</span>';
						$slider .= '</div>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
						$slider .= '<a href="#" id="goto1">Start Over</a>';
						$slider .= '<a href="#" class="arrow nextQ1"></a>';
					$slider .= '</div>';
				$slider .= '</div>';

				$slider .= '<div>';
					$slider .= '<div class="question">';
						$slider .= '<span class="question_text">Thank you for contacting our clinic</span>';
						$slider .= '<span class="subtext">We will contact you to book a hearing assessment and go over your hearing test results</span>';
					$slider .= '</div>';
					$slider .= '<div class="next">';
					$slider .= '</div>';
				$slider .= '</div>';

				//End Questions/Slides

			$slider .= '</div>';
		$slider .= '</div><!--end of slider-->';

	$slider .= '</form>';
	/*if($num > 1){
		$slider .= '<div class="ngsliderOptions">';
			$slider .= '<div class="ngslidermenu">';
				$slider .= '<a id="ngsliderprev_'.$offset.'" class="ngsliderPrev"><span>Prev</span></a>';
				$slider .= '<a id="ngslidernext_'.$offset.'" class="ngsliderNext"><span>Next</span></a>';
			$slider .= '</div>';
		$slider .= '</div>';
	}*/

	return $slider;
}

add_shortcode('hearing_quiz','hearing_quiz');
