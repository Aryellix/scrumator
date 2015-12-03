<?php

/* ::base.html.twig */
class __TwigTemplate_9bcb3837c5996ff000cb52eb64ef35b874762913096e8cae0048dd8dfd5c49c4 extends Twig_Template
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
    </head>
    <body>
        <div>
            ";
        // line 12
        $this->displayBlock('banner', $context, $blocks);
        // line 15
        echo "
            ";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        // line 30
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Scrumator";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_banner($context, array $blocks = array())
    {
        echo " 
               
            ";
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        echo " 
                <nav>
                <ul class='clear' id=\"menu-general\">
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("accueil");
        echo "\"> Accueil </a></li>
                    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("sprint");
        echo "\"> Gestion des sprints </a></li>
                    <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("points");
        echo "\"> Gestion des points </a></li>
                    <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\"> Gestion des taches </a></li>
                    <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("status");
        echo "\"> Gestion des statuts </a></li>
                    <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\"> Gestion des utilisateurs </a></li>
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("project");
        echo "\"> Gestion des projets </a></li>
                    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("user_stories");
        echo "\"> Gestion des user_stories </a></li>
                </ul>
                </nav>
            ";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  136 => 31,  131 => 30,  123 => 26,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  99 => 20,  95 => 19,  88 => 16,  80 => 12,  75 => 6,  69 => 5,  62 => 32,  59 => 31,  56 => 30,  54 => 16,  51 => 15,  49 => 12,  42 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
/*                     <li><a href="{{ path('user') }}"> Gestion des utilisateurs </a></li>*/
/*                     <li><a href="{{ path('project') }}"> Gestion des projets </a></li>*/
/*                     <li><a href="{{ path('user_stories') }}"> Gestion des user_stories </a></li>*/
/*                 </ul>*/
/*                 </nav>*/
/*             {% endblock%}*/
/*             {% block content %}{% endblock %}*/
/*             {% block javascripts %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
