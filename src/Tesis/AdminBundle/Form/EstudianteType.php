<?php

namespace Tesis\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class EstudianteType extends AbstractType
{

    private $formtype;

    /*constructor que establece si el estudiante se va a crear o a editar*/
    public function __construct($type){
        $this->formtype = $type;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){


        if ($this->formtype == 'new' ) {
            
            $builder
            ->add('correo','text', array('label' => 'Correo', 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre'))
            ->add('apellido','text', array('label' => 'Apellido'))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),
                'label' => 'Genero', 'required'=> true))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
                'label' => 'Departamento'))
        

            /*
            ->add('periodo', 'entity', array(
                "class"     => "TesisAdminBundle:FechaPeriodo",
                "property"  => "periodo",
                'label' => 'Periodo de Inscripción',
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p');
                        },
                ))
            **/

            
            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo de Inscripción'))                         
           

            ->add('clave','repeated', array('type' => 'password','invalid_message' => 'Las contraseñas deben coincidir.',
            'first_options' => array('label' => 'Contraseña', 'attr' => array('placeholder' => '**********')),
            'second_options' => array('label' => 'Confirmar', 'attr' => array('placeholder' => '**********'))))
            
            ->add('cedula', 'text', array('label' => 'Cedula'))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'required' => false))
            /* ->add('sc','choice', array('choices' => array('iniciado' => 'Iniciado',
                'culminado' => 'Culminado'),
                'label' => 'SC Estatus', 'disabled' =>'true')) **/


            ->add('semestre','choice', array('choices' => array('1' => '1', '2' => '2',
                '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7',
                '8' => '8', '9' => '9', '10' => '10'),
                'label' => 'Semestre en curso', 'required' => true)) 
            ->add('nameLogin','text', array('label' => 'Nombre de usuario'))
           

           // ->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutor'))
           // ->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto'))            

            ;
            
        } else if ($this->formtype == 'check'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'disabled' =>'true', 'required' => false, 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre', 'disabled' =>'true', 'required' => false))
            ->add('apellido','text', array('label' => 'Apellido', 'disabled' =>'true', 'required' => false))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),'label' => 'Genero', 'disabled' =>'true', 'required' => false))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
               'label' => 'Departamento', 'disabled' =>'true','required' => false))
            

            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo de Inscripción', 'disabled' =>'true','required' => false))  
            


            /*
            ->add('periodo', 'entity', array(
                "class"     => "TesisAdminBundle:FechaPeriodo",
                "property"  => "periodo",
                'label' => 'Periodo de Inscripción',
                'disabled' => true,
                'required' => false,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p');
                        },
                ))
            **/

            ->add('sc','text', array('label' => 'Estatus SC', 'disabled' =>'true', 'required' => false))
            ->add('cedula', 'text', array('label' => 'Cedula', 'disabled' =>'true', 'required' => false))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'disabled' =>'true', 'required' => false))
           // ->add('perfil','text', array('label' => 'Rol', 'disabled' =>'true','required' => false))
            ->add('semestre','choice', array('choices' => array('1' => '1', '2' => '2',
                '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7',
                '8' => '8', '9' => '9', '10' => '10'),
                'label' => 'Semestre en curso', 'disabled' =>'true','required' => false)) 
            ->add('nameLogin','text', array('label' => 'Nombre de usuario', 'disabled' =>'true','required' => false))
            ->add('estatus','text', array('label' => 'Estatus', 'disabled' =>'true', 'required' => false))
            //->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutor', 'disabled' =>'true', 'required' => false))            
            //->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto','disabled' =>'true' , 'required' => false))
            ;        

        }  else if ($this->formtype == 'edit_other'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'disabled' => false, 'required' => true, 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre', 'disabled' => false, 'required' => true))
            ->add('apellido','text', array('label' => 'Apellido', 'disabled' => false, 'required' => true))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),'label' => 'Genero', 'disabled' => false, 'required' => true))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
               'label' => 'Departamento', 'disabled' =>false, 'required' => true))
            

            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo de Inscripción', 'disabled' => false,'required' => true)) 
            

            /*
            ->add('periodo', 'entity', array(
                "class"     => "TesisAdminBundle:FechaPeriodo",
                "property"  => "periodo",
                'label' => 'Periodo de Inscripción',
                'disabled' => false,
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p');
                        },
                ))
            **/

            ->add('sc','text', array('label' => 'Estatus SC', 'disabled' => false, 'required' => true))
            ->add('cedula', 'text', array('label' => 'Cedula', 'disabled' => false, 'required' => true))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'disabled' => false, 'required' => false))
           // ->add('perfil','text', array('label' => 'Rol', 'disabled' =>'true','required' => false))
            ->add('semestre','choice', array('choices' => array('1' => '1', '2' => '2',
                '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7',
                '8' => '8', '9' => '9', '10' => '10'),
                'label' => 'Semestre en curso', 'disabled' => false ,'required' => true)) 
            ->add('nameLogin','text', array('label' => 'Nombre de usuario', 'disabled' => false,'required' => true))
            ->add('estatus','text', array('label' => 'Estatus', 'disabled' => true, 'required' => false))
            //->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutor', 'disabled' =>'true', 'required' => false))            
            //->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto','disabled' =>'true' , 'required' => false))
            ;

        } else if ($this->formtype == 'edit_student'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'disabled' => false, 'required' => true, 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre', 'disabled' => false, 'required' => true))
            ->add('apellido','text', array('label' => 'Apellido', 'disabled' => false, 'required' => true))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),'label' => 'Genero', 'disabled' => false, 'required' => true))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
               'label' => 'Departamento', 'disabled' =>'true', 'required' => false))
            

            
            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo de Inscripción', 'disabled' =>'true','required' => false))             
            
            /*
            ->add('periodo', 'entity', array(
                "class"     => "TesisAdminBundle:FechaPeriodo",
                "property"  => "periodo",
                'label' => 'Periodo de Inscripción',
                'disabled' => true,
                'required' => false,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p');
                        },
                ))
                **/


            ->add('sc','text', array('label' => 'Estatus SC', 'disabled' =>'true', 'required' => false))
            ->add('cedula', 'text', array('label' => 'Cedula', 'disabled' =>'true', 'required' => false))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'disabled' => false, 'required' => false))
           // ->add('perfil','text', array('label' => 'Rol', 'disabled' =>'true','required' => false))
            ->add('semestre','choice', array('choices' => array('1' => '1', '2' => '2',
                '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7',
                '8' => '8', '9' => '9', '10' => '10'),
                'label' => 'Semestre en curso', 'disabled' => false,'required' => true)) 
            ->add('nameLogin','text', array('label' => 'Nombre de usuario', 'disabled' =>'true','required' => false))
            ->add('estatus','text', array('label' => 'Estatus', 'disabled' =>  true, 'required' => false))
            //->add('usuarioUsuario', 'entity', array('class' => 'TesisAdminBundle:Usuario','property' => 'nombre', 'label' => 'Tutor', 'disabled' =>'true', 'required' => false))            
            //->add('proyectoProyecto', 'entity', array('class' => 'TesisAdminBundle:Proyecto','property' => 'nombre', 'label' => 'Proyecto','disabled' =>'true' , 'required' => false))
            ;

        } else if($this->formtype == 'editpass'){
            // si solo se quiere editar la contrasena 
            $builder
            ->add('clave','repeated', array('type' => 'password', 'invalid_message' => 'Las contraseñas deben coincidir.',
                'first_options' => array('label' => 'Contraseña nueva', 'attr' => array('placeholder' => '**********')),
                'second_options' => array('label' => 'Confirmar contraseña', 'attr' => array('placeholder' => '**********'))))
            ;

        } else if($this->formtype == 'new_alfa'){

            $builder
            ->add('correo','text', array('label' => 'Correo', 'attr' => array('placeholder' => 'tucorreo@ejemplo.com')))
            ->add('nombre','text', array('label' => 'Nombre'))
            ->add('apellido','text', array('label' => 'Apellido'))
            ->add('genero','choice', array('choices' => array('male' => 'Hombre', 'female' => 'Mujer'),
                'label' => 'Genero', 'required'=> true))
            ->add('departamento','choice', array('choices' => array('Computación' => 'Computación', 'Química' => 'Química',
                'Física' => 'Física', 'Biología' => 'Biología', 'Matemática' => 'Matemática'),
                'label' => 'Departamento'))
            
            
            ->add('periodo','choice', array('choices' => array('2015-1' => '2015-1', '2015-2' => '2015-2',
                '2016-1' => '2016-1', '2016-2' => '2016-2', '2017-1' => '2017-1', '2017-2' => '2017-2', '2018-1' => '2018-1',
                '2018-2' => '2018-2', '2019-1' => '2019-1', '2019-2' => '2019-2', '2020-1' => '2020-1', '2020-2' => '2020-2'),
                'label' => 'Periodo de Inscripción')) 
                                   
           
           /*
            ->add('periodo', 'entity', array(
                "class"     => "TesisAdminBundle:FechaPeriodo",
                "property"  => "periodo",
                'label' => 'Periodo de Inscripción',
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                 return $er->createQueryBuilder('p');
                        },
                ))
             */ 


           // ->add('clave','repeated', array('type' => 'password','invalid_message' => 'Las contraseñas deben coincidir.',
           // 'first_options' => array('label' => 'Contraseña', 'attr' => array('placeholder' => '**********')),
           // 'second_options' => array('label' => 'Confirmar', 'attr' => array('placeholder' => '**********'))))
            
            ->add('clave','password', array('label' => 'Contraseña', 'disabled' =>'true', 'required' => true))

            ->add('cedula', 'text', array('label' => 'Cedula'))
            ->add('telefono', 'text', array('label' => 'Teléfono', 'required' => false))
            ->add('semestre','choice', array('choices' => array('1' => '1', '2' => '2',
                '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7',
                '8' => '8', '9' => '9', '10' => '10'),
                'label' => 'Semestre en curso', 'required' => true)) 
            ->add('nameLogin','text', array('label' => 'Nombre de usuario', 'disabled' =>'true', 'required' => true))
            ->add('perfil','choice', array('choices' => array('estudiante' => 'Estudiante', 'tutor' => 'Tutor',
                'coordinador de proyecto' => 'Coordinador de Proyecto', 'coordinador de servicio comunitario' => 'Coordinador de Servicio Comunitario',
                'coordinador suplente' => 'Coordinador Suplente'),
                'label' => 'Perfil', 'required' => true))            
            ;
        } 
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tesis_adminbundle_estudiante';
    }
}