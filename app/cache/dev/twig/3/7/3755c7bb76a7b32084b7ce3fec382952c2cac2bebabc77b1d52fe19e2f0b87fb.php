<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e37424b37b67790b41901f3bc6b4d67e616d06bca93a5854ea74c0cbb56210dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ff3289d357bf29359cbc5ed0e0a1092b1cec38d3b3a12b9125e89d3943d6b8f = $this->env->getExtension("native_profiler");
        $__internal_9ff3289d357bf29359cbc5ed0e0a1092b1cec38d3b3a12b9125e89d3943d6b8f->enter($__internal_9ff3289d357bf29359cbc5ed0e0a1092b1cec38d3b3a12b9125e89d3943d6b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff3289d357bf29359cbc5ed0e0a1092b1cec38d3b3a12b9125e89d3943d6b8f->leave($__internal_9ff3289d357bf29359cbc5ed0e0a1092b1cec38d3b3a12b9125e89d3943d6b8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc9a162bb23753e1e9ec6b7f3dd7b6bc25b312d92581be482d61cbd22959f95b = $this->env->getExtension("native_profiler");
        $__internal_fc9a162bb23753e1e9ec6b7f3dd7b6bc25b312d92581be482d61cbd22959f95b->enter($__internal_fc9a162bb23753e1e9ec6b7f3dd7b6bc25b312d92581be482d61cbd22959f95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc9a162bb23753e1e9ec6b7f3dd7b6bc25b312d92581be482d61cbd22959f95b->leave($__internal_fc9a162bb23753e1e9ec6b7f3dd7b6bc25b312d92581be482d61cbd22959f95b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff111f438b9c30bb2a817f19b872087ddb7bec2a65e01292b373ece6240e8680 = $this->env->getExtension("native_profiler");
        $__internal_ff111f438b9c30bb2a817f19b872087ddb7bec2a65e01292b373ece6240e8680->enter($__internal_ff111f438b9c30bb2a817f19b872087ddb7bec2a65e01292b373ece6240e8680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff111f438b9c30bb2a817f19b872087ddb7bec2a65e01292b373ece6240e8680->leave($__internal_ff111f438b9c30bb2a817f19b872087ddb7bec2a65e01292b373ece6240e8680_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e998a357c6e683c068a18cc7e02987fd54ab8e19b4aef8c0d717dc9200b723ee = $this->env->getExtension("native_profiler");
        $__internal_e998a357c6e683c068a18cc7e02987fd54ab8e19b4aef8c0d717dc9200b723ee->enter($__internal_e998a357c6e683c068a18cc7e02987fd54ab8e19b4aef8c0d717dc9200b723ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e998a357c6e683c068a18cc7e02987fd54ab8e19b4aef8c0d717dc9200b723ee->leave($__internal_e998a357c6e683c068a18cc7e02987fd54ab8e19b4aef8c0d717dc9200b723ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
