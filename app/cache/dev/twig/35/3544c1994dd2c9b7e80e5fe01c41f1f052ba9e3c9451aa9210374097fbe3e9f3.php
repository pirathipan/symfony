<?php

/* base.html.twig */
class __TwigTemplate_15567fba1afa5d01f50e023fb443a8fb891c1b88d7c79abba4eba3e8cf5f4d14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_992f1ef48eff6a66b72a9c34a9ebf07538b784926ade79075e350d0b43ba4be7 = $this->env->getExtension("native_profiler");
        $__internal_992f1ef48eff6a66b72a9c34a9ebf07538b784926ade79075e350d0b43ba4be7->enter($__internal_992f1ef48eff6a66b72a9c34a9ebf07538b784926ade79075e350d0b43ba4be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_992f1ef48eff6a66b72a9c34a9ebf07538b784926ade79075e350d0b43ba4be7->leave($__internal_992f1ef48eff6a66b72a9c34a9ebf07538b784926ade79075e350d0b43ba4be7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb1a3898a1d37ecdb3357fb9a1485d71358c35a1ef049a6252c2bf6a3a68898b = $this->env->getExtension("native_profiler");
        $__internal_bb1a3898a1d37ecdb3357fb9a1485d71358c35a1ef049a6252c2bf6a3a68898b->enter($__internal_bb1a3898a1d37ecdb3357fb9a1485d71358c35a1ef049a6252c2bf6a3a68898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bb1a3898a1d37ecdb3357fb9a1485d71358c35a1ef049a6252c2bf6a3a68898b->leave($__internal_bb1a3898a1d37ecdb3357fb9a1485d71358c35a1ef049a6252c2bf6a3a68898b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7300ea7a1cff380def7ac63a4320bb76027d894e13e1f140b77879045efcca90 = $this->env->getExtension("native_profiler");
        $__internal_7300ea7a1cff380def7ac63a4320bb76027d894e13e1f140b77879045efcca90->enter($__internal_7300ea7a1cff380def7ac63a4320bb76027d894e13e1f140b77879045efcca90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7300ea7a1cff380def7ac63a4320bb76027d894e13e1f140b77879045efcca90->leave($__internal_7300ea7a1cff380def7ac63a4320bb76027d894e13e1f140b77879045efcca90_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e253880a2c159d5363b89bf94d508d006929a2f581036ec731759c77fe98d521 = $this->env->getExtension("native_profiler");
        $__internal_e253880a2c159d5363b89bf94d508d006929a2f581036ec731759c77fe98d521->enter($__internal_e253880a2c159d5363b89bf94d508d006929a2f581036ec731759c77fe98d521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e253880a2c159d5363b89bf94d508d006929a2f581036ec731759c77fe98d521->leave($__internal_e253880a2c159d5363b89bf94d508d006929a2f581036ec731759c77fe98d521_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6dd06b06a40ffad3dfcab3c2573ba6dd057d690c51a8b47d021244121cfd87dd = $this->env->getExtension("native_profiler");
        $__internal_6dd06b06a40ffad3dfcab3c2573ba6dd057d690c51a8b47d021244121cfd87dd->enter($__internal_6dd06b06a40ffad3dfcab3c2573ba6dd057d690c51a8b47d021244121cfd87dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6dd06b06a40ffad3dfcab3c2573ba6dd057d690c51a8b47d021244121cfd87dd->leave($__internal_6dd06b06a40ffad3dfcab3c2573ba6dd057d690c51a8b47d021244121cfd87dd_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
