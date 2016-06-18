<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c2697ae4ddbc20c0fca4d55671404c38fe70089b09dfdb1be7925d53f90e8c53 extends Twig_Template
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
        $__internal_a3f31b3b153db4a06772ecc838ae2263582603c98ebe88d83040a959d37cc649 = $this->env->getExtension("native_profiler");
        $__internal_a3f31b3b153db4a06772ecc838ae2263582603c98ebe88d83040a959d37cc649->enter($__internal_a3f31b3b153db4a06772ecc838ae2263582603c98ebe88d83040a959d37cc649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3f31b3b153db4a06772ecc838ae2263582603c98ebe88d83040a959d37cc649->leave($__internal_a3f31b3b153db4a06772ecc838ae2263582603c98ebe88d83040a959d37cc649_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c78277378b5979a5eec3a66df6a7eb4904f60dce526734ed8ad7fdc935ce910 = $this->env->getExtension("native_profiler");
        $__internal_0c78277378b5979a5eec3a66df6a7eb4904f60dce526734ed8ad7fdc935ce910->enter($__internal_0c78277378b5979a5eec3a66df6a7eb4904f60dce526734ed8ad7fdc935ce910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0c78277378b5979a5eec3a66df6a7eb4904f60dce526734ed8ad7fdc935ce910->leave($__internal_0c78277378b5979a5eec3a66df6a7eb4904f60dce526734ed8ad7fdc935ce910_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d3d3047d271c3b4412347de2b7aad33e593842399aa7f865e30a9ea81117be54 = $this->env->getExtension("native_profiler");
        $__internal_d3d3047d271c3b4412347de2b7aad33e593842399aa7f865e30a9ea81117be54->enter($__internal_d3d3047d271c3b4412347de2b7aad33e593842399aa7f865e30a9ea81117be54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3d3047d271c3b4412347de2b7aad33e593842399aa7f865e30a9ea81117be54->leave($__internal_d3d3047d271c3b4412347de2b7aad33e593842399aa7f865e30a9ea81117be54_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69eb5d7ba3e524f987714147a4807ecca8f78b61d5c159ad52f9c457b40ff169 = $this->env->getExtension("native_profiler");
        $__internal_69eb5d7ba3e524f987714147a4807ecca8f78b61d5c159ad52f9c457b40ff169->enter($__internal_69eb5d7ba3e524f987714147a4807ecca8f78b61d5c159ad52f9c457b40ff169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_69eb5d7ba3e524f987714147a4807ecca8f78b61d5c159ad52f9c457b40ff169->leave($__internal_69eb5d7ba3e524f987714147a4807ecca8f78b61d5c159ad52f9c457b40ff169_prof);

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
