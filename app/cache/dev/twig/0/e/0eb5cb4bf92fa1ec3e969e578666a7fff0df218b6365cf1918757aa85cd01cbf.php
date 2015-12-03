<?php

/* ScrumatorBackendBundle:User_stories:index.html.twig */
class __TwigTemplate_94b0e2a17034ad10bf32d729bdc19b05ffd95874c7e4e9ae50c1db0e2b6de00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:User_stories:index.html.twig", 1);
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
        $__internal_e3e4cf941513cbef87d1eb29529c17df29c259834099f31a109037c576765bfc = $this->env->getExtension("native_profiler");
        $__internal_e3e4cf941513cbef87d1eb29529c17df29c259834099f31a109037c576765bfc->enter($__internal_e3e4cf941513cbef87d1eb29529c17df29c259834099f31a109037c576765bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:User_stories:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e4cf941513cbef87d1eb29529c17df29c259834099f31a109037c576765bfc->leave($__internal_e3e4cf941513cbef87d1eb29529c17df29c259834099f31a109037c576765bfc_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c772d2c21a7e5fe0b13805dae722cfc14c05dd84ed8759eaeac359d5125859a3 = $this->env->getExtension("native_profiler");
        $__internal_c772d2c21a7e5fe0b13805dae722cfc14c05dd84ed8759eaeac359d5125859a3->enter($__internal_c772d2c21a7e5fe0b13805dae722cfc14c05dd84ed8759eaeac359d5125859a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>User_stories list</h1>
    <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</h2>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Entantque</th>
                <th>Iwant</th>
                <th>Pour</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_stories_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "enTantQue", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "iWant", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pour", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_stories_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_stories_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("user_stories_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_c772d2c21a7e5fe0b13805dae722cfc14c05dd84ed8759eaeac359d5125859a3->leave($__internal_c772d2c21a7e5fe0b13805dae722cfc14c05dd84ed8759eaeac359d5125859a3_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:User_stories:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  110 => 38,  98 => 32,  92 => 29,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>User_stories list</h1>*/
/*     <h2>{{ project.name }}</h2>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Description</th>*/
/*                 <th>Entantque</th>*/
/*                 <th>Iwant</th>*/
/*                 <th>Pour</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('user_stories_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.description }}</td>*/
/*                 <td>{{ entity.enTantQue }}</td>*/
/*                 <td>{{ entity.iWant }}</td>*/
/*                 <td>{{ entity.pour }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('user_stories_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('user_stories_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_stories_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
