<?php

/* VostreCentralBundle::layout.html.twig */
class __TwigTemplate_a8b19bbfcdca25af064a03ec6acdb050fdd32c7ea3daa8f816b87e72581f701a extends Twig_Template
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
            'subtitulo' => array($this, 'block_subtitulo'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "        ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 28
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"navbar\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("vostre_site_central_cliente_home");
        echo "\" class=\"navbar-brand v-logo\">
                        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/logo-preta-20.png"), "html", null, true);
        echo "\" /></a>
                    <h2 class=\"navbar-text text-center\">
                        ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "roles", array()), 0, array()) == "ROLE_CLIENTE")) {
            // line 11
            echo "                        Central do Cliente
                        ";
        } else {
            // line 13
            echo "                        Central Administrativa ";
            $this->displayBlock('subtitulo', $context, $blocks);
            // line 14
            echo "                        ";
        }
        // line 15
        echo "                        
                    </h2>
                </div>
                <div class=\"nav navbar-nav navbar-right\">
                    ";
        // line 19
        if (array_key_exists("usuario", $context)) {
            // line 20
            echo "                    <span class=\"navbar-text\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Sair</a></span>
                    ";
        }
        // line 22
        echo "                </div>
            </div>
        </div>
        ";
    }

    // line 13
    public function block_subtitulo($context, array $blocks = array())
    {
    }

    // line 26
    public function block_conteudo($context, array $blocks = array())
    {
        // line 27
        echo "        ";
    }

    // line 28
    public function block_rodape($context, array $blocks = array())
    {
        // line 29
        echo "        <footer>
            <div class=\"container\">
                <div class=\"row text-center\">
                    <div class=\"col-md-6\">
                        <p class=\"vostre-footer-texto\">
                            <a href=\"tel:24992201141\" class=\"v-link-rodape\">
                                <span class=\"glyphicon glyphicon-phone-alt v-cor-vermelho\"></span> (24) 9 9220 1141</a></p>
                    </div>
                    <div class=\"col-md-6 text-center\">
                        <p class=\"vostre-footer-texto\">
                            <a href=\"https://facebook.com/vostre\" class=\"v-link-rodape\" target=\"_blank\">
                                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/facebook.png"), "html", null, true);
        echo "\" 
                                     alt=\"Facebook\" 
                                     class=\"img-circle v-link-social\" /> /vostre</a>
                            ";
        // line 47
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
                        <p class=\"vostre-footer-texto small\">Este site pode utilizar cookies para proporcionar 
                            uma melhor experi&ecirc;ncia a seus visitantes. Ao utiliz&aacute;-lo, 
                            voc&ecirc; concorda com termos de uso.</p>
                    </div>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "VostreCentralBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 47,  132 => 40,  119 => 29,  116 => 28,  112 => 27,  109 => 26,  104 => 13,  97 => 22,  91 => 20,  89 => 19,  83 => 15,  80 => 14,  77 => 13,  73 => 11,  71 => 10,  66 => 8,  62 => 7,  57 => 4,  54 => 3,  49 => 28,  46 => 26,  43 => 3,  40 => 2,  11 => 1,);
    }
}
