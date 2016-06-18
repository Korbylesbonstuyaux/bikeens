<?php

/* BikeensPlatformBundle::layout.html.twig */
class __TwigTemplate_92f4891a8797b53a28a96c04915ed1d490c0655ee8688b513825ffa0c7093c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "BikeensPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bikeensplatform_body' => array($this, 'block_bikeensplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2547dc7313ab3e43ec1cd3e9438ff5b0e57586baffad19ad4031a0d6dc20f0a5 = $this->env->getExtension("native_profiler");
        $__internal_2547dc7313ab3e43ec1cd3e9438ff5b0e57586baffad19ad4031a0d6dc20f0a5->enter($__internal_2547dc7313ab3e43ec1cd3e9438ff5b0e57586baffad19ad4031a0d6dc20f0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BikeensPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2547dc7313ab3e43ec1cd3e9438ff5b0e57586baffad19ad4031a0d6dc20f0a5->leave($__internal_2547dc7313ab3e43ec1cd3e9438ff5b0e57586baffad19ad4031a0d6dc20f0a5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9f808f9c8d2b716de67098ad55b3ce677cc5131c0d28afe944474141c29410d = $this->env->getExtension("native_profiler");
        $__internal_e9f808f9c8d2b716de67098ad55b3ce677cc5131c0d28afe944474141c29410d->enter($__internal_e9f808f9c8d2b716de67098ad55b3ce677cc5131c0d28afe944474141c29410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Comment cela fonctionne ? - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e9f808f9c8d2b716de67098ad55b3ce677cc5131c0d28afe944474141c29410d->leave($__internal_e9f808f9c8d2b716de67098ad55b3ce677cc5131c0d28afe944474141c29410d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4533d5c4c429ec18983cbb292c5d8eeb72741a5b23948b86cad0b42fb9ddc2d2 = $this->env->getExtension("native_profiler");
        $__internal_4533d5c4c429ec18983cbb292c5d8eeb72741a5b23948b86cad0b42fb9ddc2d2->enter($__internal_4533d5c4c429ec18983cbb292c5d8eeb72741a5b23948b86cad0b42fb9ddc2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <div class=\"container\">
        <h1>La location de vélos sur Bikeens, c’est très simple !</h1>
    </div>


    ";
        // line 18
        echo "    ";
        $this->displayBlock('bikeensplatform_body', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_4533d5c4c429ec18983cbb292c5d8eeb72741a5b23948b86cad0b42fb9ddc2d2->leave($__internal_4533d5c4c429ec18983cbb292c5d8eeb72741a5b23948b86cad0b42fb9ddc2d2_prof);

    }

    // line 18
    public function block_bikeensplatform_body($context, array $blocks = array())
    {
        $__internal_bbea1f43991245add82128f4683e82a33ff45e6f63126d4d584c84b4f0fabf6c = $this->env->getExtension("native_profiler");
        $__internal_bbea1f43991245add82128f4683e82a33ff45e6f63126d4d584c84b4f0fabf6c->enter($__internal_bbea1f43991245add82128f4683e82a33ff45e6f63126d4d584c84b4f0fabf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bikeensplatform_body"));

        // line 19
        echo "    ";
        
        $__internal_bbea1f43991245add82128f4683e82a33ff45e6f63126d4d584c84b4f0fabf6c->leave($__internal_bbea1f43991245add82128f4683e82a33ff45e6f63126d4d584c84b4f0fabf6c_prof);

    }

    public function getTemplateName()
    {
        return "BikeensPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  79 => 18,  71 => 20,  68 => 18,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/Bikeens/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Comment cela fonctionne ? - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <div class="container">*/
/*         <h1>La location de vélos sur Bikeens, c’est très simple !</h1>*/
/*     </div>*/
/* */
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block bikeensplatform_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
