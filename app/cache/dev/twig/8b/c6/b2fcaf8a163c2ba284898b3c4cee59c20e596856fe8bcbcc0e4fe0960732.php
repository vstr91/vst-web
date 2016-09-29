<?php

/* CircularSiteBundle:Admin:Mensagem/indexMensagem.html.twig */
class __TwigTemplate_8bc6b2fcaf8a163c2ba284898b3c4cee59c20e596856fe8bcbcc0e4fe0960732 extends Twig_Template
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
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/trumbowyg.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        // line 10
        echo "        ";
        $this->displayBlock('menu', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('conteudo', $context, $blocks);
        // line 87
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
        // line 88
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 132
        echo "    
";
    }

    // line 10
    public function block_menu($context, array $blocks = array())
    {
        echo " 
            ";
        // line 11
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
        ";
    }

    // line 13
    public function block_conteudo($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4 class=\"text-center\">Gerenciamento de Mensagens</h4>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <form name=\"form-mensagem\" id=\"form-mensagem\" method=\"POST\" 
                  action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("circular_site_admin_mensagens_cadastra", array("id_mensagem" =>  -1)), "html", null, true);
        echo "\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formMensagem"]) ? $context["formMensagem"] : $this->getContext($context, "formMensagem")), 'widget');
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
                        <td>T&iacute;tulo</td>
                        <td>Descri&ccedil;&atilde;o</td>
                        <td>Status</td>
                        <td>A&ccedil;&otilde;es</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensagens"]) ? $context["mensagens"] : $this->getContext($context, "mensagens")));
        foreach ($context['_seq'] as $context["_key"] => $context["mensagem"]) {
            // line 44
            echo "                    <tr>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensagem"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensagem"], "titulo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo $this->getAttribute($context["mensagem"], "descricao", array());
            echo "</td>
                        <td>
                                ";
            // line 49
            if (($this->getAttribute($context["mensagem"], "status", array()) == 0)) {
                // line 50
                echo "                            Ativo
                                ";
            } else {
                // line 52
                echo "                            Inativo
                                ";
            }
            // line 54
            echo "                        </td>
                        <td>
                            <a href=\"#";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensagem"], "id", array()), "html", null, true);
            echo "\" class=\"link-editar\">Editar</a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensagem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODAL EDICAO -->

<div class=\"modal fade\" id=\"modal-edicao\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">Editar Mensagem</h4>
            </div>
            <div class=\"modal-body\" id=\"body-edicao\">

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fechar</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"btn-editar\">Salvar</button>
            </div>
        </div>
    </div>
</div>

        ";
    }

    // line 87
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    // line 88
    public function block_javascript($context, array $blocks = array())
    {
        // line 89
        echo "                ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/trumbowyg.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(document).ready(function() {
        
        \$('.editor').trumbowyg({
            btns: [
                ['viewHTML'],
                ['formatting'],
                'btnGrp-semantic',
                ['superscript', 'subscript'],
                ['link'],
                'btnGrp-justify',
                'btnGrp-lists',
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ],
            removeformatPasted: true
        });
        
        \$('.link-editar').click(function() {

            \$idMensagem = \$(this).attr('href').replace('#', '');

            \$url = '";
        // line 116
        echo $this->env->getExtension('routing')->getPath("circular_site_admin_mensagens_form");
        echo "' + \"/\" + \$idMensagem;

            \$.ajax({
                type: 'GET',
                url: \$url,
                success: function(response) {
                    \$('#body-edicao').html(response);
                    \$('#modal-edicao').modal('show');
                }
            });

            return false;

        });
    });
</script>
        ";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Admin:Mensagem/indexMensagem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 116,  230 => 92,  226 => 91,  222 => 90,  217 => 89,  214 => 88,  206 => 87,  176 => 60,  166 => 56,  162 => 54,  158 => 52,  154 => 50,  152 => 49,  147 => 47,  143 => 46,  139 => 45,  136 => 44,  132 => 43,  110 => 24,  106 => 23,  95 => 14,  92 => 13,  86 => 11,  81 => 10,  76 => 132,  73 => 88,  70 => 87,  67 => 13,  64 => 10,  62 => 9,  59 => 8,  53 => 6,  49 => 5,  44 => 4,  41 => 3,  11 => 2,);
    }
}
