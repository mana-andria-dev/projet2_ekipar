<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a87c7e9036811603ed31f72081094ca2d7aecddbed09bc0020e1afc665fb9a91 extends Twig_Template
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
        $__internal_0a2897b9448e109daa12c4a22e15ede08025838271885c4dccda6433aa3ecc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2897b9448e109daa12c4a22e15ede08025838271885c4dccda6433aa3ecc4c->enter($__internal_0a2897b9448e109daa12c4a22e15ede08025838271885c4dccda6433aa3ecc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a2897b9448e109daa12c4a22e15ede08025838271885c4dccda6433aa3ecc4c->leave($__internal_0a2897b9448e109daa12c4a22e15ede08025838271885c4dccda6433aa3ecc4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b954d64d8c07aefc6feecb9346415da4fee0561e49182172678e7461cf65e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b954d64d8c07aefc6feecb9346415da4fee0561e49182172678e7461cf65e56->enter($__internal_4b954d64d8c07aefc6feecb9346415da4fee0561e49182172678e7461cf65e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4b954d64d8c07aefc6feecb9346415da4fee0561e49182172678e7461cf65e56->leave($__internal_4b954d64d8c07aefc6feecb9346415da4fee0561e49182172678e7461cf65e56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e29364dc3299a733dc1f052a0465ebf7f7b47fefe49ce1492d549f282275e165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29364dc3299a733dc1f052a0465ebf7f7b47fefe49ce1492d549f282275e165->enter($__internal_e29364dc3299a733dc1f052a0465ebf7f7b47fefe49ce1492d549f282275e165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e29364dc3299a733dc1f052a0465ebf7f7b47fefe49ce1492d549f282275e165->leave($__internal_e29364dc3299a733dc1f052a0465ebf7f7b47fefe49ce1492d549f282275e165_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_121d25b27026e3e55f192c54b2ff22ef10c23a0c09fb0c36c8e181a1aed7ef48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121d25b27026e3e55f192c54b2ff22ef10c23a0c09fb0c36c8e181a1aed7ef48->enter($__internal_121d25b27026e3e55f192c54b2ff22ef10c23a0c09fb0c36c8e181a1aed7ef48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_121d25b27026e3e55f192c54b2ff22ef10c23a0c09fb0c36c8e181a1aed7ef48->leave($__internal_121d25b27026e3e55f192c54b2ff22ef10c23a0c09fb0c36c8e181a1aed7ef48_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
