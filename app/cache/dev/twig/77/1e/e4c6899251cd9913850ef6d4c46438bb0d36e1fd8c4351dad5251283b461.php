<?php

/* CircularSiteBundle:Page_old:cover.html.twig */
class __TwigTemplate_771ee4c6899251cd9913850ef6d4c46438bb0d36e1fd8c4351dad5251283b461 extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Vostr&egrave; Circular | Itiner&aacute;rios de &Ocirc;nibus</title>

        <!-- Bootstrap -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/cover.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"site-wrapper\">

            <div class=\"site-wrapper-inner\">

                <div class=\"cover-container\">

                    <div class=\"masthead clearfix\">
                        <div class=\"inner\">
                            <h3 class=\"masthead-brand\">
                                <img id=\"imagem-logo\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/logo-branca.png"), "html", null, true);
        echo "\" />
                            </h3>
                            ";
        // line 38
        echo "                        </div>
                    </div>
                    <div class=\"inner cover\">
";
        // line 42
        echo "                        <div id=\"texto-chamada\">
                            <p class=\"lead\">Vostr&egrave; Circular. 
                                O hor&aacute;rio de seu &ocirc;nibus onde voc&ecirc; estiver.</p>
                            <p class=\"lead\">Gratuito para o passageiro, gratuito para a empresa.</p>
                        </div>
                        <p class=\"lead botoes\">
                            <a href=\"#\" class=\"btn btn-lg btn-default\">Saiba Mais</a>
                            <a href=\"#\" class=\"btn btn-lg btn-default\">Cadastre sua Empresa</a>
                            <a href=\"#\" class=\"btn btn-lg btn-default\">Quero Ajudar</a>
                        </p>
                    </div>

                    <div class=\"mastfoot\">
                        <div class=\"inner\">
                            <p>Um produto <a href=\"http://vostre.com.br\">Vostr&egrave;</a> - 2014</p>
                            ";
        // line 58
        echo "                        </div>
                    </div>

                </div>

            </div>

        </div>
    </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</html>";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Page_old:cover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 71,  96 => 69,  83 => 58,  66 => 42,  61 => 38,  56 => 31,  34 => 12,  30 => 11,  19 => 2,);
    }
}
