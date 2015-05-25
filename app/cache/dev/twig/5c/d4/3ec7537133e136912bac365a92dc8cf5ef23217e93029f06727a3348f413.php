<?php

/* VostreCentralBundle:Admin/Estado:indexEstado.html.twig */
class __TwigTemplate_5cd43ec7537133e136912bac365a92dc8cf5ef23217e93029f06727a3348f413 extends Twig_Template
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
        // line 73
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
        // line 74
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 83
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
            <h4 class=\"text-center\">Gerenciamento de Estados</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form name=\"form-estado\" id=\"form-estado\" method=\"POST\" 
                  action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_site_admin_estados_cadastra", array("id_estado" =>  -1)), "html", null, true);
        echo "\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEstado"]) ? $context["formEstado"] : $this->getContext($context, "formEstado")), 'widget');
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
                        <td>Sigla</td>
                        <td>Pa&iacute;s</td>
                        <td>Status</td>
                        <td>A&ccedil;&otilde;es</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estados"]) ? $context["estados"] : $this->getContext($context, "estados")));
        foreach ($context['_seq'] as $context["_key"] => $context["estado"]) {
            // line 44
            echo "                        <tr>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "nome", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["estado"], "sigla", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["estado"], "pais", array()), "nome", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 50
            if (($this->getAttribute($context["estado"], "status", array()) == 0)) {
                // line 51
                echo "                                Ativo
                                ";
            } else {
                // line 53
                echo "                                Inativo
                                ";
            }
            // line 55
            echo "                            </td>
                            <td>
                                <a href=\"#\">Editar</a> | 
                                <a href=\"#\">";
            // line 58
            if (($this->getAttribute($context["estado"], "status", array()) == 0)) {
                // line 59
                echo "                                Inativar
                                ";
            } else {
                // line 61
                echo "                                Ativar
                                ";
            }
            // line 62
            echo "</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
            
        ";
    }

    // line 73
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    // line 74
    public function block_javascript($context, array $blocks = array())
    {
        // line 75
        echo "                ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
                <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 77
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
        return "VostreCentralBundle:Admin/Estado:indexEstado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 77,  213 => 76,  208 => 75,  205 => 74,  197 => 73,  187 => 66,  178 => 62,  174 => 61,  170 => 59,  168 => 58,  163 => 55,  159 => 53,  155 => 51,  153 => 50,  148 => 48,  144 => 47,  140 => 46,  136 => 45,  133 => 44,  129 => 43,  106 => 23,  102 => 22,  91 => 13,  88 => 12,  82 => 10,  77 => 9,  72 => 83,  69 => 74,  66 => 73,  63 => 12,  60 => 9,  58 => 8,  55 => 7,  49 => 5,  44 => 4,  41 => 3,  11 => 2,);
    }
}
