<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<h2>El usuario ha sido creado con &eacute;xito.</h2>

<p>Gracias por registrarte, <?=$this->session->flashdata('username');?>. Un correo ha sido enviado a <?=$this->session->flashdata('username');?> con detalles de como activar tu cuenta.</p><br />
<p>Recibiras un correo en tu bandeja de entrada. Debes seguir el enlace en ese correo antes de logearte.</p>
