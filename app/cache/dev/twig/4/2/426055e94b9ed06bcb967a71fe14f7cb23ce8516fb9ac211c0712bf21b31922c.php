<?php

/* ScrumatorBackendBundle:Poker:display.html.twig */
class __TwigTemplate_c524d3b70803a100e2e059cdafb4f7f5e070b36fb8074de9a13431da17db132d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:Poker:display.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77485d4f86231f99906b229bf27c43133f42db8e3b5471e41b9d895af2976119 = $this->env->getExtension("native_profiler");
        $__internal_77485d4f86231f99906b229bf27c43133f42db8e3b5471e41b9d895af2976119->enter($__internal_77485d4f86231f99906b229bf27c43133f42db8e3b5471e41b9d895af2976119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:Poker:display.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77485d4f86231f99906b229bf27c43133f42db8e3b5471e41b9d895af2976119->leave($__internal_77485d4f86231f99906b229bf27c43133f42db8e3b5471e41b9d895af2976119_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3eafaef1c4b906464eebf63c024b432ef169278628fd853123e7ff584a1f56a3 = $this->env->getExtension("native_profiler");
        $__internal_3eafaef1c4b906464eebf63c024b432ef169278628fd853123e7ff584a1f56a3->enter($__internal_3eafaef1c4b906464eebf63c024b432ef169278628fd853123e7ff584a1f56a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ScrumatorBackendBundle:Poker:display";
        
        $__internal_3eafaef1c4b906464eebf63c024b432ef169278628fd853123e7ff584a1f56a3->leave($__internal_3eafaef1c4b906464eebf63c024b432ef169278628fd853123e7ff584a1f56a3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0011d21ee25846e071e9b66f3f07c64d1640a9da1020aef4b44f8107b61c0b1 = $this->env->getExtension("native_profiler");
        $__internal_b0011d21ee25846e071e9b66f3f07c64d1640a9da1020aef4b44f8107b61c0b1->enter($__internal_b0011d21ee25846e071e9b66f3f07c64d1640a9da1020aef4b44f8107b61c0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<h1>Bienvenue sur le Planning Poker ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " !</h1>

<h2>Projet : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_story"]) ? $context["user_story"] : $this->getContext($context, "user_story")), "project", array()), "name", array()), "html", null, true);
        echo "</h2>

<h3>User Story : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user_story"]) ? $context["user_story"] : $this->getContext($context, "user_story")), "description", array()), "html", null, true);
        echo "</h3>

<h4>Utilisateurs concernés : </h4>
    <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersLink"]) ? $context["usersLink"] : $this->getContext($context, "usersLink")));
        foreach ($context['_seq'] as $context["_key"] => $context["userLink"]) {
            // line 15
            echo "            <li><span class=\"loupiotte\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userLink"], "user", array()), "username", array()), "html", null, true);
            echo " </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userLink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>
";
        
        $__internal_b0011d21ee25846e071e9b66f3f07c64d1640a9da1020aef4b44f8107b61c0b1->leave($__internal_b0011d21ee25846e071e9b66f3f07c64d1640a9da1020aef4b44f8107b61c0b1_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa2ce2898cc32aef7bf970d2caefe8c651771b3ca72a6afb56562c08e4a44c84 = $this->env->getExtension("native_profiler");
        $__internal_aa2ce2898cc32aef7bf970d2caefe8c651771b3ca72a6afb56562c08e4a44c84->enter($__internal_aa2ce2898cc32aef7bf970d2caefe8c651771b3ca72a6afb56562c08e4a44c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    <script>
        \$(document).ready(function(){
            
            function checkConnectedUsers(){
                \$.ajax({
                        url: \"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("pokerConnection");
        echo "\",
                        type:\"get\",
                        data:{user_id : ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo ",
                              project_id : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_story"]) ? $context["user_story"] : $this->getContext($context, "user_story")), "project", array()), "id", array()), "html", null, true);
        echo "
                             }
                });
            }
            
            checkConnectedUsers();
            });
        
        
    </script>
    
";
        
        $__internal_aa2ce2898cc32aef7bf970d2caefe8c651771b3ca72a6afb56562c08e4a44c84->leave($__internal_aa2ce2898cc32aef7bf970d2caefe8c651771b3ca72a6afb56562c08e4a44c84_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:Poker:display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  111 => 28,  106 => 26,  99 => 21,  93 => 20,  85 => 17,  76 => 15,  72 => 14,  65 => 10,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}ScrumatorBackendBundle:Poker:display{% endblock %}*/
/* */
/* {% block content %}*/
/* <h1>Bienvenue sur le Planning Poker {{app.user.username}} !</h1>*/
/* */
/* <h2>Projet : {{user_story.project.name}}</h2>*/
/* */
/* <h3>User Story : {{user_story.description}}</h3>*/
/* */
/* <h4>Utilisateurs concernés : </h4>*/
/*     <ul>*/
/*         {%for userLink in usersLink%}*/
/*             <li><span class="loupiotte"></span> {{userLink.user.username}} </li>*/
/*         {%endfor%}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {%block javascripts %}*/
/*     <script>*/
/*         $(document).ready(function(){*/
/*             */
/*             function checkConnectedUsers(){*/
/*                 $.ajax({*/
/*                         url: "{{path('pokerConnection')}}",*/
/*                         type:"get",*/
/*                         data:{user_id : {{app.user.id}},*/
/*                               project_id : {{user_story.project.id}}*/
/*                              }*/
/*                 });*/
/*             }*/
/*             */
/*             checkConnectedUsers();*/
/*             });*/
/*         */
/*         */
/*     </script>*/
/*     */
/* {%endblock%}*/
/* */
