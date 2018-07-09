<?php

/* :role:admin.html.twig */
class __TwigTemplate_5c2f4afff200e846458b09ef7be11196de6c23eb5c9eb9fa62f80b8a18f008e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":role:admin.html.twig", 1);
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
        $__internal_8c2ad66dc2064d7f9dc87b5a7ba00bb1cd766786583663f0f33a780b7b031b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2ad66dc2064d7f9dc87b5a7ba00bb1cd766786583663f0f33a780b7b031b0c->enter($__internal_8c2ad66dc2064d7f9dc87b5a7ba00bb1cd766786583663f0f33a780b7b031b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":role:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c2ad66dc2064d7f9dc87b5a7ba00bb1cd766786583663f0f33a780b7b031b0c->leave($__internal_8c2ad66dc2064d7f9dc87b5a7ba00bb1cd766786583663f0f33a780b7b031b0c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7160f67f6528e494f6d57a770268957709661735f639e449a6bb94f30442ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7160f67f6528e494f6d57a770268957709661735f639e449a6bb94f30442ed1->enter($__internal_e7160f67f6528e494f6d57a770268957709661735f639e449a6bb94f30442ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin compte!";
        
        $__internal_e7160f67f6528e494f6d57a770268957709661735f639e449a6bb94f30442ed1->leave($__internal_e7160f67f6528e494f6d57a770268957709661735f639e449a6bb94f30442ed1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28f92f035c23731c34a5ce06ac7d526637cbdc8ab137e4bc0d606f08f7b67fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f92f035c23731c34a5ce06ac7d526637cbdc8ab137e4bc0d606f08f7b67fd0->enter($__internal_28f92f035c23731c34a5ce06ac7d526637cbdc8ab137e4bc0d606f08f7b67fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "\tBonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_28f92f035c23731c34a5ce06ac7d526637cbdc8ab137e4bc0d606f08f7b67fd0->leave($__internal_28f92f035c23731c34a5ce06ac7d526637cbdc8ab137e4bc0d606f08f7b67fd0_prof);

    }

    public function getTemplateName()
    {
        return ":role:admin.html.twig";
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
\tBonjour {{ app.user.username }}
\t{% endif %}
{% endblock %}", ":role:admin.html.twig", "E:\\wamp\\www\\user\\app/Resources\\views/role/admin.html.twig");
    }
}
