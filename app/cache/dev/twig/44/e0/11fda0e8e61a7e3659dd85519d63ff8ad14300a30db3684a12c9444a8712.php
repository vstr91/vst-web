<?php

/* VostreCentralBundle:Central:index.html.twig */
class __TwigTemplate_44e011fda0e8e61a7e3659dd85519d63ff8ad14300a30db3684a12c9444a8712 extends Twig_Template
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
            'javascript' => array($this, 'block_javascript'),
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
        // line 38
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 60
        echo "    
";
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

    // line 38
    public function block_javascript($context, array $blocks = array())
    {
        // line 39
        echo "                ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
                <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
                <script>
                    \$(document).ready(function(){
                        
                        ";
        // line 48
        echo "                          
                          \$('#vostre_centralbundle_recado_dataInicial, #vostre_centralbundle_recado_dataFinal')
                                  .datetimepicker({
                              format: 'DD/MM/YYYY HH:mm'
                          });
                          
                          \$('#btn-enviar-recado').click(function(){
                              \$('#form-cadastra-recado').submit();
                          });
                          
                    });
                </script>
        ";
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
        return array (  144 => 48,  137 => 41,  133 => 40,  128 => 39,  125 => 38,  117 => 37,  113 => 36,  110 => 35,  107 => 34,  104 => 33,  101 => 32,  99 => 31,  96 => 30,  94 => 29,  91 => 28,  88 => 27,  82 => 25,  77 => 24,  72 => 60,  69 => 38,  66 => 37,  63 => 27,  60 => 24,  58 => 23,  55 => 22,  49 => 20,  44 => 19,  41 => 18,  11 => 1,);
    }
}
