<?php

/* ScrumatorBackendBundle:User_stories:new.html.twig */
class __TwigTemplate_895fda46ed5b1c8567f54c29cd0cdc69593d9b9be073198c7c61c2245550125e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:User_stories:new.html.twig", 1);
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
        $__internal_a30451bda4978f59c77493c8bfabf241f790dde718cbe5721a9b177b84c0e246 = $this->env->getExtension("native_profiler");
        $__internal_a30451bda4978f59c77493c8bfabf241f790dde718cbe5721a9b177b84c0e246->enter($__internal_a30451bda4978f59c77493c8bfabf241f790dde718cbe5721a9b177b84c0e246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:User_stories:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30451bda4978f59c77493c8bfabf241f790dde718cbe5721a9b177b84c0e246->leave($__internal_a30451bda4978f59c77493c8bfabf241f790dde718cbe5721a9b177b84c0e246_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa29d969bc2557b8a2a80423193eb4bf3bd771e9297d9af5ff3868e2d7fae942 = $this->env->getExtension("native_profiler");
        $__internal_fa29d969bc2557b8a2a80423193eb4bf3bd771e9297d9af5ff3868e2d7fae942->enter($__internal_fa29d969bc2557b8a2a80423193eb4bf3bd771e9297d9af5ff3868e2d7fae942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>User_stories creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("user_stories");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_fa29d969bc2557b8a2a80423193eb4bf3bd771e9297d9af5ff3868e2d7fae942->leave($__internal_fa29d969bc2557b8a2a80423193eb4bf3bd771e9297d9af5ff3868e2d7fae942_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:User_stories:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>User_stories creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('user_stories') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
