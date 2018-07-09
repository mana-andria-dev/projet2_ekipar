<?php

/* role/user.html.twig */
class __TwigTemplate_43e5ffddb717d9acb932bd1f86c9a6b6654295c176cad22c5bacfafcab8993ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "role/user.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0415d7c89acc95810d13163cacc6b5405ed6c30e12de856e9a0a978fed64f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0415d7c89acc95810d13163cacc6b5405ed6c30e12de856e9a0a978fed64f2a->enter($__internal_f0415d7c89acc95810d13163cacc6b5405ed6c30e12de856e9a0a978fed64f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0415d7c89acc95810d13163cacc6b5405ed6c30e12de856e9a0a978fed64f2a->leave($__internal_f0415d7c89acc95810d13163cacc6b5405ed6c30e12de856e9a0a978fed64f2a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_111f5cbb9737bd640b00b4ed4e3df9b5431fc618f43690e01d45d45b5c4480e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111f5cbb9737bd640b00b4ed4e3df9b5431fc618f43690e01d45d45b5c4480e4->enter($__internal_111f5cbb9737bd640b00b4ed4e3df9b5431fc618f43690e01d45d45b5c4480e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User compte!";
        
        $__internal_111f5cbb9737bd640b00b4ed4e3df9b5431fc618f43690e01d45d45b5c4480e4->leave($__internal_111f5cbb9737bd640b00b4ed4e3df9b5431fc618f43690e01d45d45b5c4480e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b9b7e34540c762963f32a2fd668bdb29383f1c632d7278f5e3e75950dbff328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9b7e34540c762963f32a2fd668bdb29383f1c632d7278f5e3e75950dbff328->enter($__internal_4b9b7e34540c762963f32a2fd668bdb29383f1c632d7278f5e3e75950dbff328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "\tBonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_4b9b7e34540c762963f32a2fd668bdb29383f1c632d7278f5e3e75950dbff328->leave($__internal_4b9b7e34540c762963f32a2fd668bdb29383f1c632d7278f5e3e75950dbff328_prof);

    }

    public function getTemplateName()
    {
        return "role/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %}User compte!{% endblock %}
{% block body %}
\t{% if app.user %}
\tBonjour {{ app.user.username }}
\t{% endif %}
{% endblock %}", "role/user.html.twig", "E:\\wamp\\www\\user\\app\\Resources\\views\\role\\user.html.twig");
    }
}
