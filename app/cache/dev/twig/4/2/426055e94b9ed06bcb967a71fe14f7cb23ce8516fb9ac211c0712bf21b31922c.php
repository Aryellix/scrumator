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
        $__internal_88047faa64fbe4f286672bb66032d86e6cf86934051d22142b2f5364f498dc08 = $this->env->getExtension("native_profiler");
        $__internal_88047faa64fbe4f286672bb66032d86e6cf86934051d22142b2f5364f498dc08->enter($__internal_88047faa64fbe4f286672bb66032d86e6cf86934051d22142b2f5364f498dc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:Poker:display.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88047faa64fbe4f286672bb66032d86e6cf86934051d22142b2f5364f498dc08->leave($__internal_88047faa64fbe4f286672bb66032d86e6cf86934051d22142b2f5364f498dc08_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_883334346bc3ca1c2cd3da2008a7fe2a632f92965135d15ac971602f3f034dd7 = $this->env->getExtension("native_profiler");
        $__internal_883334346bc3ca1c2cd3da2008a7fe2a632f92965135d15ac971602f3f034dd7->enter($__internal_883334346bc3ca1c2cd3da2008a7fe2a632f92965135d15ac971602f3f034dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ScrumatorBackendBundle:Poker:display";
        
        $__internal_883334346bc3ca1c2cd3da2008a7fe2a632f92965135d15ac971602f3f034dd7->leave($__internal_883334346bc3ca1c2cd3da2008a7fe2a632f92965135d15ac971602f3f034dd7_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_be60aebe24edd380d4761134d9cdf8d1b7b23b6042eb29f4b171b3df85ea561a = $this->env->getExtension("native_profiler");
        $__internal_be60aebe24edd380d4761134d9cdf8d1b7b23b6042eb29f4b171b3df85ea561a->enter($__internal_be60aebe24edd380d4761134d9cdf8d1b7b23b6042eb29f4b171b3df85ea561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "            <li><span user_id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userLink"], "user", array()), "id", array()), "html", null, true);
            echo "\"  class=\"lampe loupiotte\"></span> ";
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
        
        $__internal_be60aebe24edd380d4761134d9cdf8d1b7b23b6042eb29f4b171b3df85ea561a->leave($__internal_be60aebe24edd380d4761134d9cdf8d1b7b23b6042eb29f4b171b3df85ea561a_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9163ca681c5e2d93b2cd9d181fb61b2d2250661155b119bec58505eedbb1a68d = $this->env->getExtension("native_profiler");
        $__internal_9163ca681c5e2d93b2cd9d181fb61b2d2250661155b119bec58505eedbb1a68d->enter($__internal_9163ca681c5e2d93b2cd9d181fb61b2d2250661155b119bec58505eedbb1a68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    <script>
        \$(document).ready(function(){
            
            function checkConnectedUsers(){
                console.info('check');
                \$.ajax({
                        url: \"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pokerConnection");
        echo "\",
                        type:\"get\",
                        data:{user_id : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo ",
                              project_id : ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user_story"]) ? $context["user_story"] : $this->getContext($context, "user_story")), "project", array()), "id", array()), "html", null, true);
        echo "
                             },
                        success:function(resultat, statut){
                            console.log(resultat, statut);
                            \$(\".lampe\").each(function(index){
                                console.log(\$(this).attr('user_id'));
                                console.log(resultat[\$(this).attr('user_id')]);
                                if(resultat[\$(this).attr('user_id')].connected==true){
                                    \$(this).addClass('on');
                                }
                                else{
                                    \$(this).removeClass('on');
                                }
                                
                            })
                            
                        }
                });
                
                
                
            }
            
            checkConnectedUsers();
            
            setInterval(function() {
              checkConnectedUsers()},30000);
            
            
                      
        });
        
        
    </script>
    
";
        
        $__internal_9163ca681c5e2d93b2cd9d181fb61b2d2250661155b119bec58505eedbb1a68d->leave($__internal_9163ca681c5e2d93b2cd9d181fb61b2d2250661155b119bec58505eedbb1a68d_prof);

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
        return array (  118 => 30,  114 => 29,  109 => 27,  101 => 21,  95 => 20,  87 => 17,  76 => 15,  72 => 14,  65 => 10,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <li><span user_id="{{userLink.user.id}}"  class="lampe loupiotte"></span> {{userLink.user.username}} </li>*/
/*         {%endfor%}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {%block javascripts %}*/
/*     <script>*/
/*         $(document).ready(function(){*/
/*             */
/*             function checkConnectedUsers(){*/
/*                 console.info('check');*/
/*                 $.ajax({*/
/*                         url: "{{path('pokerConnection')}}",*/
/*                         type:"get",*/
/*                         data:{user_id : {{app.user.id}},*/
/*                               project_id : {{user_story.project.id}}*/
/*                              },*/
/*                         success:function(resultat, statut){*/
/*                             console.log(resultat, statut);*/
/*                             $(".lampe").each(function(index){*/
/*                                 console.log($(this).attr('user_id'));*/
/*                                 console.log(resultat[$(this).attr('user_id')]);*/
/*                                 if(resultat[$(this).attr('user_id')].connected==true){*/
/*                                     $(this).addClass('on');*/
/*                                 }*/
/*                                 else{*/
/*                                     $(this).removeClass('on');*/
/*                                 }*/
/*                                 */
/*                             })*/
/*                             */
/*                         }*/
/*                 });*/
/*                 */
/*                 */
/*                 */
/*             }*/
/*             */
/*             checkConnectedUsers();*/
/*             */
/*             setInterval(function() {*/
/*               checkConnectedUsers()},30000);*/
/*             */
/*             */
/*                       */
/*         });*/
/*         */
/*         */
/*     </script>*/
/*     */
/* {%endblock%}*/
/* */
