<?php

/* ScrumatorBackendBundle:User:new.html.twig */
class __TwigTemplate_acbed5d5b53e32f3270e6dd3237cfdd9e54d77f9a31b849b2827e51465260eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:User:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d602333db5dc97ef8d41d1ac14afc4c12cac1c47cc97f336074d779fe4f7680f = $this->env->getExtension("native_profiler");
        $__internal_d602333db5dc97ef8d41d1ac14afc4c12cac1c47cc97f336074d779fe4f7680f->enter($__internal_d602333db5dc97ef8d41d1ac14afc4c12cac1c47cc97f336074d779fe4f7680f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d602333db5dc97ef8d41d1ac14afc4c12cac1c47cc97f336074d779fe4f7680f->leave($__internal_d602333db5dc97ef8d41d1ac14afc4c12cac1c47cc97f336074d779fe4f7680f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_12ea54b58f5603c7f471ea7ee33d874fd8bca2084d6a246ff1e52e0a76639cf0 = $this->env->getExtension("native_profiler");
        $__internal_12ea54b58f5603c7f471ea7ee33d874fd8bca2084d6a246ff1e52e0a76639cf0->enter($__internal_12ea54b58f5603c7f471ea7ee33d874fd8bca2084d6a246ff1e52e0a76639cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>coucou</h1>
";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_list");
        echo "\"> Annuler </a>

";
        
        $__internal_12ea54b58f5603c7f471ea7ee33d874fd8bca2084d6a246ff1e52e0a76639cf0->leave($__internal_12ea54b58f5603c7f471ea7ee33d874fd8bca2084d6a246ff1e52e0a76639cf0_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:User:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>coucou</h1>*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* <a href="{{ path('user_list') }}"> Annuler </a>*/
/* */
/* {% endblock %}*/
