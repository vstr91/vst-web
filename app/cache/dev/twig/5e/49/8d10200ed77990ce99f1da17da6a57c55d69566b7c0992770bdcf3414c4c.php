<?php

/* VostreCentralBundle:Admin/Bairro:indexBairro.html.twig */
class __TwigTemplate_5e498d10200ed77990ce99f1da17da6a57c55d69566b7c0992770bdcf3414c4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("VostreCentralBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "                ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 71
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
        // line 72
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 81
        echo "    
";
    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        echo " 
            ";
        // line 10
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
        ";
    }

    // line 12
    public function block_conteudo($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"text-center\">Gerenciamento de Bairros</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form name=\"form-bairro\" id=\"form-bairro\" method=\"POST\" 
                  action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_site_admin_bairros_cadastra", array("id_bairro" =>  -1)), "html", null, true);
        echo "\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formBairro"]) ? $context["formBairro"] : $this->getContext($context, "formBairro")), 'widget');
        echo "
                <input type=\"submit\" value=\"Cadastrar\" class=\"btn btn-primary\" />
            </form>
            
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover table-striped table-responsive text-center\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Local</td>
                        <td>Status</td>
                        <td>A&ccedil;&otilde;es</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bairros"]) ? $context["bairros"] : $this->getContext($context, "bairros")));
        foreach ($context['_seq'] as $context["_key"] => $context["bairro"]) {
            // line 43
            echo "                        <tr>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["bairro"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["bairro"], "nome", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bairro"], "local", array()), "nome", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 48
            if (($this->getAttribute($context["bairro"], "status", array()) == 0)) {
                // line 49
                echo "                                Ativo
                                ";
            } else {
                // line 51
                echo "                                Inativo
                                ";
            }
            // line 53
            echo "                            </td>
                            <td>
                                <a href=\"#\">Editar</a> | 
                                <a href=\"#\">";
            // line 56
            if (($this->getAttribute($context["bairro"], "status", array()) == 0)) {
                // line 57
                echo "                                Inativar
                                ";
            } else {
                // line 59
                echo "                                Ativar
                                ";
            }
            // line 60
            echo "</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bairro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
            
        ";
    }

    // line 71
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    // line 72
    public function block_javascript($context, array $blocks = array())
    {
        // line 73
        echo "                ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
                <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
                <script>
                    \$(document).ready(function(){
                        
                    });
                </script>
        ";
    }

    public function getTemplateName()
    {
        return "VostreCentralBundle:Admin/Bairro:indexBairro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 75,  208 => 74,  203 => 73,  200 => 72,  192 => 71,  182 => 64,  173 => 60,  169 => 59,  165 => 57,  163 => 56,  158 => 53,  154 => 51,  150 => 49,  148 => 48,  143 => 46,  139 => 45,  135 => 44,  132 => 43,  128 => 42,  106 => 23,  102 => 22,  91 => 13,  88 => 12,  82 => 10,  77 => 9,  72 => 81,  69 => 72,  66 => 71,  63 => 12,  60 => 9,  58 => 8,  55 => 7,  49 => 5,  44 => 4,  41 => 3,  11 => 2,);
    }
}
