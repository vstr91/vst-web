<?php

/* CircularSiteBundle:Admin/Parada:form.html.twig */
class __TwigTemplate_fdbe92e3b7f336c9337fd32593c8a35e258c986b67f796462a1b6c346680dcc9 extends Twig_Template
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
        echo "<form id=\"form-parada\" 
      action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circular_site_admin_parada_cadastrar", array("id_parada" => $this->getAttribute((isset($context["parada"]) ? $context["parada"] : $this->getContext($context, "parada")), "id", array()))), "html", null, true);
        echo "\" 
      method=\"POST\" ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Cadastrar\" />
    </p>
</form>
<script type=\"text/javascript\">
    \$('#form-parada').submit(function(){
        \$(this).ajaxSubmit(function(data){
            console.log(data);
            \$(\".caixaForm\").dialog('close');
            return false;
        });
        return false;
    });
</script>";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Admin/Parada:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
