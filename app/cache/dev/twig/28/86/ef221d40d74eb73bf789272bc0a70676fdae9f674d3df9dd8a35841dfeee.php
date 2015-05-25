<?php

/* VostreSiteBundle::layout.html.twig */
class __TwigTemplate_2886ef221d40d74eb73bf789272bc0a70676fdae9f674d3df9dd8a35841dfeee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'conteudo' => array($this, 'block_conteudo'),
            'rodape' => array($this, 'block_rodape'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 61
        echo "        ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 63
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        // line 11
        echo "        <div class=\"navbar\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button class=\"navbar-toggle v-botao-collapse\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Navega&ccedil;&atilde;o</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
";
        // line 21
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("vostre_site_homepage");
        echo "\" class=\"navbar-brand v-logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/logo-preta-20.png"), "html", null, true);
        echo "\" /></a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itensMenu"]) ? $context["itensMenu"] : $this->getContext($context, "itensMenu")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["itemMenu"]) {
            // line 26
            echo "                        <li class=\"link-menu-principal links-menu\">
                            <a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($context["itemMenu"], "caminho", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["itemMenu"], "titulo", array()), "html", null, true);
            echo "</a>
                        </li>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "                        <li class=\"link-menu-principal links-menu\">
                            Nenhum menu cadastrado
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemMenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </ul>
                    ";
        // line 36
        echo "                    <p class=\"navbar-text navbar-right v-bandeiras visible-sm visible-md visible-lg\">
                        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "pt_BR"))), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/bra.png"), "html", null, true);
        echo "\" />
                        </a>
                        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/usa.png"), "html", null, true);
        echo "\" />
                        </a>
                    </p>
                    ";
        // line 48
        echo "                    <p class=\"navbar-text navbar-right v-bandeiras visible-xs\">
                        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "pt_BR"))), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/bra.png"), "html", null, true);
        echo "\" />
                        </a>
                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/usa.png"), "html", null, true);
        echo "\" />
                        </a>
                    </p>
                    ";
        // line 57
        echo "                </div>
            </div>
        </div>
        ";
    }

    // line 61
    public function block_conteudo($context, array $blocks = array())
    {
        // line 62
        echo "        ";
    }

    // line 63
    public function block_rodape($context, array $blocks = array())
    {
        // line 64
        echo "        <footer>
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col-md-6\">
                        <p class=\"vostre-footer-texto\">
                            <a href=\"tel:";
        // line 69
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.rodape.telefone-celular-raw", array(), "messages");
        echo "\" class=\"v-link-rodape\">
                                <span class=\"glyphicon glyphicon-phone-alt v-cor-vermelho\"></span> ";
        // line 70
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.rodape.telefone-celular", array(), "messages");
        echo "</a></p>
                    </div>
                    <div class=\"col-md-6 text-center\">
                        <p class=\"vostre-footer-texto\">
                            <a href=\"https://facebook.com/vostre\" class=\"v-link-rodape\" target=\"_blank\">
                                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/facebook.png"), "html", null, true);
        echo "\" 
                                     alt=\"Facebook\" 
                                     class=\"img-circle v-link-social\" /> /vostre</a>
                            ";
        // line 82
        echo "                        </p>
                    </div>
                </div>
                <div class=\"row text-center\">
                    <div class=\"col-md-12\">
                        <p class=\"vostre-footer-texto\">&copy; Vostr&egrave; 2015</p>
                    </div>
                </div>
                <div class=\"row text-center\">
                    <div class=\"col-md-12\">
                        <p class=\"vostre-footer-texto small\">";
        // line 92
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.rodape.cookies", array(), "messages");
        echo "</p>
                    </div>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 92,  193 => 82,  187 => 75,  179 => 70,  175 => 69,  168 => 64,  165 => 63,  161 => 62,  158 => 61,  151 => 57,  145 => 53,  141 => 52,  136 => 50,  132 => 49,  129 => 48,  123 => 41,  119 => 40,  114 => 38,  110 => 37,  107 => 36,  104 => 34,  95 => 30,  85 => 27,  82 => 26,  77 => 25,  67 => 21,  56 => 11,  53 => 10,  48 => 63,  45 => 61,  42 => 10,  39 => 9,  11 => 1,);
    }
}
