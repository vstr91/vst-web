<?php

/* CircularSiteBundle:Itinerario:todosHorarios.html.twig */
class __TwigTemplate_045e4fe2ace527cf1cc987d222a1a05319308ba62574ff0502f6df75211bfafe extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horarios"]) ? $context["horarios"] : $this->getContext($context, "horarios")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["horario"]) {
            // line 3
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "horario", array()), "H:i") == (isset($context["hora"]) ? $context["hora"] : $this->getContext($context, "hora")))) {
                // line 4
                echo "<span class=\"destaque\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "horario", array()), "H:i"), "html", null, true);
                echo "</span>
";
            } else {
                // line 6
                echo "<span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horario"], "horario", array()), "H:i"), "html", null, true);
                echo "</span>
";
            }
            // line 8
            if ((($this->getAttribute($context["loop"], "last", array()) == false) &&  !(0 == $this->getAttribute($context["loop"], "index", array()) % 5))) {
                // line 9
                echo " - 
";
            } else {
                // line 11
                echo " <br />
";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Itinerario:todosHorarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  52 => 9,  50 => 8,  44 => 6,  38 => 4,  36 => 3,  19 => 2,);
    }
}
