<?php

/* VostreCentralBundle:Central:index.html.twig */
class __TwigTemplate_6634b932c9e365f51baf842bed42d25b642e143ca60deb51321eaae4b0a19852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("VostreCentralBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'conteudo' => array($this, 'block_conteudo'),
            'rodape' => array($this, 'block_rodape'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VostreCentralBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_css($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 37
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
    }

    // line 24
    public function block_menu($context, array $blocks = array())
    {
        echo " 
            ";
        // line 25
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
        ";
    }

    // line 27
    public function block_conteudo($context, array $blocks = array())
    {
        // line 28
        echo "
        ";
        // line 29
        $context["tipoUsuario"] = $this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "roles", array()), 0, array());
        // line 30
        echo "
        ";
        // line 31
        if ((((isset($context["tipoUsuario"]) ? $context["tipoUsuario"] : $this->getContext($context, "tipoUsuario")) == "ROLE_SUPER_ADMIN") || ((isset($context["tipoUsuario"]) ? $context["tipoUsuario"] : $this->getContext($context, "tipoUsuario")) == "ROLE_ADMIN"))) {
            // line 32
            echo "            ";
            $this->env->loadTemplate("VostreCentralBundle:Central:indexAdmin.html.twig")->display($context);
            // line 33
            echo "        ";
        } else {
            // line 34
            echo "            ";
            $this->env->loadTemplate("VostreCentralBundle:Central:indexCliente.html.twig")->display($context);
            // line 35
            echo "        ";
        }
        // line 36
        echo "        ";
    }

    // line 37
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "VostreCentralBundle:Central:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  106 => 36,  103 => 35,  100 => 34,  97 => 33,  94 => 32,  92 => 31,  89 => 30,  87 => 29,  84 => 28,  81 => 27,  75 => 25,  70 => 24,  65 => 37,  62 => 27,  59 => 24,  57 => 23,  54 => 22,  48 => 20,  43 => 19,  40 => 18,  11 => 1,);
    }
}
