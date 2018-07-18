<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_159b133b9c2927b943c08148e74795f425871e06c9751a170a73887f5fac8247 extends Twig_Template
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
        $__internal_dbc04f46f9727be15931c383f1d4da4eab1db690c6ed5c4896c483216d9a8d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc04f46f9727be15931c383f1d4da4eab1db690c6ed5c4896c483216d9a8d80->enter($__internal_dbc04f46f9727be15931c383f1d4da4eab1db690c6ed5c4896c483216d9a8d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc04f46f9727be15931c383f1d4da4eab1db690c6ed5c4896c483216d9a8d80->leave($__internal_dbc04f46f9727be15931c383f1d4da4eab1db690c6ed5c4896c483216d9a8d80_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9f440e1eb1205264da7966e1825522e3f64ac857ab0c7f65869b35a496a9b8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f440e1eb1205264da7966e1825522e3f64ac857ab0c7f65869b35a496a9b8c6->enter($__internal_9f440e1eb1205264da7966e1825522e3f64ac857ab0c7f65869b35a496a9b8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f440e1eb1205264da7966e1825522e3f64ac857ab0c7f65869b35a496a9b8c6->leave($__internal_9f440e1eb1205264da7966e1825522e3f64ac857ab0c7f65869b35a496a9b8c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ab9431c3af9e6dfd225603d99373a7bee901ed2d515a2b03c7f869ed84716fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab9431c3af9e6dfd225603d99373a7bee901ed2d515a2b03c7f869ed84716fa->enter($__internal_5ab9431c3af9e6dfd225603d99373a7bee901ed2d515a2b03c7f869ed84716fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ab9431c3af9e6dfd225603d99373a7bee901ed2d515a2b03c7f869ed84716fa->leave($__internal_5ab9431c3af9e6dfd225603d99373a7bee901ed2d515a2b03c7f869ed84716fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6adb2a126e218d9334b8a44bddbdbfbc7685708c8ff72f5630f532b8d7d933d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adb2a126e218d9334b8a44bddbdbfbc7685708c8ff72f5630f532b8d7d933d9->enter($__internal_6adb2a126e218d9334b8a44bddbdbfbc7685708c8ff72f5630f532b8d7d933d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6adb2a126e218d9334b8a44bddbdbfbc7685708c8ff72f5630f532b8d7d933d9->leave($__internal_6adb2a126e218d9334b8a44bddbdbfbc7685708c8ff72f5630f532b8d7d933d9_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
