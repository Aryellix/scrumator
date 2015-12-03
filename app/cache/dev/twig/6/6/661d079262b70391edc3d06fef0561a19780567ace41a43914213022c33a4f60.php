<?php

/* ScrumatorBackendBundle:User_stories:edit.html.twig */
class __TwigTemplate_70144161be5438bc5dba6658afd8f1a824e346dd53fad5f4af1e7133f04c10cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:User_stories:edit.html.twig", 1);
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
        $__internal_632700037e403341994156156753e7ca38bfd32ad0f557fd10961326270e4d27 = $this->env->getExtension("native_profiler");
        $__internal_632700037e403341994156156753e7ca38bfd32ad0f557fd10961326270e4d27->enter($__internal_632700037e403341994156156753e7ca38bfd32ad0f557fd10961326270e4d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:User_stories:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_632700037e403341994156156753e7ca38bfd32ad0f557fd10961326270e4d27->leave($__internal_632700037e403341994156156753e7ca38bfd32ad0f557fd10961326270e4d27_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9368c7e0a17cc7fb4f6e7f39bc68514acb51f2889a3dca681b4187f817fc64f6 = $this->env->getExtension("native_profiler");
        $__internal_9368c7e0a17cc7fb4f6e7f39bc68514acb51f2889a3dca681b4187f817fc64f6->enter($__internal_9368c7e0a17cc7fb4f6e7f39bc68514acb51f2889a3dca681b4187f817fc64f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>User_stories edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_9368c7e0a17cc7fb4f6e7f39bc68514acb51f2889a3dca681b4187f817fc64f6->leave($__internal_9368c7e0a17cc7fb4f6e7f39bc68514acb51f2889a3dca681b4187f817fc64f6_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:User_stories:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>User_stories edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('user_stories') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
