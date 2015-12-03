<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_75a64c0bc87d868c132103e9f33150ed12c150f1953be5329421cea419ba24c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60feaa1d231697116ae6410c6a26f9ca9fa4f85e9fe447282d4face4d86df16f = $this->env->getExtension("native_profiler");
        $__internal_60feaa1d231697116ae6410c6a26f9ca9fa4f85e9fe447282d4face4d86df16f->enter($__internal_60feaa1d231697116ae6410c6a26f9ca9fa4f85e9fe447282d4face4d86df16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60feaa1d231697116ae6410c6a26f9ca9fa4f85e9fe447282d4face4d86df16f->leave($__internal_60feaa1d231697116ae6410c6a26f9ca9fa4f85e9fe447282d4face4d86df16f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2bb1020df5303dd75fc83ed453627dc829df70983257e46179b7033ca622f063 = $this->env->getExtension("native_profiler");
        $__internal_2bb1020df5303dd75fc83ed453627dc829df70983257e46179b7033ca622f063->enter($__internal_2bb1020df5303dd75fc83ed453627dc829df70983257e46179b7033ca622f063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2bb1020df5303dd75fc83ed453627dc829df70983257e46179b7033ca622f063->leave($__internal_2bb1020df5303dd75fc83ed453627dc829df70983257e46179b7033ca622f063_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
