<?php

/* TesisAdminBundle:CoordinadoresHasProfesor:list-coordinadores.html.twig */
class __TwigTemplate_dcbdd3c804d479d7e7a4f667b51cdc76a6969cc273eb4693a92371e0b71d153a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin_base.html.twig", "TesisAdminBundle:CoordinadoresHasProfesor:list-coordinadores.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin_base.html.twig";
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
        // line 9
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:header.html.twig");
        echo "

      ";
        // line 11
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:sidebar.html.twig");
        echo "

        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
          <!-- Content Header (Page header) -->
          <section class=\"content-header\">
            <h1>
              Gestionar asignaciones
              <small></small>
            </h1>
            <ol class=\"breadcrumb\">
              <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tesis_admin_homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i>Inicio</a></li>
              <li class=\"active\">Gestionar asignaciones</li>             
              <li class=\"active\">Listar asignación de estudiantes a proyecto</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class=\"content\">

            <!-- Default box -->
            <div class=\"box box-primary\">
              <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Listar asignaciónes de estudiantes a proyecto</h3>
                <div class=\"box-tools pull-right\">
                  <button class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
                </div>
              </div>
              

              <div class=\"box-body\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                  <thead>
                    <tr>
                      <th>Proyecto</th>
                      <th>Periodo</th>                      
                      <th></th>
                      <th></th>   
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coords"]) ? $context["coords"] : $this->getContext($context, "coords")));
        foreach ($context['_seq'] as $context["_key"] => $context["coord"]) {
            // line 53
            echo "                    <tr> 
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["coord"], "proyectoProyecto", array()), "nombre", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["coord"], "periodo", array()), "html", null, true);
            echo "</td>                               
                    <td align=\"center\">
                      <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coord_check", array("id" => $this->getAttribute($context["coord"], "coordinadoresHasProfesorId", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Consultar</button>
                      </a>
                    </td>
                    <td align=\"center\">
                      <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coord_edit", array("id" => $this->getAttribute($context["coord"], "coordinadoresHasProfesorId", array()))), "html", null, true);
            echo "\">
                          <button class=\"btn btn-success\">Editar</button>
                      </a>
                    </td>
                    </tr> 
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "         
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Proyecto</th>
                      <th>Periodo</th>                      
                      <th></th>
                      <th></th>
                    </tr>
                  </tfoot>
                </table> 
              </div><!-- /.box-body -->                               
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

      ";
        // line 83
        echo twig_include($this->env, $context, "TesisAdminBundle:Main:footer.html.twig");
        echo "
     
    </div><!-- ./wrapper -->


";
    }

    // line 91
    public function block_js($context, array $blocks = array())
    {
        // line 92
        echo "        <!-- page script -->
    <script type=\"text/javascript\">
      \$(function () {
        \$(\"#example1\").dataTable();
      });
    </script> 

 ";
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:CoordinadoresHasProfesor:list-coordinadores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 92,  155 => 91,  145 => 83,  127 => 67,  115 => 62,  107 => 57,  102 => 55,  98 => 54,  95 => 53,  91 => 52,  58 => 22,  44 => 11,  39 => 9,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::admin_base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
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
/*               Gestionar asignaciones*/
/*               <small></small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*               <li><a href="{{ path('tesis_admin_homepage') }}"><i class="fa fa-dashboard"></i>Inicio</a></li>*/
/*               <li class="active">Gestionar asignaciones</li>             */
/*               <li class="active">Listar asignación de estudiantes a proyecto</li>*/
/*             </ol>*/
/*           </section>*/
/* */
/*           <!-- Main content -->*/
/*           <section class="content">*/
/* */
/*             <!-- Default box -->*/
/*             <div class="box box-primary">*/
/*               <div class="box-header with-border">*/
/*                 <h3 class="box-title">Listar asignaciónes de estudiantes a proyecto</h3>*/
/*                 <div class="box-tools pull-right">*/
/*                   <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>*/
/*                 </div>*/
/*               </div>*/
/*               */
/* */
/*               <div class="box-body">*/
/*                 <table id="example1" class="table table-bordered table-striped">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <th>Proyecto</th>*/
/*                       <th>Periodo</th>                      */
/*                       <th></th>*/
/*                       <th></th>   */
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for coord in coords %}*/
/*                     <tr> */
/*                     <td>{{ coord.proyectoProyecto.nombre }}</td> */
/*                     <td>{{ coord.periodo }}</td>                               */
/*                     <td align="center">*/
/*                       <a href="{{ path('coord_check', {'id': coord.coordinadoresHasProfesorId}) }}">*/
/*                           <button class="btn btn-success">Consultar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     <td align="center">*/
/*                       <a href="{{ path('coord_edit', {'id': coord.coordinadoresHasProfesorId}) }}">*/
/*                           <button class="btn btn-success">Editar</button>*/
/*                       </a>*/
/*                     </td>*/
/*                     </tr> */
/*                   {% endfor %}         */
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <th>Proyecto</th>*/
/*                       <th>Periodo</th>                      */
/*                       <th></th>*/
/*                       <th></th>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table> */
/*               </div><!-- /.box-body -->                               */
/*             </div><!-- /.box -->*/
/*           </section><!-- /.content -->*/
/*         </div><!-- /.content-wrapper -->*/
/* */
/*       {{ include('TesisAdminBundle:Main:footer.html.twig') }}*/
/*      */
/*     </div><!-- ./wrapper -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/*  {% block js %}*/
/*         <!-- page script -->*/
/*     <script type="text/javascript">*/
/*       $(function () {*/
/*         $("#example1").dataTable();*/
/*       });*/
/*     </script> */
/* */
/*  {% endblock %}   */