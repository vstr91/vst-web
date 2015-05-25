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
        $context['_seq'] = twig_ensure_traversable((isset($context["destaquesCarousel"]) ? $context["destaquesCarousel"] : $this->getContext($context, "destaquesCarousel")));
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
                  ";
                // line 14
                if (($this->getAttribute($context["destaqueCarousel"], "site", array()) != "")) {
                    // line 15
                    echo "                  <p><a class=\"btn btn-lg btn-primary\" href=\"http://";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "site", array()), "html", null, true);
                    echo "\" target=\"_blank\" 
                        role=\"button\">";
                    // line 16
                    echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.botao.conferir", array(), "messages");
                    echo "</a></p>
                  ";
                } else {
                    // line 18
                    echo "                        <p><button class=\"btn btn-lg btn-primary disabled\"
                                   role=\"button\">";
                    // line 19
                    echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.botao.breve", array(), "messages");
                    echo "</button></p>
                  ";
                }
                // line 21
                echo "                  ";
                // line 23
                echo "              </div>
            </div>
          </div>
        ";
            } else {
                // line 27
                echo "          <div class=\"item\">
            <img class=\"img-responsive\" src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/destaque/" . $this->getAttribute($context["destaqueCarousel"], "imagem", array()))), "html", null, true);
                echo "\" 
                 alt=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "titulo", array()), "html", null, true);
                echo "\" />
            <div class=\"container\">
              <div class=\"carousel-caption\">
                  <h1>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "titulo", array()), "html", null, true);
                echo "</h1>
                  <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "descricao", array()), "html", null, true);
                echo "</p>
                <p><a class=\"btn btn-lg btn-primary\" href=\"http://";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaqueCarousel"], "site", array()), "html", null, true);
                echo "\" target=\"_blank\" role=\"button\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.botao.conferir", array(), "messages");
                echo "</a></p>
              </div>
            </div>
          </div>
        ";
            }
            // line 39
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
        // line 42
        echo "        
      </div>
        <!-- Indicators -->
        
        ";
        // line 46
        if ((twig_length_filter($this->env, (isset($context["destaquesCarousel"]) ? $context["destaquesCarousel"] : $this->getContext($context, "destaquesCarousel"))) > 1)) {
            // line 47
            echo "            <ol class=\"carousel-indicators\">
            ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["destaquesCarousel"]) ? $context["destaquesCarousel"] : $this->getContext($context, "destaquesCarousel")));
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
                // line 49
                echo "
            ";
                // line 50
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    // line 51
                    echo "              <li data-target=\"#component-carousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                    echo "\" class=\"active\"></li>
            ";
                } else {
                    // line 53
                    echo "              <li data-target=\"#component-carousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                    echo "\"></li>
            ";
                }
                // line 55
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
            // line 57
            echo "
          </ol>
          <a class=\"left carousel-control\" href=\"#component-carousel\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a>
          <a class=\"right carousel-control\" href=\"#component-carousel\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
        ";
        }
        // line 62
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
        return array (  209 => 62,  202 => 57,  187 => 55,  181 => 53,  175 => 51,  173 => 50,  170 => 49,  153 => 48,  150 => 47,  148 => 46,  142 => 42,  126 => 39,  116 => 34,  112 => 33,  108 => 32,  102 => 29,  98 => 28,  95 => 27,  89 => 23,  87 => 21,  82 => 19,  79 => 18,  74 => 16,  69 => 15,  67 => 14,  63 => 13,  59 => 12,  53 => 9,  49 => 8,  46 => 7,  44 => 6,  41 => 5,  24 => 4,  19 => 1,);
    }
}
