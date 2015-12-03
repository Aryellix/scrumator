<?php

/* ScrumatorBackendBundle:Project:show.html.twig */
class __TwigTemplate_68fab59c49e8fda26ef6f1cd2d3ede28b86a633fc4c8513ddea5aacf4a971181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:Project:show.html.twig", 1);
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
        $__internal_efbb32ee235b319715471f34b85ec25d603394cb8d8552cef360886a02d4ced5 = $this->env->getExtension("native_profiler");
        $__internal_efbb32ee235b319715471f34b85ec25d603394cb8d8552cef360886a02d4ced5->enter($__internal_efbb32ee235b319715471f34b85ec25d603394cb8d8552cef360886a02d4ced5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:Project:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efbb32ee235b319715471f34b85ec25d603394cb8d8552cef360886a02d4ced5->leave($__internal_efbb32ee235b319715471f34b85ec25d603394cb8d8552cef360886a02d4ced5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c37d2adba444942eec6c31fef52d12e3b97b9d97128b4ad279cb3ffe2de97959 = $this->env->getExtension("native_profiler");
        $__internal_c37d2adba444942eec6c31fef52d12e3b97b9d97128b4ad279cb3ffe2de97959->enter($__internal_c37d2adba444942eec6c31fef52d12e3b97b9d97128b4ad279cb3ffe2de97959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Project</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ability</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ability", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("project");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_c37d2adba444942eec6c31fef52d12e3b97b9d97128b4ad279cb3ffe2de97959->leave($__internal_c37d2adba444942eec6c31fef52d12e3b97b9d97128b4ad279cb3ffe2de97959_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:Project:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>Project</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ entity.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ability</th>*/
/*                 <td>{{ entity.ability }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('project') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('project_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
