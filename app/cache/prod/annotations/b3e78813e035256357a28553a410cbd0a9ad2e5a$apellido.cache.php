<?php return unserialize('a:4:{i:0;O:27:"Doctrine\\ORM\\Mapping\\Column":9:{s:4:"name";s:8:"apellido";s:4:"type";s:6:"string";s:6:"length";i:100;s:9:"precision";i:0;s:5:"scale";i:0;s:6:"unique";b:0;s:8:"nullable";b:0;s:7:"options";a:0:{}s:16:"columnDefinition";N;}i:1;O:48:"Symfony\\Component\\Validator\\Constraints\\NotBlank":2:{s:7:"message";s:29:"Porfavor introduzca apellido.";s:6:"groups";a:1:{i:0;s:7:"Default";}}i:2;O:45:"Symfony\\Component\\Validator\\Constraints\\Regex":5:{s:7:"message";s:47:"Porfavor introduzca un apellido que sea valido.";s:7:"pattern";s:20:"/^[a-zA-Z ñÑ  ]*$/";s:11:"htmlPattern";N;s:5:"match";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}i:3;O:46:"Symfony\\Component\\Validator\\Constraints\\Length":8:{s:10:"maxMessage";s:51:"Su nombre debe tener maximo {{ limit }} caracteres.";s:10:"minMessage";s:51:"Su nombre debe tener minimo {{ limit }} caracteres.";s:12:"exactMessage";s:108:"This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.";s:14:"charsetMessage";s:61:"This value does not match the expected {{ charset }} charset.";s:3:"max";i:50;s:3:"min";i:2;s:7:"charset";s:5:"UTF-8";s:6:"groups";a:1:{i:0;s:7:"Default";}}}');