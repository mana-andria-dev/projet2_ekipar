<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_acf8222e8e1a6bd7aab3d7daa06d9a98fec8a61b6dd265f7c3c13793a56f7cf4 extends Twig_Template
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
        $__internal_efb0089bc26d47d35c9ab54823e347ccc9259d65300a838c55c6ae1d8d7d1479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb0089bc26d47d35c9ab54823e347ccc9259d65300a838c55c6ae1d8d7d1479->enter($__internal_efb0089bc26d47d35c9ab54823e347ccc9259d65300a838c55c6ae1d8d7d1479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb0089bc26d47d35c9ab54823e347ccc9259d65300a838c55c6ae1d8d7d1479->leave($__internal_efb0089bc26d47d35c9ab54823e347ccc9259d65300a838c55c6ae1d8d7d1479_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a493f2feba3564be1caaf88f8e94adec3757a0e374614fa48d48be4b5f6ce42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a493f2feba3564be1caaf88f8e94adec3757a0e374614fa48d48be4b5f6ce42->enter($__internal_7a493f2feba3564be1caaf88f8e94adec3757a0e374614fa48d48be4b5f6ce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7a493f2feba3564be1caaf88f8e94adec3757a0e374614fa48d48be4b5f6ce42->leave($__internal_7a493f2feba3564be1caaf88f8e94adec3757a0e374614fa48d48be4b5f6ce42_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ad99a08371804b2d8235f05eb43794de590304fa263fdd43545dd49916b0ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad99a08371804b2d8235f05eb43794de590304fa263fdd43545dd49916b0ff5->enter($__internal_5ad99a08371804b2d8235f05eb43794de590304fa263fdd43545dd49916b0ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ad99a08371804b2d8235f05eb43794de590304fa263fdd43545dd49916b0ff5->leave($__internal_5ad99a08371804b2d8235f05eb43794de590304fa263fdd43545dd49916b0ff5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae52f671383e613017f2c1bd9f6e6e569aa1efa9f134c729094bf0e9708a7b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae52f671383e613017f2c1bd9f6e6e569aa1efa9f134c729094bf0e9708a7b2d->enter($__internal_ae52f671383e613017f2c1bd9f6e6e569aa1efa9f134c729094bf0e9708a7b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ae52f671383e613017f2c1bd9f6e6e569aa1efa9f134c729094bf0e9708a7b2d->leave($__internal_ae52f671383e613017f2c1bd9f6e6e569aa1efa9f134c729094bf0e9708a7b2d_prof);

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
