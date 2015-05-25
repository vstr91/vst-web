<?php

/* VostreSiteBundle:Component:galeria.html.twig */
class __TwigTemplate_4b60a428f4203ee7e03ee2707162d1f7a2c49eb1e7430074bf2e3bfc74da0232 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["projeto"]) {
            // line 2
            echo "    
    ";
            // line 3
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                // line 4
                echo "    <div class=\"row text-center\">
        <div class=\"col-md-4\">
            <img class=\"v-imagem-servico\" src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["caminho"]) ? $context["caminho"] : $this->getContext($context, "caminho")) . (($this->getAttribute($context["projeto"], "imagem", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["projeto"], "imagem", array()), "sem-foto.png")) : ("sem-foto.png")))), "html", null, true);
                echo "\">
                <h3>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["projeto"], "titulo", array()), "html", null, true);
                echo "</h3>
                <p>";
                // line 8
                echo $this->getAttribute($context["projeto"], "descricao", array());
                echo "</p>
                
                ";
                // line 10
                if (($this->getAttribute($context["projeto"], "site", array(), "any", true, true) && ($this->getAttribute($context["projeto"], "site", array()) != ""))) {
                    // line 11
                    echo "                <p><strong>Site: </strong><a href=\"http://";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projeto"], "site", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projeto"], "site", array()), "html", null, true);
                    echo "</a></p>
                ";
                }
                // line 13
                echo "                
            </div>
    ";
            } else {
                // line 16
                echo "    
        ";
                // line 17
                if (((($this->getAttribute($context["loop"], "index", array()) % 3) == 0) && ($this->getAttribute($context["loop"], "last", array()) == false))) {
                    // line 18
                    echo "            <div class=\"col-md-4\">
                <img class=\"v-imagem-servico\" src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["caminho"]) ? $context["caminho"] : $this->getContext($context, "caminho")) . (($this->getAttribute($context["projeto"], "imagem", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["projeto"], "imagem", array()), "sem-foto.png")) : ("sem-foto.png")))), "html", null, true);
                    echo "\">
                <h3>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projeto"], "titulo", array()), "html", null, true);
                    echo "</h3>
                <p>";
                    // line 21
                    echo $this->getAttribute($context["projeto"], "descricao", array());
                    echo "</p>
                
                ";
                    // line 23
                    if ($this->getAttribute($context["projeto"], "site", array(), "any", true, true)) {
                        // line 24
                        echo "                <p><strong>Site: </strong><a href=\"http://";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["projeto"], "site", array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["projeto"], "site", array()), "html", null, true);
                        echo "</a></p>
                ";
                    }
                    // line 26
                    echo "                
            </div>
        </div> <!-- fechando div principal -->
        <div class=\"row text-center\"> <!-- reabrindo div principal (outra linha) -->
        ";
                } else {
                    // line 31
                    echo "            <div class=\"col-md-4\">
                <img class=\"v-imagem-servico\" src=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["caminho"]) ? $context["caminho"] : $this->getContext($context, "caminho")) . (($this->getAttribute($context["projeto"], "imagem", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["projeto"], "imagem", array()), "sem-foto.png")) : ("sem-foto.png")))), "html", null, true);
                    echo "\">
                <h3>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projeto"], "titulo", array()), "html", null, true);
                    echo "</h3>
                <p>";
                    // line 34
                    echo $this->getAttribute($context["projeto"], "descricao", array());
                    echo "</p>
                
                ";
                    // line 36
                    if ($this->getAttribute($context["projeto"], "site", array(), "any", true, true)) {
                        // line 37
                        echo "                <p><strong>Site: </strong><a href=\"http://";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["projeto"], "site", array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["projeto"], "site", array()), "html", null, true);
                        echo "</a></p>
                ";
                    }
                    // line 39
                    echo "                
            </div>
        ";
                }
                // line 42
                echo "        
    ";
            }
            // line 44
            echo "            
    ";
            // line 45
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 46
                echo "    </div>
    ";
            }
            // line 48
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projeto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Component:galeria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 48,  151 => 46,  149 => 45,  146 => 44,  142 => 42,  137 => 39,  129 => 37,  127 => 36,  122 => 34,  118 => 33,  114 => 32,  111 => 31,  104 => 26,  96 => 24,  94 => 23,  89 => 21,  85 => 20,  81 => 19,  78 => 18,  76 => 17,  73 => 16,  68 => 13,  60 => 11,  58 => 10,  53 => 8,  49 => 7,  45 => 6,  41 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }
}
