<?php
/**
 * This file is used for managing data in database.
 *
 * @author  Tech Banker
 * @package wp-mail-bank/lib
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}// Exit if accessed directly
if ( ! is_user_logged_in() ) {
	return;
} else {
	$access_granted = false;
	foreach ( $user_role_permission as $permission ) {
		if ( current_user_can( $permission ) ) {
			$access_granted = true;
			break;
		}
	}
	if ( ! $access_granted ) {
		return;
	} else {

		if ( isset( $_REQUEST['param'] ) ) {// Input var okay.
			$obj_db_helper_mail_bank = new Db_Helper_Mail_Bank();
			switch ( sanitize_text_field( wp_unslash( $_REQUEST['param'] ) ) ) { // WPCS: CSRF ok.
				case 'wizard_wp_mail_bank':
					if ( wp_verify_nonce( isset( $_REQUEST['_wp_nonce'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['_wp_nonce'] ) ) : '', 'wp_mail_bank_check_status' ) ) {// Input var okay.
						$type             = isset( $_REQUEST['type'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['type'] ) ) : '';// Input var okay.
						$user_admin_email = isset( $_REQUEST['id'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['id'] ) ) : '';// Input var okay.
						update_option( 'mail-bank-welcome-page', $type );
						if ( '' === $user_admin_email ) {
							$user_admin_email = get_option( 'admin_email' );
						}
						update_option( 'mail-bank-admin-email', $user_admin_email );
						if ( 'opt_in' === $type ) {
							$plugin_info_wp_mail_bank = new Plugin_Info_Wp_Mail_Bank();

							global $wp_version;

							$url = TECH_BANKER_STATS_URL . '/wp-admin/admin-ajax.php';

							$theme_details = array();
							if ( $wp_version >= 3.4 ) {
								$active_theme                   = wp_get_theme();
								$theme_details['theme_name']    = strip_tags( $active_theme->name );
								$theme_details['theme_version'] = strip_tags( $active_theme->version );
								$theme_details['author_url']    = strip_tags( $active_theme->{'Author URI'} );
							}

							$plugin_stat_data                     = array();
							$plugin_stat_data['plugin_slug']      = 'wp-mail-bank';
							$plugin_stat_data['type']             = 'standard_edition';
							$plugin_stat_data['version_number']   = MAIL_BANK_VERSION_NUMBER;
							$plugin_stat_data['status']           = $type;
							$plugin_stat_data['event']            = 'activate';
							$plugin_stat_data['domain_url']       = site_url();
							$plugin_stat_data['wp_language']      = defined( 'WPLANG' ) && WPLANG ? WPLANG : get_locale();
							$plugin_stat_data['email']            = $user_admin_email;
							$plugin_stat_data['wp_version']       = $wp_version;
							$plugin_stat_data['php_version']      = esc_html( phpversion() );
							$plugin_stat_data['mysql_version']    = $wpdb->db_version();
							$plugin_stat_data['max_input_vars']   = ini_get( 'max_input_vars' );
							$plugin_stat_data['operating_system'] = PHP_OS . '  (' . PHP_INT_SIZE * 8 . ') BIT';
							$plugin_stat_data['php_memory_limit'] = ini_get( 'memory_limit' ) ? ini_get( 'memory_limit' ) : 'N/A';
							$plugin_stat_data['extensions']       = get_loaded_extensions();
							$plugin_stat_data['plugins']          = $plugin_info_wp_mail_bank->get_plugin_info_wp_mail_bank();
							$plugin_stat_data['themes']           = $theme_details;
							$response                             = wp_safe_remote_post(
								$url, array(
									'method'      => 'POST',
									'timeout'     => 45,
									'redirection' => 5,
									'httpversion' => '1.0',
									'blocking'    => true,
									'headers'     => array(),
									'body'        => array(
										'data'    => maybe_serialize( $plugin_stat_data ),
										'site_id' => get_option( 'mb_tech_banker_site_id' ) !== false ? get_option( 'mb_tech_banker_site_id' ) : '',
										'action'  => 'plugin_analysis_data',
									),
								)
							);

							if ( ! is_wp_error( $response ) ) {
								false !== $response['body'] ? update_option( 'mb_tech_banker_site_id', $response['body'] ) : '';
							}
						}
					}
					break;

				case 'mail_bank_set_hostname_port_module':
					if ( wp_verify_nonce( isset( $_REQUEST['_wp_nonce'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['_wp_nonce'] ) ) : '', 'mail_bank_set_hostname_port' ) ) {// Input var okay.
						$smtp_user                   = isset( $_REQUEST['smtp_user'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['smtp_user'] ) ) : '';// Input var okay.
						$hostname                    = substr( strrchr( $smtp_user, '@' ), 1 );
						$obj_mail_bank_discover_host = new Mail_Bank_Discover_Host();
						$hostname_to_set             = $obj_mail_bank_discover_host->get_smtp_from_email( $hostname );
						echo esc_attr( $hostname_to_set );
					}
					break;

				case 'mail_bank_test_email_configuration_module':
					if ( wp_verify_nonce( isset( $_REQUEST['_wp_nonce'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['_wp_nonce'] ) ) : '', 'mail_bank_test_email_configuration' ) ) {// Input var okay.
						parse_str( isset( $_POST['data'] ) ? base64_decode( wp_unslash( filter_input( INPUT_POST, 'data' ) ) ) : '', $form_data );// Input var okay.
						global $phpmailer;
						$logs = array();
						if ( ! is_object( $phpmailer ) || ! is_a( $phpmailer, 'PHPMailer' ) ) {
							if ( file_exists( ABSPATH . WPINC . '/class-phpmailer.php' ) ) {
								require_once ABSPATH . WPINC . '/class-phpmailer.php';
							}

							if ( file_exists( ABSPATH . WPINC . '/class-smtp.php' ) ) {
								require_once ABSPATH . WPINC . '/class-smtp.php';
							}

							$phpmailer = new PHPMailer( true ); // @codingStandardsIgnoreLine
						}
						$phpmailer->SMTPDebug = true; // @codingStandardsIgnoreLine
						$mb_email_configuration_data           = $wpdb->get_row(
							$wpdb->prepare(
								'SELECT meta_value FROM ' . $wpdb->prefix . 'mail_bank_meta WHERE meta_key = %s', 'email_configuration'
							)
						); // db call ok; no-cache ok.
						$unserialized_email_configuration_data = maybe_unserialize( $mb_email_configuration_data->meta_value );

						$to      = isset( $form_data['ux_txt_email'] ) && '' != $form_data['ux_txt_email'] ? sanitize_text_field( $form_data['ux_txt_email'] ) : $unserialized_email_configuration_data['email_address']; // WPCS: loose comparison ok.
						$subject = stripcslashes( htmlspecialchars_decode( $form_data['ux_txt_subject'], ENT_QUOTES ) );
						$message = htmlspecialchars_decode( ! empty( $form_data['ux_email_configuration_text_area'] ) ? htmlspecialchars_decode( $form_data['ux_email_configuration_text_area'] ) : 'This is a demo Test Email for Email Setup - Mail Bank' );
						$headers = 'Content-Type: text/html; charset= utf-8' . "\r\n";
						$result  = wp_mail( $to, $subject, $message, $headers );

						$settings_data         = $wpdb->get_var(
							$wpdb->prepare(
								'SELECT meta_value FROM ' . $wpdb->prefix . 'mail_bank_meta WHERE meta_key=%s', 'settings'
							)
						); // db call ok; no-cache ok.
						$settings_data_array   = maybe_unserialize( $settings_data );
						$debugging_output      = '';
						$mailer_type_mail_bank = isset( $unserialized_email_configuration_data['mailer_type'] ) ? sanitize_text_field( $unserialized_email_configuration_data['mailer_type'] ) : '';

						if ( 'smtp' === $mailer_type_mail_bank ) {
							$mail_bank_mail_status = get_option( 'mail_bank_mail_status' );
							$debug_mode_mail_bank  = isset( $settings_data_array['debug_mode'] ) ? sanitize_text_field( $settings_data_array['debug_mode'] ) : '';
							if ( 'enable' === $debug_mode_mail_bank ) {
								$debugging_output .= $mb_email_configuration_send_test_email_textarea . "\n";
								$debugging_output .= $mb_test_email_sending_test_email . ' ' . $to . "\n";
								$debugging_output .= $mb_test_email_status . ' : ';
								$debugging_output .= get_option( 'mail_bank_is_mail_sent' ) === 'Sent' ? $mb_status_sent : $mb_status_not_sent;
								$debugging_output .= "\n----------------------------------------------------------------------------------------\n";
								$debugging_output .= $mb_email_logs_show_outputs . " :\n";
								$debugging_output .= "----------------------------------------------------------------------------------------\n";
							}
							$debugging_output .= $mail_bank_mail_status;
							if ( 'enable' === $settings_data_array['debug_mode'] ) {
								if ( 'Sent' !== get_option( 'mail_bank_is_mail_sent' ) ) {
									$debugging_output .= "\n\n";
									if ( stripos( $mail_bank_mail_status, 'socket' ) !== false ) {
										$debugging_output .= $mb_email_installed_firewall_message . " \n " . $mb_email_incorrect_port_message . " \n ";
									} elseif ( stripos( $mail_bank_mail_status, 'Timed' ) !== false ) {
										$debugging_output .= $mb_email_poor_connectivity_message . " \n " . $mb_email_drop_packets_message . " \n " . $mb_email_encryption_message;
									} elseif ( stripos( $mail_bank_mail_status, 'Connection' ) !== false ) {
										$debugging_output .= $mb_email_open_port_message . " \n ";
									} else {
										$debugging_output .= $mb_email_debug_output_firewall_message . " \n " . $mb_email_debug_output_host_provider_message . " \n " . $mb_email_debug_output_contact_admin_message;
									}
									$debugging_output .= "\n----------------------------------------------------------------------------------------\n";
								}
							}
							echo esc_attr( $debugging_output );
						} else {
							$to_address = $phpmailer->getToAddresses();

							$email_logs_data_array             = array();
							$email_logs_data_array['email_to'] = $to_address[0][0];
							$monitor_email_logs                = isset( $settings_data_array['monitor_email_logs'] ) ? sanitize_text_field( $settings_data_array['monitor_email_logs'] ) : '';
							if ( 'enable' === $monitor_email_logs ) {
								$email_logs_data_array['sender_name']  = isset( $unserialized_email_configuration_data['sender_name'] ) ? sanitize_text_field( $unserialized_email_configuration_data['sender_name'] ) : '';
								$email_logs_data_array['sender_email'] = isset( $unserialized_email_configuration_data['sender_email'] ) ? sanitize_text_field( $unserialized_email_configuration_data['sender_email'] ) : '';
								$email_logs_data_array['cc']           = '';
								$email_logs_data_array['bcc']          = '';
								$email_logs_data_array['subject']      = $phpmailer->Subject; // @codingStandardsIgnoreLine
								$email_logs_data_array['content']      = $phpmailer->Body; // @codingStandardsIgnoreLine
								$email_logs_data_array['timestamp']    = MAIL_BANK_LOCAL_TIME;

								if ( 'true' == $result || '1' == $result ) { // WPCS: loose comparison ok.
									$email_logs_data_array['status'] = 'Sent';
								} else {
									$email_logs_data_array['status'] = 'Not Sent';
								}
								$email_logs_data               = array();
								$email_logs_data['email_data'] = maybe_serialize( $email_logs_data_array );
								$obj_db_helper_mail_bank->insert_command( mail_bank_email_logs(), $email_logs_data );
							}
							if ( 'true' != $result || '1' != $result ) { // WPCS: loose comparison ok.
								$result = $mb_email_blocked_message . "\n" . $mb_enable_mail_message;
							}
							echo esc_attr( $result );
						}
					}
					break;

				case 'mail_bank_settings_module':
					if ( wp_verify_nonce( isset( $_REQUEST['_wp_nonce'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['_wp_nonce'] ) ) : '', 'mail_bank_settings' ) ) {// Input var okay.
						parse_str( isset( $_REQUEST['data'] ) ? base64_decode( wp_unslash( filter_input( INPUT_POST, 'data' ) ) ) : '', $settings_array );// Input var okay.

						$settings_data                               = array();
						$settings_data['debug_mode']                 = sanitize_text_field( $settings_array['ux_ddl_debug_mode'] );
						$settings_data['remove_tables_at_uninstall'] = sanitize_text_field( $settings_array['ux_ddl_remove_tables'] );
						$settings_data['monitor_email_logs']         = sanitize_text_field( $settings_array['ux_ddl_monitor_email_logs'] );
						$where                                       = array();
						$settings_data_array                         = array();
						$where['meta_key']                           = 'settings'; // WPCS: slow query ok.
						$settings_data_array['meta_value']           = maybe_serialize( $settings_data ); // WPCS: slow query ok.
						$obj_db_helper_mail_bank->update_command( mail_bank_meta(), $settings_data_array, $where );
					}
					break;

				case 'mail_bank_email_configuration_settings_module':
					if ( wp_verify_nonce( isset( $_REQUEST['_wp_nonce'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['_wp_nonce'] ) ) : '', 'mail_bank_email_configuration_settings' ) ) {// Input var okay.
						parse_str( isset( $_REQUEST['data'] ) ? base64_decode( wp_unslash( filter_input( INPUT_POST, 'data' ) ) ) : '', $form_data );// Input var okay.
						$update_email_configuration_array                              = array();
						$update_email_configuration_array['email_address']             = sanitize_text_field( $form_data['ux_txt_email_address'] );
						$update_email_configuration_array['reply_to']                  = '';
						$update_email_configuration_array['cc']                        = '';
						$update_email_configuration_array['bcc']                       = '';
						$update_email_configuration_array['headers']                   = '';
						$update_email_configuration_array['mailer_type']               = sanitize_text_field( $form_data['ux_ddl_type'] );
						$update_email_configuration_array['mailgun_api_key']           = '';
						$update_email_configuration_array['mailgun_domain_name']       = '';
						$update_email_configuration_array['sender_name_configuration'] = sanitize_text_field( $form_data['ux_ddl_from_name'] );
						$update_email_configuration_array['sender_name']               = isset( $form_data['ux_txt_mb_from_name'] ) ? esc_html( $form_data['ux_txt_mb_from_name'] ) : '';
						$update_email_configuration_array['from_email_configuration']  = sanitize_text_field( $form_data['ux_ddl_from_email'] );
						$update_email_configuration_array['sender_email']              = isset( $form_data['ux_txt_mb_from_email_configuration'] ) ? esc_html( $form_data['ux_txt_mb_from_email_configuration'] ) : '';
						$update_email_configuration_array['hostname']                  = esc_html( $form_data['ux_txt_host'] );
						$update_email_configuration_array['port']                      = intval( $form_data['ux_txt_port'] );
						$update_email_configuration_array['enc_type']                  = sanitize_text_field( $form_data['ux_ddl_encryption'] );
						$update_email_configuration_array['auth_type']                 = sanitize_text_field( $form_data['ux_ddl_mb_authentication'] );
						$update_email_configuration_array['client_id']                 = esc_html( trim( $form_data['ux_txt_client_id'] ) );
						$update_email_configuration_array['client_secret']             = esc_html( trim( $form_data['ux_txt_client_secret'] ) );
						$update_email_configuration_array['username']                  = esc_html( $form_data['ux_txt_username'] );
						$update_email_configuration_array['automatic_mail']            = isset( $form_data['ux_chk_automatic_sent_mail'] ) ? esc_html( $form_data['ux_chk_automatic_sent_mail'] ) : '';

						if ( preg_match( '/^\**$/', $form_data['ux_txt_password'] ) ) {
							$email_configuration_data                     = $wpdb->get_var(
								$wpdb->prepare(
									'SELECT meta_value FROM ' . $wpdb->prefix . 'mail_bank_meta  WHERE meta_key=%s', 'email_configuration'
								)
							); // db call ok; no-cache ok.
							$email_configuration_array                    = maybe_unserialize( $email_configuration_data );
							$update_email_configuration_array['password'] = isset( $email_configuration_array['password'] ) ? sanitize_text_field( $email_configuration_array['password'] ) : '';
						} else {
							$update_email_configuration_array['password'] = base64_encode( esc_html( $form_data['ux_txt_password'] ) );
						}

						$update_email_configuration_array['redirect_uri'] = esc_html( $form_data['ux_txt_redirect_uri'] );

						update_option( 'update_email_configuration', $update_email_configuration_array );

						$mail_bank_auth_host = new Mail_Bank_Auth_Host( $update_email_configuration_array );
						if ( ! in_array( $form_data['ux_txt_host'], $mail_bank_auth_host->oauth_domains, true ) && 'oauth2' === $form_data['ux_ddl_mb_authentication'] ) {
							echo '100';
							die();
						}

						if ( 'oauth2' === $update_email_configuration_array['auth_type'] && 'smtp' === $update_email_configuration_array['mailer_type'] ) {
							if ( 'smtp.gmail.com' === $update_email_configuration_array['hostname'] ) {
								$mail_bank_auth_host->google_authentication();
							} elseif ( 'smtp.live.com' === $update_email_configuration_array['hostname'] && 'smtp' === $update_email_configuration_array['mailer_type'] ) {
								$mail_bank_auth_host->microsoft_authentication();
							} elseif ( in_array( $update_email_configuration_array['hostname'], $mail_bank_auth_host->yahoo_domains, true ) ) {
								$mail_bank_auth_host->yahoo_authentication();
							}
						} else {
							$update_email_configuration_data_array = array();
							$where                                 = array();
							$where['meta_key']                     = 'email_configuration'; // WPCS: slow query ok.
							$update_email_configuration_data_array['meta_value'] = maybe_serialize( $update_email_configuration_array ); // WPCS: slow query ok.
							$obj_db_helper_mail_bank->update_command( mail_bank_meta(), $update_email_configuration_data_array, $where );
						}
					}
					break;

				case 'mail_bank_connectivity_test':
					if ( wp_verify_nonce( isset( $_REQUEST['_wp_nonce'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['_wp_nonce'] ) ) : '', 'connectivity_test_nonce' ) ) {// Input var okay.
						$host         = isset( $_REQUEST['smtp_host'] ) ? sanitize_text_field( wp_unslash( filter_input( INPUT_POST, 'smtp_host' ) ) ) : '';// Input var okay.
						$ports        = array( 25, 587, 465, 2525, 4065, 25025 );
						$ports_result = array();
						foreach ( $ports as $port ) {
							$connection = @fsockopen( $host, $port ); // @codingStandardsIgnoreLine
							if ( is_resource( $connection ) ) {
								$ports_result[ $port ] = 'Open';
								fclose( $connection ); // @codingStandardsIgnoreLine
							} else {
								$ports_result[ $port ] = 'Close';
							}
						}
						foreach ( $ports_result as $results => $val ) {
							?>
							<tr>
								<td>
							<?php echo esc_attr( $mb_smtp ); ?>
							</td>
							<td>
							<?php echo esc_attr( $host ) . ':' . intval( $results ); ?>
							</td>
							<td>
							<span style="<?php echo 'Close' === $val ? 'color:red' : ''; ?>"><?php echo esc_attr( $val ); ?>
							</td>
							</tr>
							<?php
						}
					}
					break;
				case 'mail_bank_roles_and_capabilities_module':
					if ( wp_verify_nonce( isset( $_REQUEST['_wp_nonce'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['_wp_nonce'] ) ) : '', 'mail_bank_roles_capabilities' ) ) {// Input var okay.
						parse_str( isset( $_REQUEST['data'] ) ? base64_decode( wp_unslash( filter_input( INPUT_POST, 'data' ) ) ) : '', $roles_array );// Input var okay.
						$update_roles = array();
						$where        = array();

						global $wpdb;
						$roles_and_capabilities_meta_value                                  = $wpdb->get_var(
							$wpdb->prepare(
								'SELECT meta_value FROM ' . $wpdb->prefix . 'mail_bank_meta WHERE meta_key=%s', 'roles_and_capabilities'
							)
						); // db call ok; no-cache ok.
						$unserialized_roles_and_capabilities                                = maybe_unserialize( $roles_and_capabilities_meta_value );
						$unserialized_roles_and_capabilities['show_mail_bank_top_bar_menu'] = sanitize_text_field( $roles_array['ux_ddl_mail_bank_menu'] );

						$update_data               = array();
						$where['meta_key']         = 'roles_and_capabilities'; // WPCS: slow query ok.
						$update_data['meta_value'] = maybe_serialize( $unserialized_roles_and_capabilities ); // WPCS: slow query ok.
						$obj_db_helper_mail_bank->update_command( mail_bank_meta(), $update_data, $where );
					}
					break;
				case 'mail_bank_email_logs_delete_module':
					if ( wp_verify_nonce( isset( $_REQUEST['_wp_nonce'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['_wp_nonce'] ) ) : '', 'mb_email_logs_delete' ) ) {// Input var okay.
						$where_meta       = array();
						$where_meta['id'] = isset( $_REQUEST['id'] ) ? intval( $_REQUEST['id'] ) : '';// Input var okay.
						$obj_db_helper_mail_bank->delete_command( mail_bank_email_logs(), $where_meta );
					}
					break;
			}
			die();
		}
	}
}
