<?php

/* CircularSiteBundle:Page:cover.html.twig */
class __TwigTemplate_21fc830e6b6a6f3d9855e8dd370b1d765102d59986eef0d81321de5099204c44 extends Twig_Template
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
        <title>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.titulo.base.circular", array(), "messages");
        echo "</title>

        <!-- Bootstrap -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/circular/cover.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        <div class=\"container-fluid\">
            <div class=\"row text-center\">
                <div class=\"col-md-3\">
                    <p class=\"v-bandeiras visible-xs\">
                        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "pt_BR"))), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/bra.png"), "html", null, true);
        echo "\" />
                        </a>
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/usa.png"), "html", null, true);
        echo "\" />
                        </a>
                    </p>
                </div>
                <div class=\"col-md-6\">
                    <img id=\"logo\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/circular/logo-branca.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
                </div>
                <div class=\"col-md-3\">
                    <p class=\"v-bandeiras visible-sm visible-md visible-lg\">
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "pt_BR"))), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/bra.png"), "html", null, true);
        echo "\" />
                        </a>
                        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/usa.png"), "html", null, true);
        echo "\" />
                        </a>
                    </p>
                </div>
            </div>
            <div class=\"row text-center\">
                <div class=\"col-md-12\" id=\"textos\">
                    <h3>";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.mensagem.index.titulo", array(), "messages");
        echo "</h3>
                    <h3>";
        // line 51
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.mensagem.index.descricao", array(), "messages");
        echo "</h3>
                </div>
            </div>
            <div class=\"row text-center\" style=\"padding-top: 10%;\">
                <div class=\"col-md-3\">
                    
                </div>
                <div class=\"col-md-3\">
                    <a href=\"#\" class=\"btn btn-lg btn-default botoes\" data-toggle=\"modal\" 
                       data-target=\"#modal-saiba\">";
        // line 60
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.botoes.index.saiba-mais", array(), "messages");
        echo "</a>
                </div>
                <div class=\"col-md-3\">
                    <a href=\"#\" class=\"btn btn-lg btn-default botoes\" data-toggle=\"modal\" 
                       data-target=\"#modal-parceiro\">";
        // line 64
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.botoes.index.seja-parceiro", array(), "messages");
        echo "</a>
                </div>
                ";
        // line 70
        echo "                ";
        // line 78
        echo "                <div class=\"col-md-3\">
                    
                </div>
            </div>
        </div>
        <div class=\"navbar text-center\" id=\"rodape\">
";
        // line 85
        echo "            <p>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.rodape.descricao.produto", array(), "messages");
        echo " <a href=\"http://vostre.com.br\" target=\"_blank\">
                    <img id=\"logo-vostre\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagens/-logo-branca-20.png"), "html", null, true);
        echo "\" /></a> &copy; 2015</p>
        </div>
        
        <!-- SAIBA -->
        <div class=\"modal fade\" id=\"modal-saiba\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h3>";
        // line 94
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.titulo", array(), "messages");
        echo "</h3>
                    </div>
                    <div class=\"modal-body\">
                        <p>";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.descricao.introducao", array(), "messages");
        echo "</p>
                        <p>";
        // line 98
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.descricao.funcionalidades.introducao", array(), "messages");
        echo ":</p>
                        <ul>
                            <li>";
        // line 100
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.descricao.funcionalidades.localizacao", array(), "messages");
        echo "</li>
                            <li>";
        // line 101
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.descricao.funcionalidades.itinerario", array(), "messages");
        echo "</li>
                            <li>";
        // line 102
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.descricao.funcionalidades.proximo-horario", array(), "messages");
        echo "</li>
                            <li>";
        // line 103
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.descricao.funcionalidades.sem-conexao", array(), "messages");
        echo "</li>
                            <li>";
        // line 104
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.descricao.funcionalidades.realidade-aumentada", array(), "messages");
        echo "</li>
                            <li>";
        // line 105
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.descricao.funcionalidades.busca-itinerario", array(), "messages");
        echo "</li>
                        </ul>
                        <p>";
        // line 107
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.saiba-mais.descricao.experimente", array(), "messages");
        echo "</p>
                        ";
        // line 111
        echo "                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" 
                                data-dismiss=\"modal\">";
        // line 114
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.botoes.fechar", array(), "messages");
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM SAIBA -->
        
        <!-- PARCEIRO -->
        <div class=\"modal fade\" id=\"modal-parceiro\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h3>";
        // line 126
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.seja-parceiro.titulo", array(), "messages");
        echo "</h3>
                    </div>
                    <div class=\"modal-body\">
                        <p>";
        // line 129
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.quero-ajudar.descricao.quer-ajudar", array(), "messages");
        echo ":</p>
                        <br />
                        <h4>";
        // line 131
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.quero-ajudar.descricao.info-sugestoes.titulo", array(), "messages");
        echo "</h4>
                        <p>";
        // line 132
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.quero-ajudar.descricao.info-sugestoes.descricao", array(), "messages");
        echo "</p>
                            <p>";
        // line 133
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.quero-ajudar.descricao.info-sugestoes.contato-email", array(), "messages");
        echo "</p>
                        <p>";
        // line 134
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.quero-ajudar.descricao.info-sugestoes.agradecimento", array(), "messages");
        echo "</p>
                        <br />
                        <h4>";
        // line 136
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.quero-ajudar.descricao.parcerias.titulo", array(), "messages");
        echo "</h4>
                        <p>";
        // line 137
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.modal.quero-ajudar.descricao.parcerias.descricao", array(), "messages");
        echo "</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 140
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.comum.botoes.fechar", array(), "messages");
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM PARCEIRO -->
        
    </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</html>";
    }

    public function getTemplateName()
    {
        return "CircularSiteBundle:Page:cover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 152,  274 => 150,  261 => 140,  255 => 137,  251 => 136,  246 => 134,  242 => 133,  238 => 132,  234 => 131,  229 => 129,  223 => 126,  208 => 114,  203 => 111,  199 => 107,  194 => 105,  190 => 104,  186 => 103,  182 => 102,  178 => 101,  174 => 100,  169 => 98,  165 => 97,  159 => 94,  148 => 86,  143 => 85,  135 => 78,  133 => 70,  128 => 64,  121 => 60,  109 => 51,  105 => 50,  95 => 43,  91 => 42,  86 => 40,  82 => 39,  75 => 35,  67 => 30,  63 => 29,  58 => 27,  54 => 26,  37 => 12,  33 => 11,  27 => 8,  19 => 2,);
    }
}
