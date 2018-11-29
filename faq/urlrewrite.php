<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/detail/([\\w\\d]+)(/)?#',
    'RULE' => 'CODE=$1',
    'ID' => '',
    'PATH' => '/detail/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/index.php',
    'SORT' => 100,
  ),
);
