<?php

/* ScrumatorBackendBundle:User:edit.html.twig */
class __TwigTemplate_68e68f93ed66a0c0a34c4719f0291c655e2edde2d638950e70783f899f009fd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:User:edit.html.twig", 1);
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
        $__internal_ab2d9ebd47e24a429e2cbd6918c9c3c0d39b08b9bfa4e67768c94bae66b88bd9 = $this->env->getExtension("native_profiler");
        $__internal_ab2d9ebd47e24a429e2cbd6918c9c3c0d39b08b9bfa4e67768c94bae66b88bd9->enter($__internal_ab2d9ebd47e24a429e2cbd6918c9c3c0d39b08b9bfa4e67768c94bae66b88bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab2d9ebd47e24a429e2cbd6918c9c3c0d39b08b9bfa4e67768c94bae66b88bd9->leave($__internal_ab2d9ebd47e24a429e2cbd6918c9c3c0d39b08b9bfa4e67768c94bae66b88bd9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_988069ec86f8e54e290c57a53f4c2e6f33b9194e4d39b8b16b2adfefcd93cf69 = $this->env->getExtension("native_profiler");
        $__internal_988069ec86f8e54e290c57a53f4c2e6f33b9194e4d39b8b16b2adfefcd93cf69->enter($__internal_988069ec86f8e54e290c57a53f4c2e6f33b9194e4d39b8b16b2adfefcd93cf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Modifier</h1>
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
        
        $__internal_988069ec86f8e54e290c57a53f4c2e6f33b9194e4d39b8b16b2adfefcd93cf69->leave($__internal_988069ec86f8e54e290c57a53f4c2e6f33b9194e4d39b8b16b2adfefcd93cf69_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:User:edit.html.twig";
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
/*     <h1>Modifier</h1>*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}*/
/* */
/* <a href="{{ path('user_list') }}"> Annuler </a>*/
/* */
/* {% endblock %}*/
