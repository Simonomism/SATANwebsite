<?php

return function($site, $pages, $page) {

  $alert    = null;
  $messages = null;

  if(r::is('post') && get('submit')) {

    if(!empty(get('website'))) {
      go($page->url());
      exit;
    }

    $data = array(
      'name'    => get('name'),
      'email'   => get('email'),
      'text'    => get('text')
    );

    $rules = array(
      'name'    => array('required'),
      'email'   => array('required', 'email'),
      'text'    => array('required', 'min' => 3, 'max' => 3000),
    );

    $messages = array(
      'name'  => 'Please enter a valid name',
      'email' => 'Please enter a valid email address',
      'text'  => 'Please enter a text between 3 and 3000 characters'
    );

    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    } else {

      $mailto = $page->mailto();
      $sender = $page->sender();

      $email = email(array(
        'to'      => $mailto,
        'from'    => $sender,
        'subject' => $data['name'] . ' contacted you from your website',
        'replyTo' => $data['name'] . '<'.$data['email'].'>',
        'body'    => $data['text']
      ));

      if(v::email($mailto) and v::email($sender) and $email->send()) {
        $success = 'Your message has been sent';
        $data = array();
      } else {
        $failed = 'Something went wrong and your message was not sent.';
      }

    }

  }

  return compact('alert', 'messages', 'data', 'success', 'failed');

};