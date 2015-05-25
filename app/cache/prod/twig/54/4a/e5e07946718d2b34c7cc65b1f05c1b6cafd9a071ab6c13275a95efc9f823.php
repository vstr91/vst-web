<?php

/* VostreSiteBundle:Page:central.html.twig */
class __TwigTemplate_544ae5e07946718d2b34c7cc65b1f05c1b6cafd9a071ab6c13275a95efc9f823 extends Twig_Template
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
        // line 52
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
                    <h3>Central do Cliente</h3>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <p>Seja bem vindo &agrave; Central do Cliente! Aqui voc&ecirc; pode verificar o 
                        status de seus produtos contratados, abrir chamados de suporte ou desenvolvimento, 
                        al&eacute;m de poder atualizar seus dados cadastrais.</p>
                    <br />
                    <h4>Para acessar sua p&aacute;gina, por favor informe os dados abaixo:</h4>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"well\">
                        <form name=\"form-central-cliente\" id=\"form-central-cliente\" 
                              action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                            <div class=\"form-group\">
                                <label for=\"email\">Email</label>
                                <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" />
                            </div>
                            <div class=\"form-group\">
                                <label for=\"senha\">Senha</label>
                                <input type=\"password\" name=\"_password\" id=\"senha\" class=\"form-control\" />
                                <input type=\"hidden\" name=\"_csrf_token\" 
                                       value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_csrf_provider"]) ? $context["fos_csrf_provider"] : null), "generateCsrfToken", array(0 => "authenticate"), "method"), "html", null, true);
        echo "\" />
                            </div>
                            <br />
                            <input type=\"submit\" value=\"Entrar\" class=\" btn btn-primary form-control\" />
                        </form>
                    </div>
                    <p><a href=\"#\">Esqueci minha senha</a></p>
                    <p><a href=\"#\">Ainda N&atilde;o tenho senha</a></p>
                </div>
            </div>
        </div>
        ";
    }

    // line 52
    public function block_rodape($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("rodape", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Page:central.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 52,  99 => 40,  87 => 31,  66 => 12,  63 => 11,  55 => 10,  50 => 52,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  11 => 1,);
    }
}
