<?php

class GRAV_TEST_HTML_VALID
{
	public function type()
	{
		return 'php';
	}

	public function environment()
	{
		return 'dev,staging,production';
	}

	public function group()
	{
		return 'HTML Tests';
	}

	public function label()
	{
		return 'HTML Valid';
	}

	public function description()
	{
		return 'Check that your Pages are HTML Valid (W3C)';
	}

	public function run()
	{
		if(GRAV_TESTS::guess_environment() === 'local')
		{
			return array(
				'pass' => null,
				'message' => 'Cannot Validate when using Localhost. Try on a valid Hostname.',
				'location' => ''
			);
		}

		$loaded_pages = 0;

		$urls = GRAV_TESTS::get_general_page_urls();

		$errors = array();

		foreach ($urls as $url)
		{
			if($response = wp_remote_get('https://validator.w3.org/nu/?doc='.$url, array('sslverify' => false, 'timeout' => 15)))
			{
				if(is_wp_error($response))
				{
					$error_message = $response->get_error_message();
				   	return array(
						'pass' => null,
						'message' => 'Error loading W3C Validator: '.$response->get_error_message()
					);
				}
				else if(is_array($response) && !empty($response['body']))
				{
					if(strpos($response['body'], '<div id="results">') === false)
					{
						return array(
							'pass' => null,
							'message' => 'Error loading W3C Validator',
							'location' => ''
						);
					}

					if(strpos($response['body'], '<li class="error">') !== false)
					{
						$errors[] = array(
							'message' => 'Page ('.$url.') is not HTML Valid. <a target="_blank" href="'.'https://validator.w3.org/nu/?doc='.$url.'">Learn More</a>',
							'location' => $url
						);
					}

					$loaded_pages++;
				}
			}
		}

		if(!$loaded_pages)
		{
			return array(
				'pass' => null,
				'message' => 'Error loading W3C Validator'
			);
		}

		if(!empty($errors))
		{
			return array(
				'pass' => false,
				'errors' => $errors,
				'message' => 'There are ('.count($errors).') Pages with Errors'
			);
		}

		return array(
			'pass' => true,
			'message' => 'Successfully Validated ('.$loaded_pages.') Pages'
		);
	}
}