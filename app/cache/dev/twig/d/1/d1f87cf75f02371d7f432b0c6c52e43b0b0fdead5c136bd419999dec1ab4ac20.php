<?php

/* ScrumatorBackendBundle:Project:edit.html.twig */
class __TwigTemplate_6e140e1c096e9926e8af99247a8ef9c63a86775fb36d3d1bf93a3f74d3c895e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:Project:edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_4553dfa88780141af01006fd4107cdd5c5f4df85a38e8b9eba7fe564ac8e28cb = $this->env->getExtension("native_profiler");
        $__internal_4553dfa88780141af01006fd4107cdd5c5f4df85a38e8b9eba7fe564ac8e28cb->enter($__internal_4553dfa88780141af01006fd4107cdd5c5f4df85a38e8b9eba7fe564ac8e28cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:Project:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4553dfa88780141af01006fd4107cdd5c5f4df85a38e8b9eba7fe564ac8e28cb->leave($__internal_4553dfa88780141af01006fd4107cdd5c5f4df85a38e8b9eba7fe564ac8e28cb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4c6bc5e1da2f7d896a72c7318e2716bbefadccae8c1e39333c03760bc7720f63 = $this->env->getExtension("native_profiler");
        $__internal_4c6bc5e1da2f7d896a72c7318e2716bbefadccae8c1e39333c03760bc7720f63->enter($__internal_4c6bc5e1da2f7d896a72c7318e2716bbefadccae8c1e39333c03760bc7720f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Modification du projet</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
            <li>
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("project");
        echo "\">
                    Retour à la liste des projets
                </a>
            </li>
            <li>
                ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
            </li>
        </ul>


<div id='user-occupe'>
        <h2>Les utilisateurs pris sont :</h2>
   
        <ul>
     ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersProject"]) ? $context["usersProject"] : $this->getContext($context, "usersProject")));
        foreach ($context['_seq'] as $context["_key"] => $context["userlk"]) {
            // line 25
            echo "         
             <li class='occupe lkswitch' data-id='";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userlk"], "user", array()), "id", array()), "html", null, true);
            echo "'>
                 
                 <a href='#'>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userlk"], "user", array()), "username", array()), "html", null, true);
            echo "</a> 
                 <input type=\"radio\" name=\"lead\" value=\"Définir comme lead\"
                        ";
            // line 30
            if ($this->getAttribute($context["userlk"], "lead", array())) {
                echo " checked ";
            }
            echo ">
                 
             </li>
         
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userlk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </ul>
</div>

<div id='user-libre'>
        <h2>Les utilisateurs libres sont :</h2>
        
            <ul>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libres"]) ? $context["libres"] : $this->getContext($context, "libres")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 43
            echo "            
                <li class='libre lkswitch' data-id='";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "'> 
                    
                    <a href=\"#\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a>
                    <input type=\"radio\" name=\"lead\" value=\"Définir comme lead\">
                    
                </li>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </ul>
</div>        
    
";
        
        $__internal_4c6bc5e1da2f7d896a72c7318e2716bbefadccae8c1e39333c03760bc7720f63->leave($__internal_4c6bc5e1da2f7d896a72c7318e2716bbefadccae8c1e39333c03760bc7720f63_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e2be7589081c43ca52811a5fde71c303a8d3f6b333040ce8c1c0fdb2c06c3e8 = $this->env->getExtension("native_profiler");
        $__internal_4e2be7589081c43ca52811a5fde71c303a8d3f6b333040ce8c1c0fdb2c06c3e8->enter($__internal_4e2be7589081c43ca52811a5fde71c303a8d3f6b333040ce8c1c0fdb2c06c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "        
            <script>
                
                function callAjax(arg, action){
                    
                    
                    var dataId = arg.attr(\"data-id\");
                   
                \$.ajax({
                            url: \"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("switchProjectUser");
        echo "\",
                            type:\"get\",
                            data:{userId:dataId ,projectId:";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo ",action:action}
                            
                                })
                                
}
                
                \$(\".lkswitch a\").click(function(){
                    if(\$(this).siblings('input[type=\"radio\"]').is(':checked')){
                        alert('On ne peut pas retirer le leader du projet');
                        return false;
                    }
                    if(\$(this).parent().hasClass('occupe')){
                        callAjax(\$(this).parent(), \"remove\");
                        \$(this).parent().removeClass('occupe').addClass('libre');
                        \$(\"#user-libre ul\").append(\$(this).parent());
                        return;
                    }
                    if(\$(this).parent().hasClass('libre')){
                        callAjax(\$(this).parent(), \"add\");
                        \$(this).parent().removeClass('libre').addClass('occupe');
                        \$(\"#user-occupe ul\").append(\$(this).parent());
                        return;
                    }
                    });
                    
                    \$(\".lkswitch input\").click(function(){
                        
                        
                        var lkswitch= \$(this).parent();
                        console.log(lkswitch);
                        
                        var dataId = lkswitch.attr(\"data-id\");
                        
                           \$.ajax({
                               url: \"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("switchLead");
        echo "\",
                                type:\"get\",
                                data:{userId:dataId ,projectId:";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "}
                           })
                        
                        
                        
                    })
                        
                   
                
                
            </script>
            
        ";
        
        $__internal_4e2be7589081c43ca52811a5fde71c303a8d3f6b333040ce8c1c0fdb2c06c3e8->leave($__internal_4e2be7589081c43ca52811a5fde71c303a8d3f6b333040ce8c1c0fdb2c06c3e8_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:Project:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 105,  204 => 103,  167 => 69,  162 => 67,  151 => 58,  145 => 57,  135 => 52,  123 => 46,  118 => 44,  115 => 43,  111 => 42,  102 => 35,  89 => 30,  84 => 28,  79 => 26,  76 => 25,  72 => 24,  60 => 15,  52 => 10,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>Modification du projet</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*             <li>*/
/*                 <a href="{{ path('project') }}">*/
/*                     Retour à la liste des projets*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 {{ form(delete_form) }}*/
/*             </li>*/
/*         </ul>*/
/* */
/* */
/* <div id='user-occupe'>*/
/*         <h2>Les utilisateurs pris sont :</h2>*/
/*    */
/*         <ul>*/
/*      {% for userlk in usersProject%}*/
/*          */
/*              <li class='occupe lkswitch' data-id='{{userlk.user.id}}'>*/
/*                  */
/*                  <a href='#'>{{userlk.user.username}}</a> */
/*                  <input type="radio" name="lead" value="Définir comme lead"*/
/*                         {% if userlk.lead %} checked {% endif %}>*/
/*                  */
/*              </li>*/
/*          */
/*         {%endfor%}*/
/*         </ul>*/
/* </div>*/
/* */
/* <div id='user-libre'>*/
/*         <h2>Les utilisateurs libres sont :</h2>*/
/*         */
/*             <ul>*/
/*         {% for user in libres %}*/
/*             */
/*                 <li class='libre lkswitch' data-id='{{user.id}}'> */
/*                     */
/*                     <a href="#">{{user.username}}</a>*/
/*                     <input type="radio" name="lead" value="Définir comme lead">*/
/*                     */
/*                 </li>*/
/*             */
/*         {%endfor%}*/
/*             </ul>*/
/* </div>        */
/*     */
/* {% endblock %}*/
/* */
/*  {%block javascripts %}*/
/*         */
/*             <script>*/
/*                 */
/*                 function callAjax(arg, action){*/
/*                     */
/*                     */
/*                     var dataId = arg.attr("data-id");*/
/*                    */
/*                 $.ajax({*/
/*                             url: "{{ path('switchProjectUser')}}",*/
/*                             type:"get",*/
/*                             data:{userId:dataId ,projectId:{{ entity.id }},action:action}*/
/*                             */
/*                                 })*/
/*                                 */
/* }*/
/*                 */
/*                 $(".lkswitch a").click(function(){*/
/*                     if($(this).siblings('input[type="radio"]').is(':checked')){*/
/*                         alert('On ne peut pas retirer le leader du projet');*/
/*                         return false;*/
/*                     }*/
/*                     if($(this).parent().hasClass('occupe')){*/
/*                         callAjax($(this).parent(), "remove");*/
/*                         $(this).parent().removeClass('occupe').addClass('libre');*/
/*                         $("#user-libre ul").append($(this).parent());*/
/*                         return;*/
/*                     }*/
/*                     if($(this).parent().hasClass('libre')){*/
/*                         callAjax($(this).parent(), "add");*/
/*                         $(this).parent().removeClass('libre').addClass('occupe');*/
/*                         $("#user-occupe ul").append($(this).parent());*/
/*                         return;*/
/*                     }*/
/*                     });*/
/*                     */
/*                     $(".lkswitch input").click(function(){*/
/*                         */
/*                         */
/*                         var lkswitch= $(this).parent();*/
/*                         console.log(lkswitch);*/
/*                         */
/*                         var dataId = lkswitch.attr("data-id");*/
/*                         */
/*                            $.ajax({*/
/*                                url: "{{ path('switchLead')}}",*/
/*                                 type:"get",*/
/*                                 data:{userId:dataId ,projectId:{{ entity.id }}}*/
/*                            })*/
/*                         */
/*                         */
/*                         */
/*                     })*/
/*                         */
/*                    */
/*                 */
/*                 */
/*             </script>*/
/*             */
/*         {%endblock%}*/
