<?php

/* role/admin.html.twig */
class __TwigTemplate_7c461cff4f919351474313959588ad07368fd83c2cd83a44c2d6d3d478d11ed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "role/admin.html.twig", 1);
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
        $__internal_57e1fbcb9b8192343700119aefe1e99f81fe439c9f7c3ff7c48bff3b636839be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e1fbcb9b8192343700119aefe1e99f81fe439c9f7c3ff7c48bff3b636839be->enter($__internal_57e1fbcb9b8192343700119aefe1e99f81fe439c9f7c3ff7c48bff3b636839be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e1fbcb9b8192343700119aefe1e99f81fe439c9f7c3ff7c48bff3b636839be->leave($__internal_57e1fbcb9b8192343700119aefe1e99f81fe439c9f7c3ff7c48bff3b636839be_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d656b97e36085191b1ce31a3ab70f97b4e08ac57e194d735976d760bf6a8e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d656b97e36085191b1ce31a3ab70f97b4e08ac57e194d735976d760bf6a8e23->enter($__internal_3d656b97e36085191b1ce31a3ab70f97b4e08ac57e194d735976d760bf6a8e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin compte!";
        
        $__internal_3d656b97e36085191b1ce31a3ab70f97b4e08ac57e194d735976d760bf6a8e23->leave($__internal_3d656b97e36085191b1ce31a3ab70f97b4e08ac57e194d735976d760bf6a8e23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d38532a2903ef8b748d35d49276c7bb75093b8e988aed906b9702dd71f885563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38532a2903ef8b748d35d49276c7bb75093b8e988aed906b9702dd71f885563->enter($__internal_d38532a2903ef8b748d35d49276c7bb75093b8e988aed906b9702dd71f885563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "\tBonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ", vous etes un admin, super!!
\t";
        }
        
        $__internal_d38532a2903ef8b748d35d49276c7bb75093b8e988aed906b9702dd71f885563->leave($__internal_d38532a2903ef8b748d35d49276c7bb75093b8e988aed906b9702dd71f885563_prof);

    }

    public function getTemplateName()
    {
        return "role/admin.html.twig";
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
{% block title %}Admin compte!{% endblock %}
{% block body %}
\t{% if app.user %}
\tBonjour {{ app.user.username }}, vous etes un admin, super!!
\t{% endif %}
{% endblock %}", "role/admin.html.twig", "/opt/lampp/htdocs/user/app/Resources/views/role/admin.html.twig");
    }
}
