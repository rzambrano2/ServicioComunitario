<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // tesis_admin_homepage
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'tesis_admin_homepage',);
        }

        if (0 === strpos($pathinfo, '/SC')) {
            // tesis_sc_homepage
            if (rtrim($pathinfo, '/') === '/SC') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tesis_sc_homepage');
                }

                return array (  '_controller' => 'Tesis\\SCBundle\\Controller\\SCController::indexAction',  '_route' => 'tesis_sc_homepage',);
            }

            // user_loginform
            if ($pathinfo === '/SC/loginform') {
                return array (  '_controller' => 'Tesis\\SCBundle\\Controller\\SCController::loginformAction',  '_route' => 'user_loginform',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/new')) {
                // user_new
                if ($pathinfo === '/user/new') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::newAction',  '_route' => 'user_new',);
                }

                // user_newform
                if ($pathinfo === '/user/newform') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::newformAction',  '_route' => 'user_newform',);
                }

            }

            // user_list
            if ($pathinfo === '/user/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::listAction',  '_route' => 'user_list',);
            }

            // user_check
            if (preg_match('#^/user/(?P<cedula>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::checkAction',));
            }

            // user_checkform
            if (preg_match('#^/user/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::checkformAction',));
            }

            // user_edit
            if (preg_match('#^/user/(?P<cedula>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::editAction',));
            }

            // user_delete
            if ($pathinfo === '/user/delete') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::deleteAction',  '_route' => 'user_delete',);
            }

            // user_editform
            if (preg_match('#^/user/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::editformAction',));
            }

            // user_editpass
            if (preg_match('#^/user/(?P<cedula>[^/]++)/edit_pass$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_editpass')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::editpassAction',));
            }

            // user_editpassform
            if (preg_match('#^/user/(?P<cedula>[^/]++)/edit_pass_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_editpassform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::editpassformAction',));
            }

            // user_logout
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_logout');
                }

                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\UsuarioController::logoutAction',  '_route' => 'user_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/student')) {
            // student_checkform
            if (preg_match('#^/student/(?P<id>[^/]++)/check_formst$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\EstudianteController::checkformAction',));
            }

            // student_delete
            if ($pathinfo === '/student/deletest') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\EstudianteController::deleteAction',  '_route' => 'student_delete',);
            }

            // student_editform
            if (preg_match('#^/student/(?P<id>[^/]++)/editformst$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\EstudianteController::editformAction',));
            }

            // student_editpassform
            if (preg_match('#^/student/(?P<cedula>[^/]++)/edit_pass_formst$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_editpassform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\EstudianteController::editpassformAction',));
            }

            if (0 === strpos($pathinfo, '/student/student_')) {
                // student_new
                if ($pathinfo === '/student/student_new') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\EstudianteController::newAction',  '_route' => 'student_new',);
                }

                // student_newform
                if ($pathinfo === '/student/student_form') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\EstudianteController::newformAction',  '_route' => 'student_newform',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/activities')) {
            if (0 === strpos($pathinfo, '/activities/new')) {
                // activities_new
                if ($pathinfo === '/activities/new') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ActividadController::newAction',  '_route' => 'activities_new',);
                }

                // activities_newform
                if ($pathinfo === '/activities/newform') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ActividadController::newformAction',  '_route' => 'activities_newform',);
                }

            }

            // activities_list
            if ($pathinfo === '/activities/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ActividadController::listAction',  '_route' => 'activities_list',);
            }

            // activities_check
            if (preg_match('#^/activities/(?P<id>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activities_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ActividadController::checkAction',));
            }

            // activities_checkform
            if (preg_match('#^/activities/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activities_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ActividadController::checkformAction',));
            }

            // activities_edit
            if (preg_match('#^/activities/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activities_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ActividadController::editAction',));
            }

            // activities_editform
            if (preg_match('#^/activities/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activities_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ActividadController::editformAction',));
            }

            // activities_delete
            if ($pathinfo === '/activities/delete') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ActividadController::deleteAction',  '_route' => 'activities_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/fase')) {
            if (0 === strpos($pathinfo, '/fase/new')) {
                // fase_new
                if ($pathinfo === '/fase/new') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\FaseController::newAction',  '_route' => 'fase_new',);
                }

                // fase_newform
                if ($pathinfo === '/fase/newform') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\FaseController::newformAction',  '_route' => 'fase_newform',);
                }

            }

            // fase_list
            if ($pathinfo === '/fase/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\FaseController::listAction',  '_route' => 'fase_list',);
            }

            // fase_check
            if (preg_match('#^/fase/(?P<id>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fase_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\FaseController::checkAction',));
            }

            // fase_checkform
            if (preg_match('#^/fase/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fase_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\FaseController::checkformAction',));
            }

            // fase_edit
            if (preg_match('#^/fase/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fase_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\FaseController::editAction',));
            }

            // fase_editform
            if (preg_match('#^/fase/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fase_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\FaseController::editformAction',));
            }

            // fase_delete
            if ($pathinfo === '/fase/delete') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\FaseController::deleteAction',  '_route' => 'fase_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/project')) {
            if (0 === strpos($pathinfo, '/project/new')) {
                // project_new
                if ($pathinfo === '/project/new') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ProyectoController::newAction',  '_route' => 'project_new',);
                }

                // project_newform
                if ($pathinfo === '/project/newform') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ProyectoController::newformAction',  '_route' => 'project_newform',);
                }

            }

            // project_list
            if ($pathinfo === '/project/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ProyectoController::listAction',  '_route' => 'project_list',);
            }

            // project_check
            if (preg_match('#^/project/(?P<id>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ProyectoController::checkAction',));
            }

            // project_checkform
            if (preg_match('#^/project/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ProyectoController::checkformAction',));
            }

            // project_edit
            if (preg_match('#^/project/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ProyectoController::editAction',));
            }

            // project_editform
            if (preg_match('#^/project/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ProyectoController::editformAction',));
            }

            // project_delete
            if ($pathinfo === '/project/delete') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ProyectoController::deleteAction',  '_route' => 'project_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/tutors')) {
            if (0 === strpos($pathinfo, '/tutors/tutors_add')) {
                // tutors_add
                if ($pathinfo === '/tutors/tutors_add') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\TutoriaController::addAction',  '_route' => 'tutors_add',);
                }

                // tutors_addform
                if ($pathinfo === '/tutors/tutors_addform') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\TutoriaController::addformAction',  '_route' => 'tutors_addform',);
                }

            }

            // tutors_list
            if ($pathinfo === '/tutors/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\TutoriaController::listAction',  '_route' => 'tutors_list',);
            }

            // tutors_check
            if (preg_match('#^/tutors/(?P<id>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tutors_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\TutoriaController::checkAction',));
            }

            // tutors_checkform
            if (preg_match('#^/tutors/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tutors_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\TutoriaController::checkformAction',));
            }

            // tutors_edit
            if (preg_match('#^/tutors/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tutors_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\TutoriaController::editAction',));
            }

            // tutors_editform
            if (preg_match('#^/tutors/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tutors_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\TutoriaController::editformAction',));
            }

        }

        if (0 === strpos($pathinfo, '/daily')) {
            if (0 === strpos($pathinfo, '/daily/new')) {
                // diario_new
                if ($pathinfo === '/daily/new') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\DiarioController::newAction',  '_route' => 'diario_new',);
                }

                // diario_newform
                if ($pathinfo === '/daily/newform') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\DiarioController::newformAction',  '_route' => 'diario_newform',);
                }

            }

            // diario_list
            if ($pathinfo === '/daily/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\DiarioController::listAction',  '_route' => 'diario_list',);
            }

            // diario_check
            if (preg_match('#^/daily/(?P<id>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diario_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\DiarioController::checkAction',));
            }

            // diario_checkform
            if (preg_match('#^/daily/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diario_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\DiarioController::checkformAction',));
            }

            // diario_edit
            if (preg_match('#^/daily/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diario_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\DiarioController::editAction',));
            }

            // diario_editform
            if (preg_match('#^/daily/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'diario_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\DiarioController::editformAction',));
            }

            // diario_delete
            if ($pathinfo === '/daily/delete') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\DiarioController::deleteAction',  '_route' => 'diario_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/timetable')) {
            if (0 === strpos($pathinfo, '/timetable/new')) {
                // cronograma_new
                if ($pathinfo === '/timetable/new') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\CronogramaController::newAction',  '_route' => 'cronograma_new',);
                }

                // cronograma_newform
                if ($pathinfo === '/timetable/newform') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\CronogramaController::newformAction',  '_route' => 'cronograma_newform',);
                }

            }

            // cronograma_list
            if ($pathinfo === '/timetable/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\CronogramaController::listAction',  '_route' => 'cronograma_list',);
            }

            // cronograma_check
            if (preg_match('#^/timetable/(?P<id>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cronograma_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\CronogramaController::checkAction',));
            }

            // cronograma_checkform
            if (preg_match('#^/timetable/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cronograma_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\CronogramaController::checkformAction',));
            }

            // cronograma_edit
            if (preg_match('#^/timetable/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cronograma_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\CronogramaController::editAction',));
            }

            // cronograma_editform
            if (preg_match('#^/timetable/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cronograma_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\CronogramaController::editformAction',));
            }

            // cronograma_delete
            if ($pathinfo === '/timetable/delete') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\CronogramaController::deleteAction',  '_route' => 'cronograma_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/infoextra')) {
            if (0 === strpos($pathinfo, '/infoextra/new')) {
                // infoAdicional_new
                if ($pathinfo === '/infoextra/new') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoAdicionalController::newAction',  '_route' => 'infoAdicional_new',);
                }

                // infoAdicional_newform
                if ($pathinfo === '/infoextra/newform') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoAdicionalController::newformAction',  '_route' => 'infoAdicional_newform',);
                }

            }

            // infoAdicional_list
            if ($pathinfo === '/infoextra/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoAdicionalController::listAction',  '_route' => 'infoAdicional_list',);
            }

            // infoAdicional_check
            if (preg_match('#^/infoextra/(?P<id>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infoAdicional_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoAdicionalController::checkAction',));
            }

            // infoAdicional_checkform
            if (preg_match('#^/infoextra/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infoAdicional_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoAdicionalController::checkformAction',));
            }

            // infoAdicional_edit
            if (preg_match('#^/infoextra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infoAdicional_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoAdicionalController::editAction',));
            }

            // infoAdicional_editform
            if (preg_match('#^/infoextra/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infoAdicional_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoAdicionalController::editformAction',));
            }

            // infoAdicional_delete
            if ($pathinfo === '/infoextra/delete') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoAdicionalController::deleteAction',  '_route' => 'infoAdicional_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/reports/report')) {
            // reports_1
            if ($pathinfo === '/reports/reports1') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::new_reports1Action',  '_route' => 'reports_1',);
            }

            // report1form
            if ($pathinfo === '/reports/reportform') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::report1formAction',  '_route' => 'report1form',);
            }

            if (0 === strpos($pathinfo, '/reports/reports')) {
                // reports_1pdf
                if ($pathinfo === '/reports/reports1pdf') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::pdf_reports1Action',  '_route' => 'reports_1pdf',);
                }

                // reports_2
                if ($pathinfo === '/reports/reports2') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::new_reports2Action',  '_route' => 'reports_2',);
                }

            }

            // report2form
            if ($pathinfo === '/reports/reportform') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::report2formAction',  '_route' => 'report2form',);
            }

            if (0 === strpos($pathinfo, '/reports/reports')) {
                // reports_2pdf
                if ($pathinfo === '/reports/reports2pdf') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::pdf_reports2Action',  '_route' => 'reports_2pdf',);
                }

                if (0 === strpos($pathinfo, '/reports/reports3')) {
                    // reports_3
                    if ($pathinfo === '/reports/reports3') {
                        return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::new_reports3Action',  '_route' => 'reports_3',);
                    }

                    // reports_3pdf
                    if ($pathinfo === '/reports/reports3pdf') {
                        return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::pdf_reports3Action',  '_route' => 'reports_3pdf',);
                    }

                }

                if (0 === strpos($pathinfo, '/reports/reports4')) {
                    // reports_4
                    if ($pathinfo === '/reports/reports4') {
                        return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::new_reports4Action',  '_route' => 'reports_4',);
                    }

                    // reports_4pdf
                    if ($pathinfo === '/reports/reports4pdf') {
                        return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::pdf_reports4Action',  '_route' => 'reports_4pdf',);
                    }

                }

                if (0 === strpos($pathinfo, '/reports/reports5')) {
                    // reports_5
                    if ($pathinfo === '/reports/reports5') {
                        return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::new_reports5Action',  '_route' => 'reports_5',);
                    }

                    // reports_5pdf
                    if ($pathinfo === '/reports/reports5pdf') {
                        return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ReportsController::pdf_reports5Action',  '_route' => 'reports_5pdf',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/infofinal')) {
            // infofinal
            if ($pathinfo === '/infofinal/info_final') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoFinalController::new_infofinalAction',  '_route' => 'infofinal',);
            }

            // infofinal_pdf
            if (preg_match('#^/infofinal/(?P<id>[^/]++)/info_finalpdf$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infofinal_pdf')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoFinalController::pdf_infofinalAction',));
            }

            // infofinal_list
            if ($pathinfo === '/infofinal/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoFinalController::listAction',  '_route' => 'infofinal_list',);
            }

            // infofinal_check
            if (preg_match('#^/infofinal/(?P<id>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infofinal_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoFinalController::checkAction',));
            }

            // infofinal_checkform
            if (preg_match('#^/infofinal/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infofinal_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoFinalController::checkformAction',));
            }

            // infofinal_edit
            if (preg_match('#^/infofinal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infofinal_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoFinalController::editAction',));
            }

            // infofinal_editform
            if (preg_match('#^/infofinal/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'infofinal_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\InfoFinalController::editformAction',));
            }

        }

        if (0 === strpos($pathinfo, '/results')) {
            if (0 === strpos($pathinfo, '/results/new')) {
                // resultados_new
                if ($pathinfo === '/results/new') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ResultadosController::newAction',  '_route' => 'resultados_new',);
                }

                // resultados_newform
                if ($pathinfo === '/results/newform') {
                    return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ResultadosController::newformAction',  '_route' => 'resultados_newform',);
                }

            }

            // resultados_list
            if ($pathinfo === '/results/list') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ResultadosController::listAction',  '_route' => 'resultados_list',);
            }

            // resultados_check
            if (preg_match('#^/results/(?P<id>[^/]++)/check$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultados_check')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ResultadosController::checkAction',));
            }

            // resultados_checkform
            if (preg_match('#^/results/(?P<id>[^/]++)/check_form$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultados_checkform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ResultadosController::checkformAction',));
            }

            // resultados_edit
            if (preg_match('#^/results/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultados_edit')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ResultadosController::editAction',));
            }

            // resultados_editform
            if (preg_match('#^/results/(?P<id>[^/]++)/editform$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultados_editform')), array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ResultadosController::editformAction',));
            }

            // resultados_delete
            if ($pathinfo === '/results/delete') {
                return array (  '_controller' => 'Tesis\\AdminBundle\\Controller\\ResultadosController::deleteAction',  '_route' => 'resultados_delete',);
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/ap')) {
            if (0 === strpos($pathinfo, '/api/soap')) {
                // tesis_api_soap_check
                if ($pathinfo === '/api/soap/check') {
                    return array (  '_controller' => 'Tesis\\ApiBundle\\Controller\\SoapController::checkAction',  '_route' => 'tesis_api_soap_check',);
                }

                // tesis_api_soap_delete
                if ($pathinfo === '/api/soap/delete') {
                    return array (  '_controller' => 'Tesis\\ApiBundle\\Controller\\SoapController::deleteAction',  '_route' => 'tesis_api_soap_delete',);
                }

            }

            // homepage
            if ($pathinfo === '/app/example') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}