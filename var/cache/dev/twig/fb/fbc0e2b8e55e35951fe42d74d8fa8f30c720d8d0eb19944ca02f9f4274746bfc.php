<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d157ad360a90ae88ac233c9b239366f5508af5dc35c1c7f8ebad82341e24f3d5 extends Twig_Template
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
        $__internal_b0c2cb61414a723736d91a6cbeec9e361aabb8090e33572fa548cce4cedef349 = $this->env->getExtension("native_profiler");
        $__internal_b0c2cb61414a723736d91a6cbeec9e361aabb8090e33572fa548cce4cedef349->enter($__internal_b0c2cb61414a723736d91a6cbeec9e361aabb8090e33572fa548cce4cedef349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b0c2cb61414a723736d91a6cbeec9e361aabb8090e33572fa548cce4cedef349->leave($__internal_b0c2cb61414a723736d91a6cbeec9e361aabb8090e33572fa548cce4cedef349_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
