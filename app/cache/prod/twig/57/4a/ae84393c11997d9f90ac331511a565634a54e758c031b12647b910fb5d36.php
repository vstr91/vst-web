<?php

/* VostreSiteBundle:Page:contato.html.twig */
class __TwigTemplate_574aae84393c11997d9f90ac331511a565634a54e758c031b12647b910fb5d36 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 48
        echo "        ";
        $this->displayBlock('rodape', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
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
        echo "<div class=\"container-fluid\">
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "resposta-contato"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "    <div class=\"v-resposta-contato\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <h3>";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.pagina.titulo.contato", array(), "messages");
        echo "</h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <p>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.pagina.descricao.contato", array(), "messages");
        echo "</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"well\">
                <form name=\"form-contato\" id=\"form-contato\" action=\"\" method=\"POST\">
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                    <input type=\"submit\" value=\"";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.formulario.submit", array(), "messages");
        echo "\" class=\"btn btn-primary\" />
                </form>
            </div>
        </div>
    </div>
            ";
        // line 46
        echo "</div>
        ";
    }

    // line 48
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('.v-resposta-contato').fadeOut(8000);
        \$('#form-contato').validate({
            rules: {
                'contato[nome]': \"required\",
                'contato[email]':{
                    required: true,
                    email: true
                },
                'contato[titulo]': {
                    required: true
                },
                'contato[mensagem]': {
                    required: true
                }
            },
            messages: {
                'contato[nome]': \"";
        // line 70
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.formulario.validacao.nome", array(), "messages");
        echo "\",
                'contato[email]':{
                    required: \"";
        // line 72
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.formulario.validacao.email.vazio", array(), "messages");
        echo "\",
                    email: \"";
        // line 73
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.formulario.validacao.email.invalido", array(), "messages");
        echo "\"
                },
                'contato[titulo]': {
                    required: \"";
        // line 76
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.formulario.validacao.titulo", array(), "messages");
        echo "\"
                },
                'contato[mensagem]': {
                    required: \"";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.formulario.validacao.mensagem", array(), "messages");
        echo "\"
                }
            }
        });

    });
</script>
        ";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Page:contato.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 79,  181 => 76,  175 => 73,  171 => 72,  166 => 70,  144 => 51,  139 => 50,  136 => 49,  128 => 48,  123 => 46,  115 => 33,  111 => 32,  101 => 25,  93 => 20,  89 => 18,  80 => 15,  77 => 14,  73 => 13,  70 => 12,  67 => 11,  59 => 10,  54 => 49,  51 => 48,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  11 => 1,);
    }
}
