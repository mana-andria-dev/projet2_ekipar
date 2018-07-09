<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11ebcee873e77cf1a82c05c481743450d25729f7497f829dc4b3176696aba47b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54b39a9de60226c0775a47c48e8c0136fab44a3d6863b3e9cbb235cac1029b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b39a9de60226c0775a47c48e8c0136fab44a3d6863b3e9cbb235cac1029b4c->enter($__internal_54b39a9de60226c0775a47c48e8c0136fab44a3d6863b3e9cbb235cac1029b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b39a9de60226c0775a47c48e8c0136fab44a3d6863b3e9cbb235cac1029b4c->leave($__internal_54b39a9de60226c0775a47c48e8c0136fab44a3d6863b3e9cbb235cac1029b4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09bff11df364288118fc783ed339a504322f2e59347fad0f6b110700746e6565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bff11df364288118fc783ed339a504322f2e59347fad0f6b110700746e6565->enter($__internal_09bff11df364288118fc783ed339a504322f2e59347fad0f6b110700746e6565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_09bff11df364288118fc783ed339a504322f2e59347fad0f6b110700746e6565->leave($__internal_09bff11df364288118fc783ed339a504322f2e59347fad0f6b110700746e6565_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9dba56baffd158498b9a57aa4bb622a046c6148f09309d16c126714a53286dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9dba56baffd158498b9a57aa4bb622a046c6148f09309d16c126714a53286dd->enter($__internal_f9dba56baffd158498b9a57aa4bb622a046c6148f09309d16c126714a53286dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f9dba56baffd158498b9a57aa4bb622a046c6148f09309d16c126714a53286dd->leave($__internal_f9dba56baffd158498b9a57aa4bb622a046c6148f09309d16c126714a53286dd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d8751acbf1269f98ab098bf3d8e8b1c9ff43a4fdcc05d472a130227cfc19ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8751acbf1269f98ab098bf3d8e8b1c9ff43a4fdcc05d472a130227cfc19ae2->enter($__internal_7d8751acbf1269f98ab098bf3d8e8b1c9ff43a4fdcc05d472a130227cfc19ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7d8751acbf1269f98ab098bf3d8e8b1c9ff43a4fdcc05d472a130227cfc19ae2->leave($__internal_7d8751acbf1269f98ab098bf3d8e8b1c9ff43a4fdcc05d472a130227cfc19ae2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
