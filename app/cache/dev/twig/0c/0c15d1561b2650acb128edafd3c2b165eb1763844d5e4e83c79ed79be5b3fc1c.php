<?php

/* TesisAdminBundle:Actividad:edit-activities-form.html.twig */
class __TwigTemplate_de285e210629b439696e69344975abac4bebbc2d4258985de20a6f6f67e95f62 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "editar-actividad-form")));
        echo "
\t";
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "TesisAdminBundle:Form:fields.html.twig"));
        // line 4
        echo "<div class=\"container-fluid\">
<div class=\"container-content\">\t
\t
\t<div class=\"row field-c\"> 
\t\t<div class=\"form-group\">
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2 col-lg-3 \tcol-lg-offset-2\">
\t\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'row');
        echo " 
\t\t\t</div>
\t    \t<div class=\"col-xs-8 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 \tcol-lg-offset-0\">
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'row');
        echo "
\t\t\t</div>
\t\t</div>\t
\t</div>\t

  <div class=\"row field-c\">
    <div class=\"col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2\">
    <h5> (*) Campo Obligatorio</h5>
    </div>
  </div>  

\t<br><br>
\t<div clas=\"row\">
\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3 \tcol-lg-offset-2\" align=\"center\" style=\"margin-bottom: 2%;\" id=\"editar-actividad-boton\">
\t\t\t<button class=\"btn btn-success btn-lg\"> Actualizar</button> 
\t\t</div>
\t\t
        ";
        // line 30
        if ((((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "coordinador de proyecto") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo")) || (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "coordinador de servicio comunitario") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo"))) || (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "perfil", array()) == "coordinador suplente") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "estatus", array()) == "activo")))) {
            // line 31
            echo "        \t
\t\t\t<div class=\"col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3 \tcol-lg-offset-0\"align=\"center\" style=\"margin-bottom: 2%;\"  id=\"eliminar-actividad-boton\">
\t\t\t\t<button class=\"btn btn-danger btn-lg\"> Eliminar</button> 
\t\t\t</div>
\t\t";
        }
        // line 35
        echo "\t

\t</div>

</div>
</div>\t

";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
    }

    public function getTemplateName()
    {
        return "TesisAdminBundle:Actividad:edit-activities-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 43,  80 => 42,  71 => 35,  64 => 31,  62 => 30,  42 => 13,  36 => 10,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ form_start(form, {'attr': {novalidate: 'novalidate', id: 'editar-actividad-form'}}) }}*/
/* 	{% form_theme form 'TesisAdminBundle:Form:fields.html.twig' %}*/
/* <div class="container-fluid">*/
/* <div class="container-content">	*/
/* 	*/
/* 	<div class="row field-c"> */
/* 		<div class="form-group">*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-2 col-lg-3 	col-lg-offset-2">*/
/* 				{{ form_row(form.nombre) }} */
/* 			</div>*/
/* 	    	<div class="col-xs-8 col-xs-offset-1 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-4 	col-lg-offset-0">*/
/* 				{{ form_row(form.descripcion) }}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>	*/
/* */
/*   <div class="row field-c">*/
/*     <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6   col-lg-offset-2">*/
/*     <h5> (*) Campo Obligatorio</h5>*/
/*     </div>*/
/*   </div>  */
/* */
/* 	<br><br>*/
/* 	<div clas="row">*/
/* 		<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-4 col-lg-3 	col-lg-offset-2" align="center" style="margin-bottom: 2%;" id="editar-actividad-boton">*/
/* 			<button class="btn btn-success btn-lg"> Actualizar</button> */
/* 		</div>*/
/* 		*/
/*         {% if ((user.perfil == 'coordinador de proyecto') and (user.estatus == 'activo')) or ((user.perfil == 'coordinador de servicio comunitario') and (user.estatus == 'activo')) or ((user.perfil == 'coordinador suplente') and (user.estatus == 'activo')) %}*/
/*         	*/
/* 			<div class="col-xs-8 col-xs-offset-1 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-3 	col-lg-offset-0"align="center" style="margin-bottom: 2%;"  id="eliminar-actividad-boton">*/
/* 				<button class="btn btn-danger btn-lg"> Eliminar</button> */
/* 			</div>*/
/* 		{% endif %}	*/
/* */
/* 	</div>*/
/* */
/* </div>*/
/* </div>	*/
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/