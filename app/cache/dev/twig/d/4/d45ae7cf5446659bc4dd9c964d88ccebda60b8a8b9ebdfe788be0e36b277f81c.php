<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f89f7907be5fa906e2a33cf6664ec6b96d0b673b4f8d36ffcb6b1a38f7315f32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3df2cd2ed9fbea1ddc9edc77378c65f7c6501622f1635efdf42fe28ac554cee1 = $this->env->getExtension("native_profiler");
        $__internal_3df2cd2ed9fbea1ddc9edc77378c65f7c6501622f1635efdf42fe28ac554cee1->enter($__internal_3df2cd2ed9fbea1ddc9edc77378c65f7c6501622f1635efdf42fe28ac554cee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3df2cd2ed9fbea1ddc9edc77378c65f7c6501622f1635efdf42fe28ac554cee1->leave($__internal_3df2cd2ed9fbea1ddc9edc77378c65f7c6501622f1635efdf42fe28ac554cee1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c7a23a7116c9d459890488a8c31ef1f0db1c943256f0bba22deb846642240c7 = $this->env->getExtension("native_profiler");
        $__internal_2c7a23a7116c9d459890488a8c31ef1f0db1c943256f0bba22deb846642240c7->enter($__internal_2c7a23a7116c9d459890488a8c31ef1f0db1c943256f0bba22deb846642240c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2c7a23a7116c9d459890488a8c31ef1f0db1c943256f0bba22deb846642240c7->leave($__internal_2c7a23a7116c9d459890488a8c31ef1f0db1c943256f0bba22deb846642240c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
