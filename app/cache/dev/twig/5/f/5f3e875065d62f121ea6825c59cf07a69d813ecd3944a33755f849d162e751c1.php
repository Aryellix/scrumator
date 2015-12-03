<?php

/* ::base.html.twig */
class __TwigTemplate_db64359ce75040d5ed61a3c0281a3216592729172a46d2b7b4b99b6a9bdf7a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'banner' => array($this, 'block_banner'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c02cbe3729c938f9ed21feeb5d4c9e6dd1c9125b9139cd25cb30c68da2ff05 = $this->env->getExtension("native_profiler");
        $__internal_a0c02cbe3729c938f9ed21feeb5d4c9e6dd1c9125b9139cd25cb30c68da2ff05->enter($__internal_a0c02cbe3729c938f9ed21feeb5d4c9e6dd1c9125b9139cd25cb30c68da2ff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" type=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div>
            ";
        // line 13
        $this->displayBlock('banner', $context, $blocks);
        // line 16
        echo "
            ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 32
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "        </div>
    </body>
</html>
";
        
        $__internal_a0c02cbe3729c938f9ed21feeb5d4c9e6dd1c9125b9139cd25cb30c68da2ff05->leave($__internal_a0c02cbe3729c938f9ed21feeb5d4c9e6dd1c9125b9139cd25cb30c68da2ff05_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_741ecb5de7e81405bc86ae005936e57c3e20fdcd288c9d5ae8d6e5ac0dca6372 = $this->env->getExtension("native_profiler");
        $__internal_741ecb5de7e81405bc86ae005936e57c3e20fdcd288c9d5ae8d6e5ac0dca6372->enter($__internal_741ecb5de7e81405bc86ae005936e57c3e20fdcd288c9d5ae8d6e5ac0dca6372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Scrumator";
        
        $__internal_741ecb5de7e81405bc86ae005936e57c3e20fdcd288c9d5ae8d6e5ac0dca6372->leave($__internal_741ecb5de7e81405bc86ae005936e57c3e20fdcd288c9d5ae8d6e5ac0dca6372_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4bb741209611f2b713e81959f19ceab2617aafd63f6cebf017b44bbd45a42692 = $this->env->getExtension("native_profiler");
        $__internal_4bb741209611f2b713e81959f19ceab2617aafd63f6cebf017b44bbd45a42692->enter($__internal_4bb741209611f2b713e81959f19ceab2617aafd63f6cebf017b44bbd45a42692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4bb741209611f2b713e81959f19ceab2617aafd63f6cebf017b44bbd45a42692->leave($__internal_4bb741209611f2b713e81959f19ceab2617aafd63f6cebf017b44bbd45a42692_prof);

    }

    // line 13
    public function block_banner($context, array $blocks = array())
    {
        $__internal_cc981871bd9ddd08b72a8796fcaa7564734b401ba48591d1c97a0863e8b28df0 = $this->env->getExtension("native_profiler");
        $__internal_cc981871bd9ddd08b72a8796fcaa7564734b401ba48591d1c97a0863e8b28df0->enter($__internal_cc981871bd9ddd08b72a8796fcaa7564734b401ba48591d1c97a0863e8b28df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "banner"));

        echo " 
               
            ";
        
        $__internal_cc981871bd9ddd08b72a8796fcaa7564734b401ba48591d1c97a0863e8b28df0->leave($__internal_cc981871bd9ddd08b72a8796fcaa7564734b401ba48591d1c97a0863e8b28df0_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3affcdc15603be32c6c4838fb16b4285f9c9145062c2b459b223a7ea7ecdcb6d = $this->env->getExtension("native_profiler");
        $__internal_3affcdc15603be32c6c4838fb16b4285f9c9145062c2b459b223a7ea7ecdcb6d->enter($__internal_3affcdc15603be32c6c4838fb16b4285f9c9145062c2b459b223a7ea7ecdcb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        echo " 
                <nav>
                <ul class='clear' id=\"menu-general\">
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"> Accueil </a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("sprint");
        echo "\"> Gestion des sprints </a></li>
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("points");
        echo "\"> Gestion des points </a></li>
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\"> Gestion des taches </a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("status");
        echo "\"> Gestion des statuts </a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("user_list");
        echo "\"> Gestion des utilisateurs </a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("project");
        echo "\"> Gestion des projets </a></li>
                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("user_stories");
        echo "\"> Gestion des user_stories </a></li>
                </ul>
                </nav>
             
            ";
        
        $__internal_3affcdc15603be32c6c4838fb16b4285f9c9145062c2b459b223a7ea7ecdcb6d->leave($__internal_3affcdc15603be32c6c4838fb16b4285f9c9145062c2b459b223a7ea7ecdcb6d_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_f28025109c75f922302e5a62bc9cf501da8829418bf09695743a1c55bc09f913 = $this->env->getExtension("native_profiler");
        $__internal_f28025109c75f922302e5a62bc9cf501da8829418bf09695743a1c55bc09f913->enter($__internal_f28025109c75f922302e5a62bc9cf501da8829418bf09695743a1c55bc09f913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_f28025109c75f922302e5a62bc9cf501da8829418bf09695743a1c55bc09f913->leave($__internal_f28025109c75f922302e5a62bc9cf501da8829418bf09695743a1c55bc09f913_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab3f2fa1561eece259ab8e876745548fbd38aaaf3146d3e0067272e245d414ae = $this->env->getExtension("native_profiler");
        $__internal_ab3f2fa1561eece259ab8e876745548fbd38aaaf3146d3e0067272e245d414ae->enter($__internal_ab3f2fa1561eece259ab8e876745548fbd38aaaf3146d3e0067272e245d414ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "                <script>
                    \$(\"#bt\").click(function(){
                        console.log(\"coucou\");
                        \$('#test').css(\"background\", \"pink\");
                        \$(this).css(\"background\", \"greenyellow\");
                        \$.ajax({
                            url: \"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ajaxCall");
        echo "\",
                            type:\"post\",
                            data:{nom:\"salome\"},
                            success: function(result){
                                console.log(result);
                            },
                            
                        })
                    })
                    
                </script>
            ";
        
        $__internal_ab3f2fa1561eece259ab8e876745548fbd38aaaf3146d3e0067272e245d414ae->leave($__internal_ab3f2fa1561eece259ab8e876745548fbd38aaaf3146d3e0067272e245d414ae_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 40,  183 => 34,  177 => 33,  166 => 32,  154 => 27,  150 => 26,  146 => 25,  142 => 24,  138 => 23,  134 => 22,  130 => 21,  126 => 20,  116 => 17,  102 => 13,  91 => 6,  79 => 5,  69 => 52,  66 => 33,  63 => 32,  61 => 17,  58 => 16,  56 => 13,  49 => 9,  45 => 8,  40 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Scrumator{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="stylesheet" type="stylesheet" href="{{asset('css/style.css')}}"/>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% block banner %} */
/*                */
/*             {% endblock %}*/
/* */
/*             {% block menu %} */
/*                 <nav>*/
/*                 <ul class='clear' id="menu-general">*/
/*                     <li><a href="{{ path('accueil') }}"> Accueil </a></li>*/
/*                     <li><a href="{{ path('sprint') }}"> Gestion des sprints </a></li>*/
/*                     <li><a href="{{ path('points') }}"> Gestion des points </a></li>*/
/*                     <li><a href="{{ path('task') }}"> Gestion des taches </a></li>*/
/*                     <li><a href="{{ path('status') }}"> Gestion des statuts </a></li>*/
/*                     <li><a href="{{ path('user_list') }}"> Gestion des utilisateurs </a></li>*/
/*                     <li><a href="{{ path('project') }}"> Gestion des projets </a></li>*/
/*                     <li><a href="{{ path('user_stories') }}"> Gestion des user_stories </a></li>*/
/*                 </ul>*/
/*                 </nav>*/
/*              */
/*             {% endblock%}*/
/*             {% block content %}{% endblock %}*/
/*             {% block javascripts %}*/
/*                 <script>*/
/*                     $("#bt").click(function(){*/
/*                         console.log("coucou");*/
/*                         $('#test').css("background", "pink");*/
/*                         $(this).css("background", "greenyellow");*/
/*                         $.ajax({*/
/*                             url: "{{ path('ajaxCall')}}",*/
/*                             type:"post",*/
/*                             data:{nom:"salome"},*/
/*                             success: function(result){*/
/*                                 console.log(result);*/
/*                             },*/
/*                             */
/*                         })*/
/*                     })*/
/*                     */
/*                 </script>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
