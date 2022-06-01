<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Company name
  |--------------------------------------------------------------------------
  |
  */

  'company' => env('MENNEKES_KONFIGURATOR_COMPANY_NAME', 'Konfigurator für Wand-Stromverteiler'),

  /*
  |--------------------------------------------------------------------------
  | E-Mail settings
  |--------------------------------------------------------------------------
  |
  */

  'email' => [
    'from' => env('MENNEKES_KONFIGURATOR_MAIL_FROM', 'marcel@jamon.digital'),
    'recipient' => env('MENNEKES_KONFIGURATOR_MAIL_RECIPIENT', 'm@marceli.to'),
    'bcc' => env('MENNEKES_KONFIGURATOR_MAIL_BCC', 'm@marceli.to'),
    'recipient_test' => env('MENNEKES_KONFIGURATOR_MAIL_RECIPIENT_TEST', 'm@marceli.to')
  ],

  /*
  |--------------------------------------------------------------------------
  | Domain
  |--------------------------------------------------------------------------
  |
  */

  'domain' => env('MENNEKES_KONFIGURATOR_DOMAIN', 'https://mennekes.konfigurator.ferratec.ch'),

  /*
  |--------------------------------------------------------------------------
  | Chunk size for cron jobs
  |--------------------------------------------------------------------------
  |
  */

  'cron_chunk_size' => 3,
]
?>