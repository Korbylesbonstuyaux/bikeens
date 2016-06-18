<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e846c41a4fc3fc78d9f40aa73f8e52682b9eb639684d12d28a10e3888018208c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6f607ad4f2fec8c58ed09af12abc73b61346d5b1f18098f6c4857f2c4974d657 = $this->env->getExtension("native_profiler");
        $__internal_6f607ad4f2fec8c58ed09af12abc73b61346d5b1f18098f6c4857f2c4974d657->enter($__internal_6f607ad4f2fec8c58ed09af12abc73b61346d5b1f18098f6c4857f2c4974d657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f607ad4f2fec8c58ed09af12abc73b61346d5b1f18098f6c4857f2c4974d657->leave($__internal_6f607ad4f2fec8c58ed09af12abc73b61346d5b1f18098f6c4857f2c4974d657_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81e24e3ba864a1a948ea81c67a1a106519c3e44cf9d5079cd96eb23a4fba69ec = $this->env->getExtension("native_profiler");
        $__internal_81e24e3ba864a1a948ea81c67a1a106519c3e44cf9d5079cd96eb23a4fba69ec->enter($__internal_81e24e3ba864a1a948ea81c67a1a106519c3e44cf9d5079cd96eb23a4fba69ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_81e24e3ba864a1a948ea81c67a1a106519c3e44cf9d5079cd96eb23a4fba69ec->leave($__internal_81e24e3ba864a1a948ea81c67a1a106519c3e44cf9d5079cd96eb23a4fba69ec_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5019072a886283206e6d47d92e18e4013491f2e4a49e0c6dee7050e9dec33204 = $this->env->getExtension("native_profiler");
        $__internal_5019072a886283206e6d47d92e18e4013491f2e4a49e0c6dee7050e9dec33204->enter($__internal_5019072a886283206e6d47d92e18e4013491f2e4a49e0c6dee7050e9dec33204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5019072a886283206e6d47d92e18e4013491f2e4a49e0c6dee7050e9dec33204->leave($__internal_5019072a886283206e6d47d92e18e4013491f2e4a49e0c6dee7050e9dec33204_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa19d90e5d4b33832e27cd6165fe9e331da61d33feac5dbf26d14a02f9ee7ead = $this->env->getExtension("native_profiler");
        $__internal_aa19d90e5d4b33832e27cd6165fe9e331da61d33feac5dbf26d14a02f9ee7ead->enter($__internal_aa19d90e5d4b33832e27cd6165fe9e331da61d33feac5dbf26d14a02f9ee7ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_aa19d90e5d4b33832e27cd6165fe9e331da61d33feac5dbf26d14a02f9ee7ead->leave($__internal_aa19d90e5d4b33832e27cd6165fe9e331da61d33feac5dbf26d14a02f9ee7ead_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
