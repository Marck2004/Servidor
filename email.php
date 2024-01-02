<?php
$resend = Resend::client('re_123456789');

$resend->emails->send([
  'from' => '<marcosmaestrocobo@gmail.com>',
  'to' => ['marcosmaestrocobo@gmail.com'],
  'subject' => 'hello world',
  'html' => '<strong>it works!</strong>',
]);
?>