<?php return unserialize('a:3:{i:0;O:26:"Doctrine\\ORM\\Mapping\\Table":5:{s:4:"name";s:7:"tutoria";s:6:"schema";N;s:7:"indexes";a:1:{i:0;O:26:"Doctrine\\ORM\\Mapping\\Index":2:{s:4:"name";s:24:"fk_tutoria_profesor1_idx";s:7:"columns";a:1:{i:0;s:20:"profesor_id_profesor";}}}s:17:"uniqueConstraints";N;s:7:"options";a:0:{}}i:1;O:27:"Doctrine\\ORM\\Mapping\\Entity":2:{s:15:"repositoryClass";N;s:8:"readOnly";b:0;}i:2;O:58:"Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity":8:{s:7:"message";s:33:"Este profesor ya esta registrado.";s:7:"service";s:29:"doctrine.orm.validator.unique";s:2:"em";N;s:16:"repositoryMethod";s:6:"findBy";s:6:"fields";a:2:{i:0;s:16:"profesorProfesor";i:1;s:7:"periodo";}s:9:"errorPath";s:16:"profesorProfesor";s:10:"ignoreNull";b:1;s:6:"groups";a:1:{i:0;s:7:"Default";}}}');