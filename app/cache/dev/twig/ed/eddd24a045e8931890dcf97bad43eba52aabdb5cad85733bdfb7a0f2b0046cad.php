<?php

/* TesisAdminBundle:Proyecto:new-project.html.twig */
class __TwigTemplate_36e8a9c2dbfc34d0f177d6629929bd5169d9a0d96ab2a315708bf39dde2d33f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base_datepicker.html.twig", "TesisAdminBundle:Proyecto:new-project.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin_base_datepicker.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">
      
      ";
        // line 8
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:header.html.twig");
        echo "

      ";
        // line 10
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:sidebar.html.twig");
        echo "

        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
          <!-- Content Header (Page header) -->
          <section class=\"content-header\">
            <h1>
              Gestión de Proyectos
              <small></small>
            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i>Inicio</a></li>
              <li class=\"active\">Gestión de Proyectos</li>
              <li class=\"active\">Proyecto</li>
              <li class=\"active\">Crear</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Crear proyecto</h3>
                <div class=\"box-tools pull-right\">
                  <button class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                </div>
              </div>
              
                <!-- form -->
                <div id=\"nuevo-proyecto-div\">
                    ";
        // line 42
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TesisAdminBundle:Proyecto:newform"));
        echo "
                </div>

            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

      ";
        // line 49
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->

";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Proyecto:new-project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 49,  80 => 42,  56 => 21,  42 => 10,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::admin_base_datepicker.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <!-- Site wrapper -->*/
/*     <div class="wrapper">*/
/*       */
/*       {{ include('TesisAdminBundle:Main:header.html.twig') }}*/
/* */
/*       {{ include('TesisAdminBundle:Main:sidebar.html.twig') }}*/
/* */
/*         <!-- Content Wrapper. Contains page content -->*/
/*         <div class="content-wrapper">*/
/*           <!-- Content Header (Page header) -->*/
/*           <section class="content-header">*/
/*             <h1>*/
/*               Gestión de Proyectos*/
/*               <small></small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*               <li><a href="{{ path('tesis_admin_homepage') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>*/
/*               <li class="active">Gestión de Proyectos</li>*/
/*               <li class="active">Proyecto</li>*/
/*               <li class="active">Crear</li>*/
/*             </ol>*/
/*           </section>*/
/* */
/*           <!-- Main content -->*/
/*           <section class="content">*/
/* */
/*             <!-- Default box -->*/
/*             <div class="box box-primary">*/
/*               <div class="box-header with-border">*/
/*                 <h3 class="box-title">Crear proyecto</h3>*/
/*                 <div class="box-tools pull-right">*/
/*                   <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>*/
/*                 </div>*/
/*               </div>*/
/*               */
/*                 <!-- form -->*/
/*                 <div id="nuevo-proyecto-div">*/
/*                     {{ render(controller('TesisAdminBundle:Proyecto:newform')) }}*/
/*                 </div>*/
/* */
/*             </div><!-- /.box -->*/
/*           </section><!-- /.content -->*/
/*         </div><!-- /.content-wrapper -->*/
/* */
/*       {{ include('TesisAdminBundle:Main:footer.html.twig') }}*/
/*      */
/*     </div><!-- ./wrapper -->*/
/* */
/* {% endblock %}*/
/* */
