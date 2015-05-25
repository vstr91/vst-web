<?php

/* CircularSiteBundle:Admin/HorarioItinerario:indexHorarioItinerario.html.twig */
class __TwigTemplate_65e2da4e87442e08a533de4fcd015f127b68cba29d795b0cf40fbcb8808dd30e extends Twig_Template
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
            'javascript' => array($this, 'block_javascript'),
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
    public function block_javascript($context, array $blocks = array())
    {
        // line 8
        echo "                ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
                <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
                <script>
                    \$(document).ready(function(){
                        \$('.v-btn-horario').on('click', function (event) {

                            console.log(\$(this).parent().children('.dropdown-menu').children().children().children('input'));

                            if(!\$(this).children('.v-check-horario').is(':checked')){
                                \$(this).parent().toggleClass('open');
                            } else{
                                \$input = \$(this).parent().children('.dropdown-menu').children()
                                        .children().children('input');
                                \$input.attr('checked', false);
                                \$input.parent().removeClass('active');
                            } 

                        });

                        \$('body').on('click', function (e) {

                            if (!\$('.v-btn-horario').is(e.target)
                                    && \$('.dropdown-menu').has(e.target).length === 0
                                    && \$('.open').has(e.target).length === 0
                                    ) {
                                \$('.v-btn-horario').parent().removeClass('open');
                            }

                        });
                    });
                </script>
        ";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "        ";
        // line 43
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 46
        echo "        ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 168
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
        echo "   
";
    }

    // line 43
    public function block_menu($context, array $blocks = array())
    {
        echo " 
            ";
        // line 44
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
        ";
    }

    // line 46
    public function block_conteudo($context, array $blocks = array())
    {
        // line 47
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"text-center\">Gerenciamento de Hor&aacute;rios Itiner&aacute;rios</h4>
        </div>
    </div>
";
        // line 131
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <table class=\"table table-hover table-striped table-responsive text-center\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Partida</td>
                        <td>Destino</td>
                        <td>Status</td>
                        <td>A&ccedil;&otilde;es</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 144
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["itinerarios"]) ? $context["itinerarios"] : $this->getContext($context, "itinerarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["itinerario"]) {
            // line 145
            echo "                        <tr>
                            <td>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["itinerario"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 147
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["itinerario"], "partida", array()), "nome", array()) . " (") . $this->getAttribute($this->getAttribute($this->getAttribute($context["itinerario"], "partida", array()), "local", array()), "nome", array())) . ")"), "html", null, true);
            echo "</td>
                            <td>";
            // line 148
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["itinerario"], "destino", array()), "nome", array()) . " (") . $this->getAttribute($this->getAttribute($this->getAttribute($context["itinerario"], "destino", array()), "local", array()), "nome", array())) . ")"), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 150
            if (($this->getAttribute($context["itinerario"], "status", array()) == 0)) {
                // line 151
                echo "                                Ativo
                                ";
            } else {
                // line 153
                echo "                                Inativo
                                ";
            }
            // line 155
            echo "                            </td>
                            <td>
                                <a href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circular_site_admin_horarios_itinerarios_carrega", array("idItinerario" => $this->getAttribute($context["itinerario"], "id", array()))), "html", null, true);
            echo "\">Editar Hor&aacute;rios</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>
            
        ";
    }

    // line 168
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Admin/HorarioItinerario:indexHorarioItinerario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 168,  201 => 161,  191 => 157,  187 => 155,  183 => 153,  179 => 151,  177 => 150,  172 => 148,  168 => 147,  164 => 146,  161 => 145,  157 => 144,  142 => 131,  134 => 47,  131 => 46,  125 => 44,  120 => 43,  113 => 168,  110 => 46,  107 => 43,  105 => 42,  102 => 41,  67 => 10,  63 => 9,  58 => 8,  55 => 7,  49 => 5,  44 => 4,  41 => 3,  11 => 2,);
    }
}
