<?php

/* ::base.html.twig */
class __TwigTemplate_e36d312d2ae7b76a5a598f53dfaa9686e96f289f289267fc1b1d7de8a0da7eb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 8
        $this->displayBlock('javascript', $context, $blocks);
        // line 15
        echo "    
";
        // line 16
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "    </head>
    <body>
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("site.titulo.base", array(), "messages");
    }

    // line 8
    public function block_javascript($context, array $blocks = array())
    {
        // line 9
        echo "        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
";
        // line 11
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/docs.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 16
    public function block_css($context, array $blocks = array())
    {
        // line 17
        echo "        <!-- Bootstrap -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  91 => 19,  87 => 18,  84 => 17,  81 => 16,  75 => 14,  71 => 13,  65 => 11,  62 => 9,  59 => 8,  53 => 7,  48 => 32,  46 => 30,  42 => 28,  40 => 16,  37 => 15,  35 => 8,  31 => 7,  23 => 1,);
    }
}
