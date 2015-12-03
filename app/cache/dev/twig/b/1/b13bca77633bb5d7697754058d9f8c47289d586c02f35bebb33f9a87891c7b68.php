<?php

/* ScrumatorBackendBundle:Home:index.html.twig */
class __TwigTemplate_4def88720691934ec3e280132a2a926454613f9f51fe89d494aa7fef1b4c1042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a6decc61a1bff9b42439194bd54aa30d730ae47f58384c109dc2b80c7a01b42 = $this->env->getExtension("native_profiler");
        $__internal_3a6decc61a1bff9b42439194bd54aa30d730ae47f58384c109dc2b80c7a01b42->enter($__internal_3a6decc61a1bff9b42439194bd54aa30d730ae47f58384c109dc2b80c7a01b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a6decc61a1bff9b42439194bd54aa30d730ae47f58384c109dc2b80c7a01b42->leave($__internal_3a6decc61a1bff9b42439194bd54aa30d730ae47f58384c109dc2b80c7a01b42_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f5ba8eaf68cbf8b24504c3e8e719e6e767533796972c18a7ce8af0fb475436c = $this->env->getExtension("native_profiler");
        $__internal_8f5ba8eaf68cbf8b24504c3e8e719e6e767533796972c18a7ce8af0fb475436c->enter($__internal_8f5ba8eaf68cbf8b24504c3e8e719e6e767533796972c18a7ce8af0fb475436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ScrumatorBackendBundle:Home:index";
        
        $__internal_8f5ba8eaf68cbf8b24504c3e8e719e6e767533796972c18a7ce8af0fb475436c->leave($__internal_8f5ba8eaf68cbf8b24504c3e8e719e6e767533796972c18a7ce8af0fb475436c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_fa46e42e65af9a4fc80462e6d8eafa31a131fcf97475b1d1b2723f1bd86163cc = $this->env->getExtension("native_profiler");
        $__internal_fa46e42e65af9a4fc80462e6d8eafa31a131fcf97475b1d1b2723f1bd86163cc->enter($__internal_fa46e42e65af9a4fc80462e6d8eafa31a131fcf97475b1d1b2723f1bd86163cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Welcome to Scrumator !</h1>

 <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Ability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ability", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_choose", array("project_id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">choose</a>
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
        echo "        
       
        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("project_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
                <p> <button id=\"bt\">Appel Ajax</button> </p>
                <div id=\"test\"></div>

";
        
        $__internal_fa46e42e65af9a4fc80462e6d8eafa31a131fcf97475b1d1b2723f1bd86163cc->leave($__internal_fa46e42e65af9a4fc80462e6d8eafa31a131fcf97475b1d1b2723f1bd86163cc_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 45,  115 => 38,  103 => 32,  97 => 29,  91 => 26,  84 => 22,  80 => 21,  74 => 20,  71 => 19,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ScrumatorBackendBundle:Home:index{% endblock %}*/
/* */
/* {% block content %}*/
/* <h1>Welcome to Scrumator !</h1>*/
/* */
/*  <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Ability</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('project_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.name }}</td>*/
/*                 <td>{{ entity.ability }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('project_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('project_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('project_choose', { 'project_id': entity.id }) }}">choose</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         */
/*        */
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('project_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*                 <p> <button id="bt">Appel Ajax</button> </p>*/
/*                 <div id="test"></div>*/
/* */
/* {% endblock %}*/
/* */
