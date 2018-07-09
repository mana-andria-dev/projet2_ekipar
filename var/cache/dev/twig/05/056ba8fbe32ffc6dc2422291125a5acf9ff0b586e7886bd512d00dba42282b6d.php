<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ce607d4465e0b62eff43fb47edf23d3d1a0d2c16137fe9444c9bc7ead4342954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e816e56ff4ff707dfa73498f9089e83eb1f68d9ad070b8071c416e135fae76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e816e56ff4ff707dfa73498f9089e83eb1f68d9ad070b8071c416e135fae76b->enter($__internal_7e816e56ff4ff707dfa73498f9089e83eb1f68d9ad070b8071c416e135fae76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e816e56ff4ff707dfa73498f9089e83eb1f68d9ad070b8071c416e135fae76b->leave($__internal_7e816e56ff4ff707dfa73498f9089e83eb1f68d9ad070b8071c416e135fae76b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6203cf82dce847a4d5ad79c48fae2b6c3bee0c43dbde30a88e5e22f4b45498d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6203cf82dce847a4d5ad79c48fae2b6c3bee0c43dbde30a88e5e22f4b45498d4->enter($__internal_6203cf82dce847a4d5ad79c48fae2b6c3bee0c43dbde30a88e5e22f4b45498d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6203cf82dce847a4d5ad79c48fae2b6c3bee0c43dbde30a88e5e22f4b45498d4->leave($__internal_6203cf82dce847a4d5ad79c48fae2b6c3bee0c43dbde30a88e5e22f4b45498d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be497594bf1ab24dbc66b87b098767ad86410cfecb83c239f98ee0bd7f16eed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be497594bf1ab24dbc66b87b098767ad86410cfecb83c239f98ee0bd7f16eed6->enter($__internal_be497594bf1ab24dbc66b87b098767ad86410cfecb83c239f98ee0bd7f16eed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be497594bf1ab24dbc66b87b098767ad86410cfecb83c239f98ee0bd7f16eed6->leave($__internal_be497594bf1ab24dbc66b87b098767ad86410cfecb83c239f98ee0bd7f16eed6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2fa66781c2c4c7f8fad223cd1aad4dac4c4ced2d7f61a526e39da66cc76921b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fa66781c2c4c7f8fad223cd1aad4dac4c4ced2d7f61a526e39da66cc76921b->enter($__internal_a2fa66781c2c4c7f8fad223cd1aad4dac4c4ced2d7f61a526e39da66cc76921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2fa66781c2c4c7f8fad223cd1aad4dac4c4ced2d7f61a526e39da66cc76921b->leave($__internal_a2fa66781c2c4c7f8fad223cd1aad4dac4c4ced2d7f61a526e39da66cc76921b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
