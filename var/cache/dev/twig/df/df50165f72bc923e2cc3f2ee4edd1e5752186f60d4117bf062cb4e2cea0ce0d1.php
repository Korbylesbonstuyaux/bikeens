<?php

/* ::layout.html.twig */
class __TwigTemplate_1c1634ecaf0a4ebf972c44e4f87048b04e00fad137aaaab81af1cec1401c573b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6fbba3d2160de257169a8440e96e6199795de2bfea578298421b0776277e4a2 = $this->env->getExtension("native_profiler");
        $__internal_d6fbba3d2160de257169a8440e96e6199795de2bfea578298421b0776277e4a2->enter($__internal_d6fbba3d2160de257169a8440e96e6199795de2bfea578298421b0776277e4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    </head>

    <body>
    <header>
        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "    </header>

    <div id=\"content\">
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "    </div>

    <footer>
        ";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "    </footer>

    ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
    </body>
</html>";
        
        $__internal_d6fbba3d2160de257169a8440e96e6199795de2bfea578298421b0776277e4a2->leave($__internal_d6fbba3d2160de257169a8440e96e6199795de2bfea578298421b0776277e4a2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9129b1c745b08db2bc1c651cc6dbfb9072d6b560d25d6f2909873061e163849 = $this->env->getExtension("native_profiler");
        $__internal_a9129b1c745b08db2bc1c651cc6dbfb9072d6b560d25d6f2909873061e163849->enter($__internal_a9129b1c745b08db2bc1c651cc6dbfb9072d6b560d25d6f2909873061e163849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bikeens";
        
        $__internal_a9129b1c745b08db2bc1c651cc6dbfb9072d6b560d25d6f2909873061e163849->leave($__internal_a9129b1c745b08db2bc1c651cc6dbfb9072d6b560d25d6f2909873061e163849_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a365d1fcd5fdf5e52e7d0f52b7ae0abb5cebd013aed85b62ec53b14b70cef93d = $this->env->getExtension("native_profiler");
        $__internal_a365d1fcd5fdf5e52e7d0f52b7ae0abb5cebd013aed85b62ec53b14b70cef93d->enter($__internal_a365d1fcd5fdf5e52e7d0f52b7ae0abb5cebd013aed85b62ec53b14b70cef93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "af7ebf9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af7ebf9_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/af7ebf9_index_1.css");
            // line 14
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "af7ebf9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_af7ebf9") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/af7ebf9.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        ";
        
        $__internal_a365d1fcd5fdf5e52e7d0f52b7ae0abb5cebd013aed85b62ec53b14b70cef93d->leave($__internal_a365d1fcd5fdf5e52e7d0f52b7ae0abb5cebd013aed85b62ec53b14b70cef93d_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_516433f3c04b0cf6f1be158a8f382516103b1546f6ebc3524fdd94a36b32c920 = $this->env->getExtension("native_profiler");
        $__internal_516433f3c04b0cf6f1be158a8f382516103b1546f6ebc3524fdd94a36b32c920->enter($__internal_516433f3c04b0cf6f1be158a8f382516103b1546f6ebc3524fdd94a36b32c920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "        ";
        
        $__internal_516433f3c04b0cf6f1be158a8f382516103b1546f6ebc3524fdd94a36b32c920->leave($__internal_516433f3c04b0cf6f1be158a8f382516103b1546f6ebc3524fdd94a36b32c920_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_f16dae7c1ef939c757ecc40debec33e1a6b5f6a266b4fe613b236e942edf0ca4 = $this->env->getExtension("native_profiler");
        $__internal_f16dae7c1ef939c757ecc40debec33e1a6b5f6a266b4fe613b236e942edf0ca4->enter($__internal_f16dae7c1ef939c757ecc40debec33e1a6b5f6a266b4fe613b236e942edf0ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "        ";
        
        $__internal_f16dae7c1ef939c757ecc40debec33e1a6b5f6a266b4fe613b236e942edf0ca4->leave($__internal_f16dae7c1ef939c757ecc40debec33e1a6b5f6a266b4fe613b236e942edf0ca4_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f832a79798736b043b312f99bec7d1bb5ad430112dba3248437a335bc410191b = $this->env->getExtension("native_profiler");
        $__internal_f832a79798736b043b312f99bec7d1bb5ad430112dba3248437a335bc410191b->enter($__internal_f832a79798736b043b312f99bec7d1bb5ad430112dba3248437a335bc410191b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 33
        echo "        ";
        
        $__internal_f832a79798736b043b312f99bec7d1bb5ad430112dba3248437a335bc410191b->leave($__internal_f832a79798736b043b312f99bec7d1bb5ad430112dba3248437a335bc410191b_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30ba7f1d6ace0518d5013332476364543226c1924b8ca02b9b3300bcfb1eb9ce = $this->env->getExtension("native_profiler");
        $__internal_30ba7f1d6ace0518d5013332476364543226c1924b8ca02b9b3300bcfb1eb9ce->enter($__internal_30ba7f1d6ace0518d5013332476364543226c1924b8ca02b9b3300bcfb1eb9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "        ";
        // line 38
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\"></script>
    ";
        
        $__internal_30ba7f1d6ace0518d5013332476364543226c1924b8ca02b9b3300bcfb1eb9ce->leave($__internal_30ba7f1d6ace0518d5013332476364543226c1924b8ca02b9b3300bcfb1eb9ce_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  175 => 38,  173 => 37,  167 => 36,  160 => 33,  154 => 32,  147 => 28,  141 => 27,  134 => 23,  128 => 22,  120 => 16,  106 => 14,  101 => 13,  99 => 12,  93 => 11,  81 => 9,  72 => 41,  70 => 36,  66 => 34,  64 => 32,  59 => 29,  57 => 27,  52 => 24,  50 => 22,  44 => 18,  42 => 11,  37 => 9,  28 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <title>{% block title %}Bikeens{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {# On charge le CSS de bootstrap depuis le site directement #}*/
/*             {% stylesheets '@BikeensPlatformBundle/Resources/public/css/index.css' filter='cssrewrite' %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         {% endblock %}*/
/*     </head>*/
/* */
/*     <body>*/
/*     <header>*/
/*         {% block header %}*/
/*         {% endblock %}*/
/*     </header>*/
/* */
/*     <div id="content">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <footer>*/
/*         {% block footer %}*/
/*         {% endblock %}*/
/*     </footer>*/
/* */
/*     {% block javascripts %}*/
/*         {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>*/
/*     {% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
