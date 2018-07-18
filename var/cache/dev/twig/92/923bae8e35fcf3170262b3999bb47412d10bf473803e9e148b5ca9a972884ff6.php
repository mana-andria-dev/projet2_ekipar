<?php

/* :role:user.html.twig */
class __TwigTemplate_a5aab6da9cb55ffc3bdc3a13a88e2fcc1a2c7fb73c4c90433fb6ad96f99dc569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":role:user.html.twig", 1);
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
        $__internal_f965d1e24d1cacc342034d1ce6cc0a4657bbb0001acb3da0e681f89d7c8d0a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f965d1e24d1cacc342034d1ce6cc0a4657bbb0001acb3da0e681f89d7c8d0a42->enter($__internal_f965d1e24d1cacc342034d1ce6cc0a4657bbb0001acb3da0e681f89d7c8d0a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":role:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f965d1e24d1cacc342034d1ce6cc0a4657bbb0001acb3da0e681f89d7c8d0a42->leave($__internal_f965d1e24d1cacc342034d1ce6cc0a4657bbb0001acb3da0e681f89d7c8d0a42_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7148c67d4b9c2204139f884f1c8b203de06da0c62aa166e48e5a8c09635fdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7148c67d4b9c2204139f884f1c8b203de06da0c62aa166e48e5a8c09635fdfb->enter($__internal_f7148c67d4b9c2204139f884f1c8b203de06da0c62aa166e48e5a8c09635fdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User compte!";
        
        $__internal_f7148c67d4b9c2204139f884f1c8b203de06da0c62aa166e48e5a8c09635fdfb->leave($__internal_f7148c67d4b9c2204139f884f1c8b203de06da0c62aa166e48e5a8c09635fdfb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55cf0ffba17b2ff7bfa0ef4b409e68d68285af1be762d1c7328a16d30fe1a462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55cf0ffba17b2ff7bfa0ef4b409e68d68285af1be762d1c7328a16d30fe1a462->enter($__internal_55cf0ffba17b2ff7bfa0ef4b409e68d68285af1be762d1c7328a16d30fe1a462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "\tBonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ", merci d'être passé
\t";
        }
        
        $__internal_55cf0ffba17b2ff7bfa0ef4b409e68d68285af1be762d1c7328a16d30fe1a462->leave($__internal_55cf0ffba17b2ff7bfa0ef4b409e68d68285af1be762d1c7328a16d30fe1a462_prof);

    }

    public function getTemplateName()
    {
        return ":role:user.html.twig";
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
\tBonjour {{ app.user.username }}, merci d'être passé
\t{% endif %}
{% endblock %}", ":role:user.html.twig", "/opt/lampp/htdocs/user/app/Resources/views/role/user.html.twig");
    }
}
