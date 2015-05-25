<?php

/* CircularSiteBundle:Admin/Empresa:indexEmpresa.html.twig */
class __TwigTemplate_c56afa54e1d64c690bffe0df8ca6a16ea2285fc2583dec6e48cfadc0463123d8 extends Twig_Template
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
        // line 69
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
        // line 70
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 79
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
            <h4 class=\"text-center\">Gerenciamento de Empresas</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form name=\"form-horario\" id=\"form-horario\" method=\"POST\" 
                  action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circular_site_admin_empresas_cadastra", array("id_empresa" =>  -1)), "html", null, true);
        echo "\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formEmpresa"]) ? $context["formEmpresa"] : $this->getContext($context, "formEmpresa")), 'widget');
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
                        <td>Status</td>
                        <td>A&ccedil;&otilde;es</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 42
            echo "                        <tr>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa"], "razaoSocial", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 46
            if (($this->getAttribute($context["empresa"], "status", array()) == 0)) {
                // line 47
                echo "                                Ativo
                                ";
            } else {
                // line 49
                echo "                                Inativo
                                ";
            }
            // line 51
            echo "                            </td>
                            <td>
                                <a href=\"#\">Editar</a> | 
                                <a href=\"#\">";
            // line 54
            if (($this->getAttribute($context["empresa"], "status", array()) == 0)) {
                // line 55
                echo "                                Inativar
                                ";
            } else {
                // line 57
                echo "                                Ativar
                                ";
            }
            // line 58
            echo "</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
            
        ";
    }

    // line 69
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    // line 70
    public function block_javascript($context, array $blocks = array())
    {
        // line 71
        echo "                ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
                <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 73
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
        return "CircularSiteBundle:Admin/Empresa:indexEmpresa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 73,  203 => 72,  198 => 71,  195 => 70,  187 => 69,  177 => 62,  168 => 58,  164 => 57,  160 => 55,  158 => 54,  153 => 51,  149 => 49,  145 => 47,  143 => 46,  138 => 44,  134 => 43,  131 => 42,  127 => 41,  106 => 23,  102 => 22,  91 => 13,  88 => 12,  82 => 10,  77 => 9,  72 => 79,  69 => 70,  66 => 69,  63 => 12,  60 => 9,  58 => 8,  55 => 7,  49 => 5,  44 => 4,  41 => 3,  11 => 2,);
    }
}
