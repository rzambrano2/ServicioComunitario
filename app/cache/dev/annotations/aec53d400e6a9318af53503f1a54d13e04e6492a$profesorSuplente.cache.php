<?php return unserialize('a:3:{i:0;O:30:"Doctrine\\ORM\\Mapping\\ManyToOne":4:{s:12:"targetEntity";s:33:"Tesis\\AdminBundle\\Entity\\Profesor";s:7:"cascade";N;s:5:"fetch";s:4:"LAZY";s:10:"inversedBy";N;}i:1;O:32:"Doctrine\\ORM\\Mapping\\JoinColumns":1:{s:5:"value";a:1:{i:0;O:31:"Doctrine\\ORM\\Mapping\\JoinColumn":7:{s:4:"name";s:20:"profesor_id_suplente";s:20:"referencedColumnName";s:11:"id_profesor";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:16:"columnDefinition";N;s:9:"fieldName";N;}}}i:2;O:48:"Symfony\\Component\\Validator\\Constraints\\NotBlank":2:{s:7:"message";s:36:"Debe elegir al menos un coordinador.";s:6:"groups";a:1:{i:0;s:7:"Default";}}}');