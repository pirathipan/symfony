<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_582338fe93f0e895fd9dd7c6c2c57422baf139fdacf5a40c547aeb48210759f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_806eb2b18b7751eb4d72fa43e9bd3bffdd978e3e8a5f293b3450bccda4cd3e64 = $this->env->getExtension("native_profiler");
        $__internal_806eb2b18b7751eb4d72fa43e9bd3bffdd978e3e8a5f293b3450bccda4cd3e64->enter($__internal_806eb2b18b7751eb4d72fa43e9bd3bffdd978e3e8a5f293b3450bccda4cd3e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_806eb2b18b7751eb4d72fa43e9bd3bffdd978e3e8a5f293b3450bccda4cd3e64->leave($__internal_806eb2b18b7751eb4d72fa43e9bd3bffdd978e3e8a5f293b3450bccda4cd3e64_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ebe2a5c3a81d8211a440cf947906d2f01c91b8f624d2d86c0eee1ba865b91d4 = $this->env->getExtension("native_profiler");
        $__internal_0ebe2a5c3a81d8211a440cf947906d2f01c91b8f624d2d86c0eee1ba865b91d4->enter($__internal_0ebe2a5c3a81d8211a440cf947906d2f01c91b8f624d2d86c0eee1ba865b91d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ebe2a5c3a81d8211a440cf947906d2f01c91b8f624d2d86c0eee1ba865b91d4->leave($__internal_0ebe2a5c3a81d8211a440cf947906d2f01c91b8f624d2d86c0eee1ba865b91d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dca6919778fce838f5b100d9ed9dc03a64557329ae095817fdc97fc46c87d198 = $this->env->getExtension("native_profiler");
        $__internal_dca6919778fce838f5b100d9ed9dc03a64557329ae095817fdc97fc46c87d198->enter($__internal_dca6919778fce838f5b100d9ed9dc03a64557329ae095817fdc97fc46c87d198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dca6919778fce838f5b100d9ed9dc03a64557329ae095817fdc97fc46c87d198->leave($__internal_dca6919778fce838f5b100d9ed9dc03a64557329ae095817fdc97fc46c87d198_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94d1acc369b2fe7042e5c6630c85be485f1af6cb3b49adb6c44137d931aedc38 = $this->env->getExtension("native_profiler");
        $__internal_94d1acc369b2fe7042e5c6630c85be485f1af6cb3b49adb6c44137d931aedc38->enter($__internal_94d1acc369b2fe7042e5c6630c85be485f1af6cb3b49adb6c44137d931aedc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_94d1acc369b2fe7042e5c6630c85be485f1af6cb3b49adb6c44137d931aedc38->leave($__internal_94d1acc369b2fe7042e5c6630c85be485f1af6cb3b49adb6c44137d931aedc38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
