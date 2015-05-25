<?php

/* VostreSiteBundle:Component:carousel.html.twig */
class __TwigTemplate_a66d6e73f1da96a277367efb21822d22a8e7cce135b7471ea96a5f802fdef796 extends Twig_Template
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
        echo "<div id=\"component-carousel\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"5000\">
      
      <div class=\"carousel-inner\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destaquesCarousel"]) ? $context["destaquesCarousel"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["destaqueCarousel"]) {
            // line 5
            echo "          
        ";
            // line 6
            if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                // line 7
                echo "          <div class=\"item active\">
            <img class=\"img-responsive\" src=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/destaque/" . $this->getAttribute($context["destaqueCarousel"], "imagem", array()))), "html", null, true);
                echo "\" 
                 alt=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "titulo", array()), "html", null, true);
                echo "\" />
            <div class=\"container\">
              <div class=\"carousel-caption\">
                  <h1>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "titulo", array()), "html", null, true);
                echo "</h1>
                  <p>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "descricao", array()), "html", null, true);
                echo "</p>
                  <p><a class=\"btn btn-lg btn-primary\" href=\"http://";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "site", array()), "html", null, true);
                echo "\" target=\"_blank\" 
                        role=\"button\">";
                // line 15
                echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.botao.conferir", array(), "messages");
                echo "</a></p>
              </div>
            </div>
          </div>
        ";
            } else {
                // line 20
                echo "          <div class=\"item\">
            <img class=\"img-responsive\" src=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/destaque/" . $this->getAttribute($context["destaqueCarousel"], "imagem", array()))), "html", null, true);
                echo "\" 
                 alt=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "titulo", array()), "html", null, true);
                echo "\" />
            <div class=\"container\">
              <div class=\"carousel-caption\">
                  <h1>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "titulo", array()), "html", null, true);
                echo "</h1>
                  <p>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "descricao", array()), "html", null, true);
                echo "</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"http://";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "site", array()), "html", null, true);
                echo "\" target=\"_blank\" role=\"button\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.botao.conferir", array(), "messages");
                echo "</a></p>
              </div>
            </div>
          </div>
        ";
            }
            // line 32
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destaqueCarousel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        
      </div>
        <!-- Indicators -->
        
        ";
        // line 39
        if ((twig_length_filter($this->env, (isset($context["destaquesCarousel"]) ? $context["destaquesCarousel"] : null)) > 1)) {
            // line 40
            echo "            <ol class=\"carousel-indicators\">
            ";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["destaquesCarousel"]) ? $context["destaquesCarousel"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["destaqueCarousel"]) {
                // line 42
                echo "
            ";
                // line 43
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    // line 44
                    echo "              <li data-target=\"#component-carousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                    echo "\" class=\"active\"></li>
            ";
                } else {
                    // line 46
                    echo "              <li data-target=\"#component-carousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                    echo "\"></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destaqueCarousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
          </ol>
          <a class=\"left carousel-control\" href=\"#component-carousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
          <a class=\"right carousel-control\" href=\"#component-carousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
        ";
        }
        // line 55
        echo "        
    </div><!-- /.carousel -->";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Component:carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 55,  186 => 50,  171 => 48,  165 => 46,  159 => 44,  157 => 43,  154 => 42,  137 => 41,  134 => 40,  132 => 39,  126 => 35,  110 => 32,  100 => 27,  96 => 26,  92 => 25,  86 => 22,  82 => 21,  79 => 20,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  53 => 9,  49 => 8,  46 => 7,  44 => 6,  41 => 5,  24 => 4,  19 => 1,);
    }
}
