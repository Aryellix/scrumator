<?php

/* ScrumatorBackendBundle:Project:new.html.twig */
class __TwigTemplate_14257902f01e58eef5a9e087ac3558b894b582dcc1fe83d72bf3da63b2a3bf52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ScrumatorBackendBundle:Project:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9b3d60008c95223476bcf64c399fa7e2258b35bceaabca29b17cd3ddb1d976f = $this->env->getExtension("native_profiler");
        $__internal_b9b3d60008c95223476bcf64c399fa7e2258b35bceaabca29b17cd3ddb1d976f->enter($__internal_b9b3d60008c95223476bcf64c399fa7e2258b35bceaabca29b17cd3ddb1d976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ScrumatorBackendBundle:Project:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b3d60008c95223476bcf64c399fa7e2258b35bceaabca29b17cd3ddb1d976f->leave($__internal_b9b3d60008c95223476bcf64c399fa7e2258b35bceaabca29b17cd3ddb1d976f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_aca9a204c99bb46d13deb9777dc9bba246f4ab06d48b5def6753ffc96096a5ae = $this->env->getExtension("native_profiler");
        $__internal_aca9a204c99bb46d13deb9777dc9bba246f4ab06d48b5def6753ffc96096a5ae->enter($__internal_aca9a204c99bb46d13deb9777dc9bba246f4ab06d48b5def6753ffc96096a5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Project creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
</ul>
";
        
        $__internal_aca9a204c99bb46d13deb9777dc9bba246f4ab06d48b5def6753ffc96096a5ae->leave($__internal_aca9a204c99bb46d13deb9777dc9bba246f4ab06d48b5def6753ffc96096a5ae_prof);

    }

    public function getTemplateName()
    {
        return "ScrumatorBackendBundle:Project:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>Project creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('project') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
