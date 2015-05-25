<?php

/* VostreSiteBundle:Component:features.html.twig */
class __TwigTemplate_98711061233311c16e352e06708b32fcad9e25e11e164fd81ee494873e358076 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
    
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destaquesFeature"]) ? $context["destaquesFeature"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["destaqueFeature"]) {
            // line 4
            echo "    
    ";
            // line 5
            if ((($this->getAttribute($context["loop"], "index0", array()) % 2) == 0)) {
                // line 6
                echo "    <div class=\"row vostre-bloco-feature\">
        <div class=\"col-md-6\">
            <img src=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/destaque/" . $this->getAttribute($context["destaqueFeature"], "imagem", array()))), "html", null, true);
                echo "\" class=\"imagens-home img-responsive\" />
        </div>
        <div class=\"col-md-6 text-center\">
            <h2 class=\"vostre-features\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueFeature"], "titulo", array()), "html", null, true);
                echo "</h2>
            <h4 class=\"vostre-features-subtitulo text-muted\">";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueFeature"], "descricao", array()), "html", null, true);
                echo "</h4>
        </div>
    </div>
    ";
            } else {
                // line 16
                echo "    <div class=\"col-md-6 hidden-md hidden-lg\">
        <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/destaque/" . $this->getAttribute($context["destaqueFeature"], "imagem", array()))), "html", null, true);
                echo "\" class=\"imagens-home img-responsive\" />
    </div>
    <div class=\"row vostre-bloco-feature\">
        <div class=\"col-md-6 text-center\">
            <h2 class=\"vostre-features\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueFeature"], "titulo", array()), "html", null, true);
                echo "</h2>
            <h4 class=\"vostre-features-subtitulo text-muted\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueFeature"], "descricao", array()), "html", null, true);
                echo "</h4>
        </div>
        <div class=\"col-md-6 hidden-sm hidden-xs\">
            <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/destaque/" . $this->getAttribute($context["destaqueFeature"], "imagem", array()))), "html", null, true);
                echo "\" class=\"imagens-home img-responsive\" />
        </div>
    </div>
    ";
            }
            // line 29
            echo "    
    
    
    ";
            // line 32
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                // line 33
                echo "    <hr class=\"vostre-separador\" />
    ";
            }
            // line 35
            echo "    
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destaqueFeature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    <div class=\"row vostre-bloco-feature\">
        <div class=\"col-md-12 text-center\">
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("vostre_site_contato");
        echo "\" class=\"btn btn-lg btn-primary\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.botao.vamos-conversar", array(), "messages");
        echo "</a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Component:features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  119 => 37,  104 => 35,  100 => 33,  98 => 32,  93 => 29,  86 => 25,  80 => 22,  76 => 21,  69 => 17,  66 => 16,  59 => 12,  55 => 11,  49 => 8,  45 => 6,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }
}
