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
        $__internal_bfda4a5e39daad870564d2709b884ff822ebbd9eb3735e047043fdf7af6a0290 = $this->env->getExtension("native_profiler");
        $__internal_bfda4a5e39daad870564d2709b884ff822ebbd9eb3735e047043fdf7af6a0290->enter($__internal_bfda4a5e39daad870564d2709b884ff822ebbd9eb3735e047043fdf7af6a0290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:Project:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfda4a5e39daad870564d2709b884ff822ebbd9eb3735e047043fdf7af6a0290->leave($__internal_bfda4a5e39daad870564d2709b884ff822ebbd9eb3735e047043fdf7af6a0290_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_907fd561776a2ff5cb1e6848ba8479b336e16174106db7ba8b197afe68e1531e = $this->env->getExtension("native_profiler");
        $__internal_907fd561776a2ff5cb1e6848ba8479b336e16174106db7ba8b197afe68e1531e->enter($__internal_907fd561776a2ff5cb1e6848ba8479b336e16174106db7ba8b197afe68e1531e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Project edit</h1>

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
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>


<div id='user-occupe'>
        <p>Les utilisateurs pris sont :</p>
   
        <ul>
     ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersProject"]) ? $context["usersProject"] : $this->getContext($context, "usersProject")));
        foreach ($context['_seq'] as $context["_key"] => $context["userlk"]) {
            // line 23
            echo "         
             <li><a class='occupe lkswitch' data-id='";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userlk"], "user", array()), "id", array()), "html", null, true);
            echo "' href='#'>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["userlk"], "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
         
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userlk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>
</div>

<div id='user-libre'>
        <p>Les utilisateurs libres sont :</p>
        
            <ul>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libres"]) ? $context["libres"] : $this->getContext($context, "libres")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 35
            echo "            
                <li><a class='libre lkswitch' data-id='";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "' href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</a></li>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
</div>        
    
";
        
        $__internal_907fd561776a2ff5cb1e6848ba8479b336e16174106db7ba8b197afe68e1531e->leave($__internal_907fd561776a2ff5cb1e6848ba8479b336e16174106db7ba8b197afe68e1531e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1058a3e7fc029e04a5b7b9e000685e92fb9f74c8caeef3fced4187df99c5770b = $this->env->getExtension("native_profiler");
        $__internal_1058a3e7fc029e04a5b7b9e000685e92fb9f74c8caeef3fced4187df99c5770b->enter($__internal_1058a3e7fc029e04a5b7b9e000685e92fb9f74c8caeef3fced4187df99c5770b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "        
            <script>
                
                function callAjax(arg, action){
                    
                    
                    var dataId = arg.attr(\"data-id\");
                   
                
                \$.ajax({
                            url: \"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("switchProjectUser");
        echo "\",
                            type:\"get\",
                            data:{userId:dataId ,projectId:";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo ",action:action}
                            
                                })
                                
}
                
                \$(\".lkswitch\").click(function(){
                    if(\$(this).hasClass('occupe')){
                        callAjax(\$(this), \"remove\");
                        \$(this).removeClass('occupe').addClass('libre');
                        \$(\"#user-libre ul\").append(\$(this));
                        return;
                    }
                    if(\$(this).hasClass('libre')){
                        callAjax(\$(this), \"add\");
                        \$(this).removeClass('libre').addClass('occupe');
                        \$(\"#user-occupe ul\").append(\$(this));
                        return;
                    }
                    var data = \$(this).attr(\"data-id\");
                        console.log(data);
                    });
                    
                   
                
                
            </script>
            
        ";
        
        $__internal_1058a3e7fc029e04a5b7b9e000685e92fb9f74c8caeef3fced4187df99c5770b->leave($__internal_1058a3e7fc029e04a5b7b9e000685e92fb9f74c8caeef3fced4187df99c5770b_prof);

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
        return array (  148 => 57,  143 => 55,  131 => 45,  125 => 44,  115 => 39,  104 => 36,  101 => 35,  97 => 34,  88 => 27,  77 => 24,  74 => 23,  70 => 22,  59 => 14,  52 => 10,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>Project edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('project') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* */
/* */
/* <div id='user-occupe'>*/
/*         <p>Les utilisateurs pris sont :</p>*/
/*    */
/*         <ul>*/
/*      {% for userlk in usersProject%}*/
/*          */
/*              <li><a class='occupe lkswitch' data-id='{{userlk.user.id}}' href='#'>{{userlk.user.username}}</a></li>*/
/*          */
/*         {%endfor%}*/
/*         </ul>*/
/* </div>*/
/* */
/* <div id='user-libre'>*/
/*         <p>Les utilisateurs libres sont :</p>*/
/*         */
/*             <ul>*/
/*         {% for user in libres %}*/
/*             */
/*                 <li><a class='libre lkswitch' data-id='{{user.id}}' href="#">{{user.username}}</a></li>*/
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
/*                 */
/*                 $.ajax({*/
/*                             url: "{{ path('switchProjectUser')}}",*/
/*                             type:"get",*/
/*                             data:{userId:dataId ,projectId:{{ entity.id }},action:action}*/
/*                             */
/*                                 })*/
/*                                 */
/* }*/
/*                 */
/*                 $(".lkswitch").click(function(){*/
/*                     if($(this).hasClass('occupe')){*/
/*                         callAjax($(this), "remove");*/
/*                         $(this).removeClass('occupe').addClass('libre');*/
/*                         $("#user-libre ul").append($(this));*/
/*                         return;*/
/*                     }*/
/*                     if($(this).hasClass('libre')){*/
/*                         callAjax($(this), "add");*/
/*                         $(this).removeClass('libre').addClass('occupe');*/
/*                         $("#user-occupe ul").append($(this));*/
/*                         return;*/
/*                     }*/
/*                     var data = $(this).attr("data-id");*/
/*                         console.log(data);*/
/*                     });*/
/*                     */
/*                    */
/*                 */
/*                 */
/*             </script>*/
/*             */
/*         {%endblock%}*/
