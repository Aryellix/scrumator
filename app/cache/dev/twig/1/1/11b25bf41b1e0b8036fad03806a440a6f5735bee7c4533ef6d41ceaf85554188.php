<?php

/* ScrumatorBackendBundle:User_stories:show.html.twig */
class __TwigTemplate_77d84bc93f68730b663df8ee0ac5ae77543d2333efe00943bef2774fae6a56cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:User_stories:show.html.twig", 1);
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
        $__internal_8e83ce8e42dee904669fc5925468efffa8338c4e9b6657e3a29b1376ee4bc6b3 = $this->env->getExtension("native_profiler");
        $__internal_8e83ce8e42dee904669fc5925468efffa8338c4e9b6657e3a29b1376ee4bc6b3->enter($__internal_8e83ce8e42dee904669fc5925468efffa8338c4e9b6657e3a29b1376ee4bc6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:User_stories:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e83ce8e42dee904669fc5925468efffa8338c4e9b6657e3a29b1376ee4bc6b3->leave($__internal_8e83ce8e42dee904669fc5925468efffa8338c4e9b6657e3a29b1376ee4bc6b3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f20dab6e74e73190cdb4306d30032d13889bb97e1fae7a2a938fbc286df94b9c = $this->env->getExtension("native_profiler");
        $__internal_f20dab6e74e73190cdb4306d30032d13889bb97e1fae7a2a938fbc286df94b9c->enter($__internal_f20dab6e74e73190cdb4306d30032d13889bb97e1fae7a2a938fbc286df94b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>User_stories</h1>

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
                <th>Description</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Entantque</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enTantQue", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iwant</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iWant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pour</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pour", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("user_stories");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_stories_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_f20dab6e74e73190cdb4306d30032d13889bb97e1fae7a2a938fbc286df94b9c->leave($__internal_f20dab6e74e73190cdb4306d30032d13889bb97e1fae7a2a938fbc286df94b9c_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:User_stories:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 42,  94 => 38,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>User_stories</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ entity.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Entantque</th>*/
/*                 <td>{{ entity.enTantQue }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Iwant</th>*/
/*                 <td>{{ entity.iWant }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Pour</th>*/
/*                 <td>{{ entity.pour }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('user_stories') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('user_stories_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
