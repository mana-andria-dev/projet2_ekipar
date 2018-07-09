<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c4e29e0b034cd1b24fd67f6d39d3b1b47e01b8ffa0ab0c477fb4fe0e083fec75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a4baa37aceea5eaecabe424784705992bd814f4c565e4d04d247dfd4a8ad46fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4baa37aceea5eaecabe424784705992bd814f4c565e4d04d247dfd4a8ad46fb->enter($__internal_a4baa37aceea5eaecabe424784705992bd814f4c565e4d04d247dfd4a8ad46fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4baa37aceea5eaecabe424784705992bd814f4c565e4d04d247dfd4a8ad46fb->leave($__internal_a4baa37aceea5eaecabe424784705992bd814f4c565e4d04d247dfd4a8ad46fb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79bfd397e2abb9b5461a27b88b2738f0df4eab53042eea2d4ede95ff9c821d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79bfd397e2abb9b5461a27b88b2738f0df4eab53042eea2d4ede95ff9c821d53->enter($__internal_79bfd397e2abb9b5461a27b88b2738f0df4eab53042eea2d4ede95ff9c821d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_79bfd397e2abb9b5461a27b88b2738f0df4eab53042eea2d4ede95ff9c821d53->leave($__internal_79bfd397e2abb9b5461a27b88b2738f0df4eab53042eea2d4ede95ff9c821d53_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_223dfb4e43e5b41ae5d479164d642fd6fd3203d53aca968ea3b4a1f8b0a50fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223dfb4e43e5b41ae5d479164d642fd6fd3203d53aca968ea3b4a1f8b0a50fd0->enter($__internal_223dfb4e43e5b41ae5d479164d642fd6fd3203d53aca968ea3b4a1f8b0a50fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_223dfb4e43e5b41ae5d479164d642fd6fd3203d53aca968ea3b4a1f8b0a50fd0->leave($__internal_223dfb4e43e5b41ae5d479164d642fd6fd3203d53aca968ea3b4a1f8b0a50fd0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
