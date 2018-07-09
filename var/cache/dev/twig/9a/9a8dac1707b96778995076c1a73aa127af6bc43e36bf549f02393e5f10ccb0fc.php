<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9586abd0d5251f8d6e2a2a1cf069184f0969e76d20cd724d2d36c13a5a3bd61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_daeabe5d33da2a8d1341038f7cd424b70bf20d623653e5fbbbd2f7d05f9f6d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daeabe5d33da2a8d1341038f7cd424b70bf20d623653e5fbbbd2f7d05f9f6d1e->enter($__internal_daeabe5d33da2a8d1341038f7cd424b70bf20d623653e5fbbbd2f7d05f9f6d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daeabe5d33da2a8d1341038f7cd424b70bf20d623653e5fbbbd2f7d05f9f6d1e->leave($__internal_daeabe5d33da2a8d1341038f7cd424b70bf20d623653e5fbbbd2f7d05f9f6d1e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6faa5cd7278995918ea8998275aaba59f5ce7b294c3140a41c0164075ce7e0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6faa5cd7278995918ea8998275aaba59f5ce7b294c3140a41c0164075ce7e0d5->enter($__internal_6faa5cd7278995918ea8998275aaba59f5ce7b294c3140a41c0164075ce7e0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6faa5cd7278995918ea8998275aaba59f5ce7b294c3140a41c0164075ce7e0d5->leave($__internal_6faa5cd7278995918ea8998275aaba59f5ce7b294c3140a41c0164075ce7e0d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dee65a8639ff8ba4201c72c79fe4b686445115ae9790459b8f8d3037679fd217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee65a8639ff8ba4201c72c79fe4b686445115ae9790459b8f8d3037679fd217->enter($__internal_dee65a8639ff8ba4201c72c79fe4b686445115ae9790459b8f8d3037679fd217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dee65a8639ff8ba4201c72c79fe4b686445115ae9790459b8f8d3037679fd217->leave($__internal_dee65a8639ff8ba4201c72c79fe4b686445115ae9790459b8f8d3037679fd217_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5064a4cc39132dd76963d32b880b6b9f4fb8d79c1aa5129f04703958c09870a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5064a4cc39132dd76963d32b880b6b9f4fb8d79c1aa5129f04703958c09870a5->enter($__internal_5064a4cc39132dd76963d32b880b6b9f4fb8d79c1aa5129f04703958c09870a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5064a4cc39132dd76963d32b880b6b9f4fb8d79c1aa5129f04703958c09870a5->leave($__internal_5064a4cc39132dd76963d32b880b6b9f4fb8d79c1aa5129f04703958c09870a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "E:\\wamp\\www\\user\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
