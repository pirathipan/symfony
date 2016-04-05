<?php

/* LeaderBundle:crimzonClover.html.twig */
class __TwigTemplate_9fee0589e93bad1ad84a968ac8c0e89f7d8172c6f98662aa4fb8bd8c712de428 extends Twig_Template
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
        $__internal_29ca22dc7470ea12db0d0e2ba610c4abc1243712b0b141d9cbdd6c1a8a7b009f = $this->env->getExtension("native_profiler");
        $__internal_29ca22dc7470ea12db0d0e2ba610c4abc1243712b0b141d9cbdd6c1a8a7b009f->enter($__internal_29ca22dc7470ea12db0d0e2ba610c4abc1243712b0b141d9cbdd6c1a8a7b009f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LeaderBundle:crimzonClover.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Crimzon Clover</title>
    <link rel=\"stylesheet\" href=\"bundles/framework/css/styles.css\" media=\"all\" />
</head>
<body>
    <ul class=\"menu\">
        <li><a href=\"../deathsmiles\">Deathsmiles</a></li>
        <li><a href=\"../ikaruga\">Ikaruga</a></li>
        <li><a href=\"../mushihimesama\">Mushihimesama</a></li>
    </ul>

    <iframe width=\"420\" height=\"315\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "html", null, true);
        echo "\" frameborder=\"0\" allowfullscreen></iframe>

    <ul>
        <li><a href=\"../crimzonclover/type1\">Type 1</a></li>
        <li><a href=\"../crimzonclover/type3\">Type 3</a></li>
        <li><a href=\"../crimzonclover/typeZ\">Type Z</a></li>
    </ul>
</body>
</html>";
        
        $__internal_29ca22dc7470ea12db0d0e2ba610c4abc1243712b0b141d9cbdd6c1a8a7b009f->leave($__internal_29ca22dc7470ea12db0d0e2ba610c4abc1243712b0b141d9cbdd6c1a8a7b009f_prof);

    }

    public function getTemplateName()
    {
        return "LeaderBundle:crimzonClover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>Crimzon Clover</title>*/
/*     <link rel="stylesheet" href="bundles/framework/css/styles.css" media="all" />*/
/* </head>*/
/* <body>*/
/*     <ul class="menu">*/
/*         <li><a href="../deathsmiles">Deathsmiles</a></li>*/
/*         <li><a href="../ikaruga">Ikaruga</a></li>*/
/*         <li><a href="../mushihimesama">Mushihimesama</a></li>*/
/*     </ul>*/
/* */
/*     <iframe width="420" height="315" src="{{ src }}" frameborder="0" allowfullscreen></iframe>*/
/* */
/*     <ul>*/
/*         <li><a href="../crimzonclover/type1">Type 1</a></li>*/
/*         <li><a href="../crimzonclover/type3">Type 3</a></li>*/
/*         <li><a href="../crimzonclover/typeZ">Type Z</a></li>*/
/*     </ul>*/
/* </body>*/
/* </html>*/
