<?php

namespace Tesis\AdminBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Tesis\AdminBundle\Entity\Tutoria;
use Tesis\AdminBundle\Entity\Reporte;
use Tesis\AdminBundle\Form\ReporteType;

class ReportsController extends Controller
{

    public function new_reports1Action(Request $request){

    	$session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
        	$options['user'] = $session->get('user');
        
            return $this->render('TesisAdminBundle:Reports:reports1.html.twig', $options);
        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }



    // Crea el formulario
    public function report1formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'normal';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_1pdf'),
                'method' => 'POST',
            ));
             $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-form.html.twig',
                array('form' => $form->createView()));

    }



    public function pdf_reports1Action(Request $request){

        $session = $this->getRequest()->getSession();
        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];
             }
                 

            if ($periodo != "todos") {

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido,
                e1.cedula as cedula, p1.nombre as proyecto 
                FROM TesisAdminBundle:Estudiante e1
                INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyecto = p1.idProyecto
                WHERE e1.sc = :sc AND e1.departamento = :departamento AND e1.periodo = :periodo
                AND e1.estatus = :estatus");
                $query->setParameter('sc', "iniciado");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('periodo', $periodo);
                $query->setParameter('estatus', "activo");
                $entity = $query->execute();

            }else{

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido,
                e1.cedula as cedula, p1.nombre as proyecto 
                FROM TesisAdminBundle:Estudiante e1
                INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyecto = p1.idProyecto
                WHERE e1.sc = :sc AND e1.departamento = :departamento
                AND e1.estatus = :estatus");
                $query->setParameter('sc', "iniciado");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('estatus', "activo");
                $entity = $query->execute();

            }    


            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports1_pdf.html.twig', array(
                'estudiantes' => $entity,
                'departamento' => $departamento,
                'periodo' => $periodo
               ));  


            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
                'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment;  filename="estudiantes_inscritos_SC.pdf"'
                )
            );

        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // Crea el formulario
    public function report2formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'normal';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_2pdf'),
                'method' => 'POST',
            ));
             $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-form.html.twig',
                array('form' => $form->createView()));

    }


    public function new_reports2Action(Request $request){

        $session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
            $options['user'] = $session->get('user');
        
            return $this->render('TesisAdminBundle:Reports:reports2.html.twig', $options);

        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_reports2Action(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];
             }


            if ($periodo != "todos") {

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido,
                e1.cedula as cedula, p1.nombre as proyecto 
                FROM TesisAdminBundle:Estudiante e1
                INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyecto = p1.idProyecto
                WHERE e1.sc = :sc AND e1.departamento = :departamento AND e1.periodo = :periodo
                AND e1.estatus = :estatus");
                $query->setParameter('sc', "culminado");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('periodo', $periodo);
                $query->setParameter('estatus', "activo");
                $entity = $query->execute();

            }else{

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido,
                e1.cedula as cedula, p1.nombre as proyecto 
                FROM TesisAdminBundle:Estudiante e1
                INNER JOIN TesisAdminBundle:Proyecto p1 WITH e1.proyecto = p1.idProyecto
                WHERE e1.sc = :sc AND e1.departamento = :departamento 
                AND e1.estatus = :estatus");
                $query->setParameter('sc', "culminado");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('estatus', "activo");
                $entity = $query->execute();

            }


            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports2_pdf.html.twig', array(
                'estudiantes' => $entity,
                'departamento' => $departamento,
                'periodo' => $periodo
               ));  

            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
                'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="estudiantes_aprobados_SC.pdf"'
                )
            );
        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // Crea el formulario
    public function report3formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'custom';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_3pdf'),
                'method' => 'POST',
            ));
             $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-formcustom.html.twig',
                array('form' => $form->createView()));

    }

    public function new_reports3Action(Request $request){

        $session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
            $options['user'] = $session->get('user');

            return $this->render('TesisAdminBundle:Reports:reports3.html.twig', $options);

        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_reports3Action(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];
               $tutor = $valor['profesor'];
             }

            if ($tutor == null ) {
                 
                 if ($periodo != "todos") {
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                    WHERE u1.departamento = :departamento AND u1.periodo = :periodo 
                    AND u1.estatus = :estatus AND u1.perfil = :perfil");
                    $query->setParameter('departamento', $departamento );
                    $query->setParameter('periodo', $periodo);
                    $query->setParameter('estatus', "activo"); 
                    $query->setParameter('perfil', "tutor"); 
                    $tutores = $query->execute();
                 }else{
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                    WHERE u1.departamento = :departamento  AND u1.estatus = :estatus
                    AND u1.perfil = :perfil ");
                    $query->setParameter('departamento', $departamento );
                    $query->setParameter('estatus', "activo"); 
                    $query->setParameter('perfil', "tutor");
                    $tutores = $query->execute();
                 }

            }else{
                    $em = $this->getDoctrine()->getManager();
                    $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                    WHERE u1.idProfesor = :profesor ");
                    $query->setParameter('profesor', $tutor );
                    $tutores = $query->execute();

            }

            $i = 0;
            $estudiantes = null;
            $proyectos = null;
            foreach ($tutores as $tutor) {

                $query = $em->createQuery("SELECT e1.nombre as nombre, e1.apellido as apellido
                FROM TesisAdminBundle:Estudiante e1  
                WHERE e1.profesor = :profesor");
                $query->setParameter('profesor', $tutor->getId());
                $estudiantes[$i] = $query->execute();

                $tamano = 0;
                $tamano = sizeof($estudiantes[$i]);
                if ($tamano < 1) {
                    $estudiantes[$i] = null;
                }


                $query = $em->createQuery("SELECT p1.nombre as nombre
                FROM TesisAdminBundle:Proyecto p1
                INNER JOIN TesisAdminBundle:Profesor pf1 WITH p1.idProyecto = pf1.proyecto 
                WHERE pf1.idProfesor = :profesor");
                $query->setParameter('profesor', $tutor->getId());
                $proyectos[$i] = $query->execute();   

                $tamano = 0;
                $tamano = sizeof($estudiantes[$i]);
                if ($tamano < 1) {
                    $proyectos[$i] = null;
                }                             

                $i++;
            }


            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports3_pdf.html.twig', array(
                'tutores' => $tutores,
                'estudiantes' => $estudiantes,
                'proyectos' => $proyectos,
                'departamento' => $departamento,
                'periodo' => $periodo                
               ));  

            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
                'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="tutores_SC.pdf"'
                )
            );

        }

            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    // Crea el formulario
    public function report4formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'normal';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_4pdf'),
                'method' => 'POST',
            ));
             $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-form.html.twig',
                array('form' => $form->createView()));

    }



    public function new_reports4Action(Request $request){

        $session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
            $options['user'] = $session->get('user');
        
            return $this->render('TesisAdminBundle:Reports:reports4.html.twig', $options);
        }
            return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_reports4Action(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];

             }

             $em = $this->getDoctrine()->getManager();
           

            if ($periodo != "todos") {

                $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                WHERE u1.departamento = :departamento AND u1.periodo = :periodo 
                AND u1.perfil = :perfil AND u1.estatus = :estatus");
                $query->setParameter('perfil', "coordinador de proyecto");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('periodo', $periodo);
                $query->setParameter('estatus', "activo");
                $c_proyecto = $query->execute();

                $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                WHERE u1.departamento = :departamento AND u1.periodo = :periodo 
                AND u1.perfil = :perfil AND u1.estatus = :estatus");
                $query->setParameter('perfil', "coordinador suplente");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('periodo', $periodo);
                $query->setParameter('estatus', "activo");            
                $c_suplente = $query->execute(); 

            }else{

                $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                WHERE u1.departamento = :departamento  
                AND u1.perfil = :perfil AND u1.estatus = :estatus");
                $query->setParameter('perfil', "coordinador de proyecto");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('estatus', "activo");
                $c_proyecto = $query->execute();

                $query = $em->createQuery("SELECT u1 FROM TesisAdminBundle:Profesor u1  
                WHERE u1.departamento = :departamento
                AND u1.perfil = :perfil AND u1.estatus = :estatus");
                $query->setParameter('perfil', "coordinador suplente");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('estatus', "activo");            
                $c_suplente = $query->execute(); 


            }


            $i=0;
            foreach ($c_proyecto as $proyecto) {
                $tamano =  0;
// a1.nombre as nombre, a1.descripcion as descripcion
                $em = $this->getDoctrine()->getEntityManager();
                $connection = $em->getConnection();
                $statement = $connection->prepare("SELECT DISTINCT (p1.nombre) as nombre
                FROM proyecto p1 
                INNER JOIN coordinadores_has_profesor cp1 ON
                p1.id_proyecto = cp1.proyecto_id_proyecto
                WHERE p1.id_proyecto = :id_proyecto");                  
                $statement->bindValue('id_proyecto', $proyecto->getProyecto());
                $statement->execute();
                $entity = $statement->fetchAll();

                $tamano = sizeof($entity);
                if ($tamano>0) {
                    $proyectos[$i] = $entity;
                } else{
                    $proyectos[$i] = null;

                }

                $i++;
            }
            if ($i == 0) {
                $proyectos = null;
            }             

           // var_dump($proyectos);

            $i=0;
            foreach ($c_suplente as $suplente) {
                $tamano =  0;
// a1.nombre as nombre, a1.descripcion as descripcion
                $em = $this->getDoctrine()->getEntityManager();
                $connection = $em->getConnection();
                $statement = $connection->prepare("SELECT DISTINCT (p1.nombre) as nombre
                FROM proyecto p1 
                INNER JOIN coordinadores_has_profesor cp1 ON
                p1.id_proyecto = cp1.proyecto_id_proyecto
                WHERE p1.id_proyecto = :id_proyecto");                  
                $statement->bindValue('id_proyecto', $suplente->getProyecto());
                $statement->execute();
                $entity = $statement->fetchAll();

                $tamano = sizeof($entity);
                if ($tamano>0) {
                    $suplentes[$i] = $entity;
                } else{
                    $suplentes[$i] = null;

                }

                $i++;
            }
            if ($i == 0) {
                $suplentes = null;
            } 


            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports4_pdf.html.twig', array(
                'c_proyecto' => $c_proyecto,
                'c_suplente' => $c_suplente,
                'proyectos' => $proyectos,
                'suplentes' => $suplentes,
                'departamento' => $departamento,
                'periodo' => $periodo                  
               ));  

            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
                'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="coordinadores_SC.pdf"'
                )
            );

        }
        
            return $this->render('TesisSCBundle:Main:denegado.html.twig');    
    }


    // Crea el formulario
    public function report5formAction(Request $request){

        $session = $this->getRequest()->getSession();

            $reporte = new Reporte();
            $options['type'] = 'normal';
            $form = $this->createForm(new ReporteType($options), $reporte, array(
                'action' => $this->generateUrl('reports_5pdf'),
                'method' => 'POST',
            ));
             $form->add('submit', 'submit', array('label' => 'Descargar Reporte'));
            $form->handleRequest($request);

            return $this->render('TesisAdminBundle:Reports:reports-form.html.twig',
                array('form' => $form->createView()));

    }  


    public function new_reports5Action(Request $request){

        $session = $this->getRequest()->getSession();

        $options['user'] = '';
        if($session->has('user')){
            $options['user'] = $session->get('user');
        
         return $this->render('TesisAdminBundle:Reports:reports5.html.twig', $options);
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }


    public function pdf_reports5Action(){

        $session = $this->getRequest()->getSession();

        if($session->has('user')){
            $user = $session->get('user');
            $options['user'] = $user;

            foreach ($_POST as $clave=>$valor){
               $departamento = $valor['departamento'];
               $periodo = $valor['periodo'];
             }


            if ($periodo != "todos") {

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT p1 FROM TesisAdminBundle:Proyecto p1 
                WHERE p1.departamento = :departamento AND p1.periodo = :periodo ");
                $query->setParameter('departamento', $departamento );
                $query->setParameter('periodo', $periodo);            
                $entity = $query->execute();


            }else{

                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery("SELECT p1 FROM TesisAdminBundle:Proyecto p1 
                WHERE p1.departamento = :departamento ");
                $query->setParameter('departamento', $departamento );            
                $entity = $query->execute();
            }

            $i = 0;
            foreach ($entity as $proyecto) {
           
                $tutores = $em->getRepository('TesisAdminBundle:Tutores')->findOneBy(
                    array('proyectoProyecto' => $proyecto->getIdProyecto()));

                $tamano = sizeof($tutores);
                if ($tamano>0) {
                    $usuarios[$i] = $tutores->getProfesorProfesor();
                } else{
                    $usuarios[$i] = null;

                }
                $i++;
            }
            if ($i == 0) {
                $usuarios = null;
            }
        

            // crea la vista
            $html = $this->renderView('TesisAdminBundle:Reports:reports5_pdf.html.twig', array(
                'proyectos' => $entity,
                'tutores' => $usuarios,
                'departamento' => $departamento,
                'periodo' => $periodo 
               ));  


            // retorna la vista en pdf.
            return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html,
                array('orientation'=>'Landscape',
                'footer-font-size' => '8', 
                'margin-top' => '10',
                'footer-left' => 'Generado: [date]. Impulsado por KnpSnappyBundle',
                'footer-line' => true,
                'footer-right' => 'Pagina [page] de [toPage]'
                )),
                200,
                array(
                    'Content-Type'          => 'application/pdf',
                    'Content-Disposition'   => 'attachment; filename="proyectos_SC.pdf"'
                )
            );
        }

        return $this->render('TesisSCBundle:Main:denegado.html.twig');
    }

}    