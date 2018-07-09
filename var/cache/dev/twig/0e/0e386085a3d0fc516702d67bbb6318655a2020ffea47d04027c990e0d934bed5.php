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
        $__internal_8999771814329db897f12610858d0aa521b1a56642f116cb1a3f25f82f392d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8999771814329db897f12610858d0aa521b1a56642f116cb1a3f25f82f392d94->enter($__internal_8999771814329db897f12610858d0aa521b1a56642f116cb1a3f25f82f392d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8999771814329db897f12610858d0aa521b1a56642f116cb1a3f25f82f392d94->leave($__internal_8999771814329db897f12610858d0aa521b1a56642f116cb1a3f25f82f392d94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08693a895c3e9742906956b8d3247c3527f3551598b7dce5ac224476a87b9ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08693a895c3e9742906956b8d3247c3527f3551598b7dce5ac224476a87b9ed0->enter($__internal_08693a895c3e9742906956b8d3247c3527f3551598b7dce5ac224476a87b9ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_08693a895c3e9742906956b8d3247c3527f3551598b7dce5ac224476a87b9ed0->leave($__internal_08693a895c3e9742906956b8d3247c3527f3551598b7dce5ac224476a87b9ed0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_589a8f813167128c05b8ee04a87bed5aa2e16437ce0281118c850e5cbab97534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589a8f813167128c05b8ee04a87bed5aa2e16437ce0281118c850e5cbab97534->enter($__internal_589a8f813167128c05b8ee04a87bed5aa2e16437ce0281118c850e5cbab97534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_589a8f813167128c05b8ee04a87bed5aa2e16437ce0281118c850e5cbab97534->leave($__internal_589a8f813167128c05b8ee04a87bed5aa2e16437ce0281118c850e5cbab97534_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_10679e3c57c8408a248c47bef1db5c60ea9527664f4c6e8fa9fbec44448add33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10679e3c57c8408a248c47bef1db5c60ea9527664f4c6e8fa9fbec44448add33->enter($__internal_10679e3c57c8408a248c47bef1db5c60ea9527664f4c6e8fa9fbec44448add33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_10679e3c57c8408a248c47bef1db5c60ea9527664f4c6e8fa9fbec44448add33->leave($__internal_10679e3c57c8408a248c47bef1db5c60ea9527664f4c6e8fa9fbec44448add33_prof);

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
