<?php
/*
Template Name: Forms PHP
*/

$path = request_path();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

  header("HTTP/1.1 301 Moved Permanently");
  header("Location: https://app.getvero.com/".$path);

} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $json_request = (json_decode($request) != NULL) ? true : false;
  $api_params = $_POST;

  $path = $api_params['path'];
  $vero_e = $api_params['vero_e'];
  $paramsToRemove = array('forms', 'controller', 'action', 'format', 'path');
  foreach($paramsToRemove as $key) {
    unset($api_params[$key]);
  }

  try {

    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://app.getvero.com/',
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $api_params
    ));
    // Send the request & save response to $resp
    $response = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);

    if ($response === 200) {
      if ($json_request === true) {
        $message = 'HTTP/ 200 Success.';
      } else {
        // Redirect to subscribe page if HTML
        $regex = uri_regex();
        if(preg_match("/^$regex$/", $_POST['redirect_on_success'])) {
          $message = "Location: " . $_POST['redirect_on_success'] . ($vero_e ? "vero_e=" . $vero_e : ""); // Need to somehow append params here if vero_e is present
        } else {
          $message = "Location: https://app.getvero.com/subscribed";
        }
      }
    } else {
      if ($json_request === true) {
        $message = 'HTTP/ 400 Failed.';
      } else {
        // Redirect to fail page if present OR redirect to referrer
        $regex = uri_regex();
        if(preg_match("/^$regex$/", $_POST['redirect_on_fail'])) {
          $message = "Location: " . $_POST['redirect_on_fail'] . ($vero_e ? "vero_e=" . $vero_e : ""); // Need to somehow append params here if vero_e is present
        } else {
          $message = "Location: " . $_SERVER['HTTP_REFERER'];
        }
      }
    }

  } catch (Exception $e) {
    $message = 'HTTP/ 400 Please send POST requests to app.getvero.com, not www.getvero.com.';
  }
  header($message);
}


function request_path()
{
    $request_uri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    $script_name = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
    $parts = array_diff_assoc($request_uri, $script_name);
    if (empty($parts))
    {
        return '/';
    }
    $path = implode('/', $parts);
    if (($position = strpos($path, '?')) !== FALSE)
    {
        $path = substr($path, 0, $position);
    }
    return $path;
}

function uri_regex()
{
  $regex = "((https?|ftp)\:\/\/)?"; // SCHEME
    $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass
    $regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP
    $regex .= "(\:[0-9]{2,5})?"; // Port
    $regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path
    $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query
    $regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor

    return $regex;
}

 ?>