<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f37a77de1f342ac7cf91f8838291fd9d72f4f4f5537bf5ed1b266f94845256bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17c6cf9678562da1bcbda5cacd14fcdff57c963279a421c5472d9ab2c0b4bb25 = $this->env->getExtension("native_profiler");
        $__internal_17c6cf9678562da1bcbda5cacd14fcdff57c963279a421c5472d9ab2c0b4bb25->enter($__internal_17c6cf9678562da1bcbda5cacd14fcdff57c963279a421c5472d9ab2c0b4bb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17c6cf9678562da1bcbda5cacd14fcdff57c963279a421c5472d9ab2c0b4bb25->leave($__internal_17c6cf9678562da1bcbda5cacd14fcdff57c963279a421c5472d9ab2c0b4bb25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba2d26c5b3c3bc2f6581b5979428ff83080726067ee62a3dd4808d4e405ed45b = $this->env->getExtension("native_profiler");
        $__internal_ba2d26c5b3c3bc2f6581b5979428ff83080726067ee62a3dd4808d4e405ed45b->enter($__internal_ba2d26c5b3c3bc2f6581b5979428ff83080726067ee62a3dd4808d4e405ed45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba2d26c5b3c3bc2f6581b5979428ff83080726067ee62a3dd4808d4e405ed45b->leave($__internal_ba2d26c5b3c3bc2f6581b5979428ff83080726067ee62a3dd4808d4e405ed45b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2a63a262c74bba9873dbe9c54c559c5b07d7502c43b27c8d16abaaa6e016e60 = $this->env->getExtension("native_profiler");
        $__internal_a2a63a262c74bba9873dbe9c54c559c5b07d7502c43b27c8d16abaaa6e016e60->enter($__internal_a2a63a262c74bba9873dbe9c54c559c5b07d7502c43b27c8d16abaaa6e016e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a2a63a262c74bba9873dbe9c54c559c5b07d7502c43b27c8d16abaaa6e016e60->leave($__internal_a2a63a262c74bba9873dbe9c54c559c5b07d7502c43b27c8d16abaaa6e016e60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_82dcb4095e6b3d2f3b5cd2354322049c639ad097fea132471bffa9d72a80d667 = $this->env->getExtension("native_profiler");
        $__internal_82dcb4095e6b3d2f3b5cd2354322049c639ad097fea132471bffa9d72a80d667->enter($__internal_82dcb4095e6b3d2f3b5cd2354322049c639ad097fea132471bffa9d72a80d667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_82dcb4095e6b3d2f3b5cd2354322049c639ad097fea132471bffa9d72a80d667->leave($__internal_82dcb4095e6b3d2f3b5cd2354322049c639ad097fea132471bffa9d72a80d667_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
