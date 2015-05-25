<?php

/* VostreSiteBundle:Page:servicos.html.twig */
class __TwigTemplate_6fd51ba443e375873a1bdee045b356c47ff9cf4ef4b43455ca7008aaa2e9d98d extends Twig_Template
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
        // line 27
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.pagina.titulo.servicos", array(), "messages");
        echo "</h3>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p>";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.pagina.descricao.servicos", array(), "messages");
        echo ":</p>
                </div>
            </div>
            ";
        // line 23
        $this->env->loadTemplate("VostreSiteBundle:Component:galeria.html.twig")->display(array_merge($context, array("portfolio" =>         // line 24
(isset($context["portfolio"]) ? $context["portfolio"] : $this->getContext($context, "portfolio")), "caminho" => "uploads/servico/")));
        // line 25
        echo "        </div>
        ";
    }

    // line 27
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Page:servicos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  88 => 25,  86 => 24,  85 => 23,  79 => 20,  71 => 15,  66 => 12,  63 => 11,  55 => 10,  50 => 27,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  11 => 1,);
    }
}
