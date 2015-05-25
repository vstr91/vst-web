<?php

/* VostreSiteBundle:Page:index.html.twig */
class __TwigTemplate_c933d8ab0b78403b45724a602aca2292dab14b6354380b030b52c441d8dcf0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("VostreSiteBundle::layout.html.twig");
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
        return "VostreSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        // line 10
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo " ";
    }

    // line 11
    public function block_conteudo($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        $this->env->loadTemplate("VostreSiteBundle:Component:carousel.html.twig")->display(array_merge($context, (isset($context["destaquesCarousel"]) ? $context["destaquesCarousel"] : null)));
        // line 13
        echo "        ";
        $this->env->loadTemplate("VostreSiteBundle:Component:features.html.twig")->display(array_merge($context, (isset($context["destaquesFeature"]) ? $context["destaquesFeature"] : null)));
        // line 14
        echo "        ";
    }

    // line 15
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  55 => 10,  50 => 15,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  11 => 1,);
    }
}
