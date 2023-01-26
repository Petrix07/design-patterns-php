<?php
require_once('Preferencias.php');

$p = Preferencias::getInstance();
var_dump($p);

print "A Linguagem definida é: {$p->getData('language')}";
echo '<hr>';

$p->setData('languade', 'pt');
print "A Linguagem definida é: {$p->getData('language')}";
echo '<hr>';

echo '<hr>';

$p2 = Preferencias::getInstance();
var_dump($p2);

print "A Linguagem definida é: {$p2->getData('language')}";
