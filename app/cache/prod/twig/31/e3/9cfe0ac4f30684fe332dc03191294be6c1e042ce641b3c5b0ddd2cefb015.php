<?php

/* CircularSiteBundle:Itinerario:horarios.html.twig */
class __TwigTemplate_31e39cfe0ac4f30684fe332dc03191294be6c1e042ce641b3c5b0ddd2cefb015 extends Twig_Template
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
        // line 2
        echo "<form id=\"form-horarios\" 
      action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_itinerario_horario_cadastrar");
        echo "\" 
      method=\"POST\" ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Cadastrar\" />
    </p>
</form>";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Itinerario:horarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }
}
