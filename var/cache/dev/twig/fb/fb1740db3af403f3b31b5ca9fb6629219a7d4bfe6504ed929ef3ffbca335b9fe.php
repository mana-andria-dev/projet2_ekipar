<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2c94f72b2f101e62668f4e68c218f0115b8c02500f600debaf31051290041c5e extends Twig_Template
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
        $__internal_cd749f9efc9131ed805f6529c5b628e7632360efde4a9f7b2ada97ff565f68fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd749f9efc9131ed805f6529c5b628e7632360efde4a9f7b2ada97ff565f68fb->enter($__internal_cd749f9efc9131ed805f6529c5b628e7632360efde4a9f7b2ada97ff565f68fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd749f9efc9131ed805f6529c5b628e7632360efde4a9f7b2ada97ff565f68fb->leave($__internal_cd749f9efc9131ed805f6529c5b628e7632360efde4a9f7b2ada97ff565f68fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_df732b578a47091115dd2ebb31f9676481853128d303108227ecc7f118756fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df732b578a47091115dd2ebb31f9676481853128d303108227ecc7f118756fd1->enter($__internal_df732b578a47091115dd2ebb31f9676481853128d303108227ecc7f118756fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df732b578a47091115dd2ebb31f9676481853128d303108227ecc7f118756fd1->leave($__internal_df732b578a47091115dd2ebb31f9676481853128d303108227ecc7f118756fd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_806b2683f12fbe05e8afab642930519fcbde5f9f68f4f712b7f633d7a74344be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806b2683f12fbe05e8afab642930519fcbde5f9f68f4f712b7f633d7a74344be->enter($__internal_806b2683f12fbe05e8afab642930519fcbde5f9f68f4f712b7f633d7a74344be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_806b2683f12fbe05e8afab642930519fcbde5f9f68f4f712b7f633d7a74344be->leave($__internal_806b2683f12fbe05e8afab642930519fcbde5f9f68f4f712b7f633d7a74344be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f21741f99da31bf7f5f2e288ad74daccbf97f050c9896ada65a510b2458d4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f21741f99da31bf7f5f2e288ad74daccbf97f050c9896ada65a510b2458d4f1->enter($__internal_1f21741f99da31bf7f5f2e288ad74daccbf97f050c9896ada65a510b2458d4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f21741f99da31bf7f5f2e288ad74daccbf97f050c9896ada65a510b2458d4f1->leave($__internal_1f21741f99da31bf7f5f2e288ad74daccbf97f050c9896ada65a510b2458d4f1_prof);

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
