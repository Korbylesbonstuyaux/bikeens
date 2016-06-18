<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4d13c106297045e0f29a4faf40aa9c847b02a7252e691f8e1494c29e5f19d4c5 extends Twig_Template
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
        $__internal_36688fec138da4b02de6bc3fad8d2d90015f6522aff38863917288d88cf1beba = $this->env->getExtension("native_profiler");
        $__internal_36688fec138da4b02de6bc3fad8d2d90015f6522aff38863917288d88cf1beba->enter($__internal_36688fec138da4b02de6bc3fad8d2d90015f6522aff38863917288d88cf1beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36688fec138da4b02de6bc3fad8d2d90015f6522aff38863917288d88cf1beba->leave($__internal_36688fec138da4b02de6bc3fad8d2d90015f6522aff38863917288d88cf1beba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_827b33b95a9dbd694fb55cb0de0f889e3fdee4408f87f19693a6c0a3b102547c = $this->env->getExtension("native_profiler");
        $__internal_827b33b95a9dbd694fb55cb0de0f889e3fdee4408f87f19693a6c0a3b102547c->enter($__internal_827b33b95a9dbd694fb55cb0de0f889e3fdee4408f87f19693a6c0a3b102547c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_827b33b95a9dbd694fb55cb0de0f889e3fdee4408f87f19693a6c0a3b102547c->leave($__internal_827b33b95a9dbd694fb55cb0de0f889e3fdee4408f87f19693a6c0a3b102547c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a9354fcfbb19f51dfb03b28b66fcba510d115c8929e2c840952341c66832e44 = $this->env->getExtension("native_profiler");
        $__internal_7a9354fcfbb19f51dfb03b28b66fcba510d115c8929e2c840952341c66832e44->enter($__internal_7a9354fcfbb19f51dfb03b28b66fcba510d115c8929e2c840952341c66832e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a9354fcfbb19f51dfb03b28b66fcba510d115c8929e2c840952341c66832e44->leave($__internal_7a9354fcfbb19f51dfb03b28b66fcba510d115c8929e2c840952341c66832e44_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_53b3904507444d9fd3fb507ca28c7dcb54b18ace836cdcf3b17942cbef0a4c52 = $this->env->getExtension("native_profiler");
        $__internal_53b3904507444d9fd3fb507ca28c7dcb54b18ace836cdcf3b17942cbef0a4c52->enter($__internal_53b3904507444d9fd3fb507ca28c7dcb54b18ace836cdcf3b17942cbef0a4c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_53b3904507444d9fd3fb507ca28c7dcb54b18ace836cdcf3b17942cbef0a4c52->leave($__internal_53b3904507444d9fd3fb507ca28c7dcb54b18ace836cdcf3b17942cbef0a4c52_prof);

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
