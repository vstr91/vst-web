<?php

/* VostreCentralBundle:Central:indexCliente.html.twig */
class __TwigTemplate_57804c232b897d511c44c6da186ed35558c8b0c300ae839631103a4898570f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h4>Ol&aacute;, ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nome", array()), "html", null, true);
        echo "! ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "roles", array()), 0, array()), "html", null, true);
        echo "</h4>
            <p>Seja bem vindo &agrave; central do cliente <strong>Vostr&egrave;</strong>!</p>
            <p>Aqui voc&ecirc; pode abrir 
                chamados para suporte em nossos sistemas, sugerir melhorias e ficar por dentro de 
                todas as novidades, atrav&eacute;s de mensagens de nossa equipe.</p>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <h3 class=\"text-center\">Chamados</h3>
            <div class=\"well v-well-central\">
                <table class=\"table table-striped table-hover table-responsive\">
                    <thead class=\"text-center\">
                        <tr>
                            <td>Ticket</td>
                            <td>Assunto</td>
                            <td>Situa&ccedil;&atilde;o</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href=\"#\" class=\"v-link-chamado\">12623</a></td>
                            <td><a href=\"#\" class=\"v-link-chamado\">Chamado 1</a></td>
                            <td><a href=\"#\" class=\"v-link-chamado\">Aberto</a></td>
                        </tr>
                        <tr>
                            <td>41232</td>
                            <td>Chamado 2</td>
                            <td><a href=\"#\">Resolvido</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a class=\"btn btn-primary\" href=\"#\">Novo Chamado</a>
        </div>
        <div class=\"col-md-6\">
            <h3 class=\"text-center\">Avisos</h3>
            <div class=\"well v-well-central\">
                Avisos
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "VostreCentralBundle:Central:indexCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
