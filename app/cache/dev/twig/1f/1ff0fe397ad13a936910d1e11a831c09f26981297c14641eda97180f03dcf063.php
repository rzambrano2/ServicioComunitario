<?php

/* TesisAdminBundle:Diario:check-diario-form.html.twig */
class __TwigTemplate_31c442ce83cfa7bf835014cd2541e3c331a2b07d0dfbe68d29346a1764954ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 4
        echo "<div class=\"container-fluid\">
<div class=\"container-content\">\t
\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cronogramacronograma", array()), 'row');
        echo "
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fecha", array()), 'row', array("type" => "text", "id" => "datepicker1"));
        echo " 
\t\t\t</div>\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "proyectoProyecto", array()), 'row');
        echo "  
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "actividadActividad", array()), 'row');
        echo "  
\t\t\t</div>\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horaInicio", array()), 'row', array("id" => "timepicker1"));
        echo "
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horaFin", array()), 'row', array("id" => "timepicker2"));
        echo " 
\t\t\t</div>\t
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "horas", array()), 'row');
        echo "
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personas", array()), 'row');
        echo " 
\t\t\t</div>\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-2 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ninos", array()), 'row');
        echo "
\t\t\t</div>
\t    \t<div class=\"col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adultos", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "terceraEdad", array()), 'row');
        echo " 
\t\t\t</div>\t
\t    \t<div class=\"col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "discapacidad", array()), 'row');
        echo " 
\t\t\t</div>\t\t\t\t\t\t\t
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "descripcion", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "personal", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fortalezas", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "debilidades", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "conclusion", array()), 'row');
        echo "
\t\t\t</div>\t\t
\t\t</div>\t
\t</div>

\t  <div class=\"row field-c\"> 
\t    <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2 subtitulos\">  
\t      <h2>Evaluativo <hr style=\"border-top: 3px solid #3c8dbc;\"></h2>  
\t    </div>
\t  </div> 

\t  <div class=\"row field-c\"> 
\t    <div class=\"form-group\">
\t        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2\">
\t        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "calificacion", array()), 'row');
        echo "
\t      </div>
\t        <div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0\">
\t        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "observacion", array()), 'row');
        echo " 
\t      </div>  
\t    </div>  
\t  </div>

\t<br><br>
\t  <div class=\"row\">
\t    <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\" >
\t       ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "edit", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
        echo " 
\t    </div>  
\t    <div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0\"align=\"center\" style=\"margin-bottom: 2%;\" >
\t       ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "back", array()), 'row', array("attr" => array("class" => "btn btn-success btn-lg")));
        echo " 
\t    </di>     
\t  </div>

</div>
</div>\t

";
        // line 129
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Diario:check-diario-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 129,  208 => 122,  202 => 119,  191 => 111,  185 => 108,  168 => 94,  158 => 87,  148 => 80,  138 => 73,  128 => 66,  118 => 59,  112 => 56,  106 => 53,  100 => 50,  90 => 43,  84 => 40,  74 => 33,  68 => 30,  58 => 23,  52 => 20,  42 => 13,  36 => 10,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate'}}) }}*/
/* 	{% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content">	*/
/* 	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.cronogramacronograma)}}*/
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.fecha, {'type':'text', 'id': 'datepicker1'}) }} */
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.proyectoProyecto) }}  */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.actividadActividad) }}  */
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.horaInicio, {'id': 'timepicker1'}) }}*/
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.horaFin, {'id': 'timepicker2'}) }} */
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.horas)}}*/
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.personas) }} */
/* 			</div>	*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-2 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.ninos)}}*/
/* 			</div>*/
/* 	    	<div class="col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.adultos) }} */
/* 			</div>*/
/* 	    	<div class="col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.terceraEdad) }} */
/* 			</div>	*/
/* 	    	<div class="col-xs-2 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2 col-md-offset-0 col-lg-3 	col-lg-offset-0">*/
/* 				{{ form_row(form.discapacidad) }} */
/* 			</div>							*/
/* 		</div>	*/
/* 	</div>	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.descripcion) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.personal) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.fortalezas) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.debilidades) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 	col-lg-offset-2">*/
/* 				{{ form_row(form.conclusion) }}*/
/* 			</div>		*/
/* 		</div>	*/
/* 	</div>*/
/* */
/* 	  <div class="row field-c"> */
/* 	    <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2 subtitulos">  */
/* 	      <h2>Evaluativo <hr style="border-top: 3px solid #3c8dbc;"></h2>  */
/* 	    </div>*/
/* 	  </div> */
/* */
/* 	  <div class="row field-c"> */
/* 	    <div class="form-group">*/
/* 	        <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-4 col-md-offset-2 col-lg-3   col-lg-offset-2">*/
/* 	        {{ form_row(form.calificacion)}}*/
/* 	      </div>*/
/* 	        <div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-4 col-md-offset-0 col-lg-3   col-lg-offset-0">*/
/* 	        {{ form_row(form.observacion) }} */
/* 	      </div>  */
/* 	    </div>  */
/* 	  </div>*/
/* */
/* 	<br><br>*/
/* 	  <div class="row">*/
/* 	    <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3   col-lg-offset-2" align="center" style="margin-bottom: 2%;" >*/
/* 	       {{ form_row(form.edit, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/* 	    </div>  */
/* 	    <div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3   col-lg-offset-0"align="center" style="margin-bottom: 2%;" >*/
/* 	       {{ form_row(form.back, {'attr': {'class': 'btn btn-success btn-lg'}} ) }} */
/* 	    </di>     */
/* 	  </div>*/
/* */
/* </div>*/
/* </div>	*/
/* */
/* {{ form_end(form) }}*/