<?php

/* VostreCentralBundle:Admin/Local:indexLocal.html.twig */
class __TwigTemplate_5ef5912133e4c8fdbba6e7e4e5e3310c99d4bc0f363600a13095f89834ae6a22 extends Twig_Template
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
        // line 75
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
        // line 76
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 129
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
            <h4 class=\"text-center\">Gerenciamento de Locais</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form name=\"form-local\" id=\"form-local\" method=\"POST\" 
                  action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vostre_site_admin_locais_cadastra", array("id_local" =>  -1)), "html", null, true);
        echo "\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLocal"]) ? $context["formLocal"] : $this->getContext($context, "formLocal")), 'widget');
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
                        <td>Tipo</td>
                        <td>Cidade</td>
                        <td>Estado</td>
                        <td>Status</td>
                        <td>A&ccedil;&otilde;es</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locais"]) ? $context["locais"] : $this->getContext($context, "locais")));
        foreach ($context['_seq'] as $context["_key"] => $context["local"]) {
            // line 45
            echo "                    <tr>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "nome", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["local"], "tipo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "cidade", array()), "nome", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["local"], "estado", array()), "nome", array()), "html", null, true);
            echo "</td>
                        <td>
                                ";
            // line 52
            if (($this->getAttribute($context["local"], "status", array()) == 0)) {
                // line 53
                echo "                            Ativo
                                ";
            } else {
                // line 55
                echo "                            Inativo
                                ";
            }
            // line 57
            echo "                        </td>
                        <td>
                            <a href=\"#\">Editar</a> | 
                            <a href=\"#\">";
            // line 60
            if (($this->getAttribute($context["local"], "status", array()) == 0)) {
                // line 61
                echo "                                Inativar
                                ";
            } else {
                // line 63
                echo "                                Ativar
                                ";
            }
            // line 64
            echo "</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['local'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>

        ";
    }

    // line 75
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    // line 76
    public function block_javascript($context, array $blocks = array())
    {
        // line 77
        echo "                ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function() {
        var \$estado = \$('#vostre_localbundle_local_estado');
        var \$tipoLocal = \$('#vostre_localbundle_local_tipo');

        \$('#vostre_localbundle_local_cidade').attr('disabled', 'disabled');
        \$('#vostre_localbundle_local_cidade').removeAttr('required');

        \$tipoLocal.change(function() {

            console.log(\$tipoLocal);

            if (\$tipoLocal.val() != '0') {
                \$('#vostre_localbundle_local_cidade').removeAttr('disabled');
                \$('#vostre_localbundle_local_cidade').attr('required', 'required');
            } else {
                \$('#vostre_localbundle_local_cidade').attr('disabled', 'disabled');
                \$('#vostre_localbundle_local_cidade').removeAttr('required');
                \$('#vostre_localbundle_local_cidade').val(-1);
            }

        });


        \$estado.change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$estado.attr('name')] = \$estado.val();
            \$.ajax({
                url: '";
        // line 109
        echo $this->env->getExtension('routing')->getPath("vostre_site_admin_locais");
        echo "',
                type: \$form.attr('method'),
                data: data,
                success: function(html) {
                    console.log(html);
                    \$('#vostre_localbundle_local_cidade').replaceWith(
                            \$(html).find('#vostre_localbundle_local_cidade')
                            );
                    if (\$tipoLocal.val() != '0') {
                        \$('#vostre_localbundle_local_cidade').removeAttr('disabled');
                        \$('#vostre_localbundle_local_cidade').attr('required', 'required');
                    } else {
                        \$('#vostre_localbundle_local_cidade').attr('disabled', 'disabled');
                        \$('#vostre_localbundle_local_cidade').removeAttr('required');
                    }
                }
            });
        });
    });
</script>
        ";
    }

    public function getTemplateName()
    {
        return "VostreCentralBundle:Admin/Local:indexLocal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 109,  222 => 79,  218 => 78,  213 => 77,  210 => 76,  202 => 75,  192 => 68,  183 => 64,  179 => 63,  175 => 61,  173 => 60,  168 => 57,  164 => 55,  160 => 53,  158 => 52,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  134 => 45,  130 => 44,  106 => 23,  102 => 22,  91 => 13,  88 => 12,  82 => 10,  77 => 9,  72 => 129,  69 => 76,  66 => 75,  63 => 12,  60 => 9,  58 => 8,  55 => 7,  49 => 5,  44 => 4,  41 => 3,  11 => 2,);
    }
}
