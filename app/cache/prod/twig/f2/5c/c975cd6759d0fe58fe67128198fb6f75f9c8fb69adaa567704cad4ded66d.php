<?php

/* VostreSiteBundle:Page:portfolio.html.twig */
class __TwigTemplate_f25cc975cd6759d0fe58fe67128198fb6f75f9c8fb69adaa567704cad4ded66d extends Twig_Template
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
        // line 38
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
        echo "        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h3>";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.pagina.titulo.portfolio", array(), "messages");
        echo "</h3>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p>";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.pagina.descricao.portfolio", array(), "messages");
        echo "</p>
                </div>
            </div>
            ";
        // line 23
        $this->env->loadTemplate("VostreSiteBundle:Component:galeria.html.twig")->display(array_merge($context, array("portfolio" =>         // line 24
(isset($context["portfolio"]) ? $context["portfolio"] : null), "caminho" => "uploads/portfolio/")));
        // line 25
        echo "            ";
        // line 36
        echo "        </div>
        ";
    }

    // line 38
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Page:portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 38,  90 => 36,  88 => 25,  86 => 24,  85 => 23,  79 => 20,  71 => 15,  66 => 12,  63 => 11,  55 => 10,  50 => 38,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  11 => 1,);
    }
}
