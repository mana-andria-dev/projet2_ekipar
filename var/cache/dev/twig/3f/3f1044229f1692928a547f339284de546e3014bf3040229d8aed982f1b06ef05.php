<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c13179449d30ccbeb79efafa1872cc8cd6d6772195ff9d5a7b5c84cafa82ce5b extends Twig_Template
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
        $__internal_f046f59c9b02dc176159fb631246be2cabf3b759ec2c6a18b054c4d24e957f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f046f59c9b02dc176159fb631246be2cabf3b759ec2c6a18b054c4d24e957f17->enter($__internal_f046f59c9b02dc176159fb631246be2cabf3b759ec2c6a18b054c4d24e957f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f046f59c9b02dc176159fb631246be2cabf3b759ec2c6a18b054c4d24e957f17->leave($__internal_f046f59c9b02dc176159fb631246be2cabf3b759ec2c6a18b054c4d24e957f17_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b6b3d022faed1cf88fa8b13e59b67111e55c8a737c0a2f40bd6c1e44e8b5cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6b3d022faed1cf88fa8b13e59b67111e55c8a737c0a2f40bd6c1e44e8b5cab->enter($__internal_6b6b3d022faed1cf88fa8b13e59b67111e55c8a737c0a2f40bd6c1e44e8b5cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b6b3d022faed1cf88fa8b13e59b67111e55c8a737c0a2f40bd6c1e44e8b5cab->leave($__internal_6b6b3d022faed1cf88fa8b13e59b67111e55c8a737c0a2f40bd6c1e44e8b5cab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e66783b112fb6105f869ede2172003b40c97d502a2c30d774153a7081b0b2ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66783b112fb6105f869ede2172003b40c97d502a2c30d774153a7081b0b2ac4->enter($__internal_e66783b112fb6105f869ede2172003b40c97d502a2c30d774153a7081b0b2ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e66783b112fb6105f869ede2172003b40c97d502a2c30d774153a7081b0b2ac4->leave($__internal_e66783b112fb6105f869ede2172003b40c97d502a2c30d774153a7081b0b2ac4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c058d9e4c58f691af39c47a415e0576aff69b55d95aabc6be9790970aa85c42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c058d9e4c58f691af39c47a415e0576aff69b55d95aabc6be9790970aa85c42e->enter($__internal_c058d9e4c58f691af39c47a415e0576aff69b55d95aabc6be9790970aa85c42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c058d9e4c58f691af39c47a415e0576aff69b55d95aabc6be9790970aa85c42e->leave($__internal_c058d9e4c58f691af39c47a415e0576aff69b55d95aabc6be9790970aa85c42e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
