<?php

/* :role:admin.html.twig */
class __TwigTemplate_a26cc5d4c8f4d0affb7d39426f5e3bdf3255d6b24b529c7097d87ef315ab5edd extends Twig_Template
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
        $__internal_56c8e232f99738e3bdab039beb436ed74ed621d24e65b9a13f65c72f9a16f37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c8e232f99738e3bdab039beb436ed74ed621d24e65b9a13f65c72f9a16f37b->enter($__internal_56c8e232f99738e3bdab039beb436ed74ed621d24e65b9a13f65c72f9a16f37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":role:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56c8e232f99738e3bdab039beb436ed74ed621d24e65b9a13f65c72f9a16f37b->leave($__internal_56c8e232f99738e3bdab039beb436ed74ed621d24e65b9a13f65c72f9a16f37b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d3e7b81a73098753c35551a127a5a8344b1a09a6deb067d9e4e1ce586b417e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3e7b81a73098753c35551a127a5a8344b1a09a6deb067d9e4e1ce586b417e3->enter($__internal_5d3e7b81a73098753c35551a127a5a8344b1a09a6deb067d9e4e1ce586b417e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin compte!";
        
        $__internal_5d3e7b81a73098753c35551a127a5a8344b1a09a6deb067d9e4e1ce586b417e3->leave($__internal_5d3e7b81a73098753c35551a127a5a8344b1a09a6deb067d9e4e1ce586b417e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43eecf8158413a609ae8dd90dbe52d84c420c72aab982927a411a84738e8956b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43eecf8158413a609ae8dd90dbe52d84c420c72aab982927a411a84738e8956b->enter($__internal_43eecf8158413a609ae8dd90dbe52d84c420c72aab982927a411a84738e8956b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "\tBonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ", vous etes un admin, super!!
\t";
        }
        
        $__internal_43eecf8158413a609ae8dd90dbe52d84c420c72aab982927a411a84738e8956b->leave($__internal_43eecf8158413a609ae8dd90dbe52d84c420c72aab982927a411a84738e8956b_prof);

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
\tBonjour {{ app.user.username }}, vous etes un admin, super!!
\t{% endif %}
{% endblock %}", ":role:admin.html.twig", "/opt/lampp/htdocs/user/app/Resources/views/role/admin.html.twig");
    }
}
