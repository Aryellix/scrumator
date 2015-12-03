<?php

/* ScrumatorBackendBundle:User:index.html.twig */
class __TwigTemplate_2049c3efc4f428ed1923d1352c50d5eb05514de431716d665c600769f18b9f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:User:index.html.twig", 1);
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
        $__internal_915ac6bbb901e904436ae0c110ae4c74600b39663f2026f5acaaba6ca22ab745 = $this->env->getExtension("native_profiler");
        $__internal_915ac6bbb901e904436ae0c110ae4c74600b39663f2026f5acaaba6ca22ab745->enter($__internal_915ac6bbb901e904436ae0c110ae4c74600b39663f2026f5acaaba6ca22ab745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915ac6bbb901e904436ae0c110ae4c74600b39663f2026f5acaaba6ca22ab745->leave($__internal_915ac6bbb901e904436ae0c110ae4c74600b39663f2026f5acaaba6ca22ab745_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e87aa858f3f7f7217514274408540322d951e5517c81ed6c90277484d35fecc = $this->env->getExtension("native_profiler");
        $__internal_4e87aa858f3f7f7217514274408540322d951e5517c81ed6c90277484d35fecc->enter($__internal_4e87aa858f3f7f7217514274408540322d951e5517c81ed6c90277484d35fecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ScrumatorBackendBundle:User:index";
        
        $__internal_4e87aa858f3f7f7217514274408540322d951e5517c81ed6c90277484d35fecc->leave($__internal_4e87aa858f3f7f7217514274408540322d951e5517c81ed6c90277484d35fecc_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d75b9a2edc3ed9e9fba02a76c2b196434807a63f3f22ac5e644c8fe80b35a57f = $this->env->getExtension("native_profiler");
        $__internal_d75b9a2edc3ed9e9fba02a76c2b196434807a63f3f22ac5e644c8fe80b35a57f->enter($__internal_d75b9a2edc3ed9e9fba02a76c2b196434807a63f3f22ac5e644c8fe80b35a57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Utilisateurs</h1>

<table class=\"records_list\">
        <thead>
            <tr>
                <th>Nom</th>  
                <th></th>  
                <th>Ability</th>  
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
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("user_id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                ";
            // line 22
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 23
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("switch_user", array("user_id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">enable</a></td>
                ";
            }
            // line 25
            echo "                ";
            if (($this->getAttribute($context["entity"], "enabled", array()) == "1")) {
                // line 26
                echo "                <td> Able</td>
                ";
            } else {
                // line 28
                echo "                <td> Enable</td>
                ";
            }
            // line 30
            echo "                
            </tr>
           
            
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        
    </table>
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\"> Créer un utilisateur </a>
        </tbody>
";
        
        $__internal_d75b9a2edc3ed9e9fba02a76c2b196434807a63f3f22ac5e644c8fe80b35a57f->leave($__internal_d75b9a2edc3ed9e9fba02a76c2b196434807a63f3f22ac5e644c8fe80b35a57f_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 38,  112 => 36,  101 => 30,  97 => 28,  93 => 26,  90 => 25,  84 => 23,  82 => 22,  78 => 21,  74 => 20,  71 => 19,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ScrumatorBackendBundle:User:index{% endblock %}*/
/* */
/* {% block content %}*/
/* <h1>Utilisateurs</h1>*/
/* */
/* <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nom</th>  */
/*                 <th></th>  */
/*                 <th>Ability</th>  */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* */
/*      {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{{ entity.username }}</td>*/
/*                 <td><a href="{{ path('user_edit',  { 'user_id': entity.id }) }}">Modifier</a></td>*/
/*                 {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                 <td><a href="{{ path('switch_user',  { 'user_id': entity.id }) }}">enable</a></td>*/
/*                 {% endif %}*/
/*                 {% if entity.enabled == '1' %}*/
/*                 <td> Able</td>*/
/*                 {%else%}*/
/*                 <td> Enable</td>*/
/*                 {%endif%}*/
/*                 */
/*             </tr>*/
/*            */
/*             */
/*             */
/*         {% endfor %}*/
/*         */
/*     </table>*/
/*         <a href="{{ path('user_new') }}"> Créer un utilisateur </a>*/
/*         </tbody>*/
/* {% endblock %}*/
/* */
/* */
/* */
/*        */
