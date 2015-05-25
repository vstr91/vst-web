<?php

/* CircularSiteBundle:Itinerario:detalhes.html.twig */
class __TwigTemplate_810e2ea61495351f961ae4f0888888399a24eb3f072ad7152de7fa8cc1351f1b extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    
    var paradas = [];
    
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paradas"]) ? $context["paradas"] : $this->getContext($context, "paradas")));
        foreach ($context['_seq'] as $context["_key"] => $context["parada"]) {
            // line 7
            echo "        
        umaParada = {
            id: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "id", array()), "html", null, true);
            echo ",
            referencia: \"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["parada"], "referencia", array()), "html", null, true);
            echo "\"
        };
        
    paradas.push(umaParada);
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    paradas;
</script>";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Itinerario:detalhes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  37 => 10,  33 => 9,  29 => 7,  25 => 6,  19 => 2,);
    }
}
