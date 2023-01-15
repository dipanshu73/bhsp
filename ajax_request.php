<?php
add_action('wp_ajax_nopriv_contact_action', 'contact_action_callback');
add_action('wp_ajax_contact_action', 'contact_action_callback');



function contact_action_callback() {
    global $wpdb;

    $subject = esc_attr($_POST['subject']);
	$first_name = esc_attr($_POST['first_name']);
    $last_name = esc_attr($_POST['last_name']);
    $address1 = esc_attr($_POST['address1']);
    $address2 = esc_attr($_POST['address2']);
    $city = esc_attr($_POST['city']);
    $company = esc_attr($_POST['company']);
    $state = esc_attr($_POST['state']);
    $email = esc_attr($_POST['email']);
    $postal_code = esc_attr($_POST['postal_code']);
    $phone = esc_attr($_POST['phone']);
    $country = esc_attr($_POST['country']);
    $message = esc_attr($_POST['message']);
    $country_code = esc_attr($_POST['country_code']);

    

	$wpdb->insert( 'wp_contact',array( 
        'subject' => $subject,
        'first_name'=>$first_name,
        'last_name' => $last_name,
        'address1' => $address1,
        'address2' => $address2,
        'city' => $city,
        'company' => $company,
        'state'=> $state,
        'email'=>$email,
        'postal_code'=>$postal_code,
        'phone'=> $phone,
        'country'=> $country,
        'message'=> $message,
        'country_code'=> $country_code

    ),array('%s') );

    $res = true;

    if ($res) {
        $data["success"] = true;
    } else {
        $data["success"] = false;
    }

    echo json_encode($data);

    die();
}
