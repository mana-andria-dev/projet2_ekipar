<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_336916540d3f90129450f8f8a864644fd73369d1a7cbba2c2679584bc778f32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_12ca4315e05c4f88e8c6b513381ac1e2bfabc1f51bbe01408c86ec8b65b679b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ca4315e05c4f88e8c6b513381ac1e2bfabc1f51bbe01408c86ec8b65b679b6->enter($__internal_12ca4315e05c4f88e8c6b513381ac1e2bfabc1f51bbe01408c86ec8b65b679b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ca4315e05c4f88e8c6b513381ac1e2bfabc1f51bbe01408c86ec8b65b679b6->leave($__internal_12ca4315e05c4f88e8c6b513381ac1e2bfabc1f51bbe01408c86ec8b65b679b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03c658b4f1d297bf01b3a728cff3fee340762ed7f803d4c5f044cbed67226de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c658b4f1d297bf01b3a728cff3fee340762ed7f803d4c5f044cbed67226de6->enter($__internal_03c658b4f1d297bf01b3a728cff3fee340762ed7f803d4c5f044cbed67226de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_03c658b4f1d297bf01b3a728cff3fee340762ed7f803d4c5f044cbed67226de6->leave($__internal_03c658b4f1d297bf01b3a728cff3fee340762ed7f803d4c5f044cbed67226de6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2ebaf8664bef6e3a27fbf2d755c70b95372a05b79773752973938c3f3b8eaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ebaf8664bef6e3a27fbf2d755c70b95372a05b79773752973938c3f3b8eaae->enter($__internal_f2ebaf8664bef6e3a27fbf2d755c70b95372a05b79773752973938c3f3b8eaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f2ebaf8664bef6e3a27fbf2d755c70b95372a05b79773752973938c3f3b8eaae->leave($__internal_f2ebaf8664bef6e3a27fbf2d755c70b95372a05b79773752973938c3f3b8eaae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
