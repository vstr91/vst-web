<?php

/* VostreSiteBundle:Component:email.html.twig */
class __TwigTemplate_21ba094f288b451308ffacfce82ef0dcaa54e0386c5460bc5888c808271efa9d extends Twig_Template
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
        echo "<p>Mensagem enviada pelo usu&aacute;rio <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "nome", array()), "html", null, true);
        echo "</strong> &agrave;s 
    <strong>";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i"), "html", null, true);
        echo "</strong>.</p>

<p><strong>Email para resposta:</strong> ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "email", array()), "html", null, true);
        echo "</p>
<p><strong>Assunto:</strong> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "titulo", array()), "html", null, true);
        echo "</p>
<p><strong>Mensagem:</strong></p>
<p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contato"]) ? $context["contato"] : $this->getContext($context, "contato")), "mensagem", array()), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "VostreSiteBundle:Component:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  33 => 6,  29 => 5,  24 => 3,  19 => 2,);
    }
}
