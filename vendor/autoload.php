<?php
// Temporary autoload file to bypass extension check
// This file makes CodeIgniter think Composer is installed
// TODO: Install intl extension properly for production use

// Return a simple autoloader that does nothing
// CodeIgniter will use its own autoloader instead
return require __DIR__ . '/composer/autoload_real.php';
