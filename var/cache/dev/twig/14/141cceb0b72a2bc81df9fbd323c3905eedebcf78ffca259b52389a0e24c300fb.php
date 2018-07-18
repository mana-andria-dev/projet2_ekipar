<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f688b8440b737315afa9379e47f0005c454324108db931c5645300b40627833f extends Twig_Template
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
        $__internal_cb78eca482931cf56e7c4750a3388f31546446a9d23986572a6f4bba3ac67a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb78eca482931cf56e7c4750a3388f31546446a9d23986572a6f4bba3ac67a8d->enter($__internal_cb78eca482931cf56e7c4750a3388f31546446a9d23986572a6f4bba3ac67a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb78eca482931cf56e7c4750a3388f31546446a9d23986572a6f4bba3ac67a8d->leave($__internal_cb78eca482931cf56e7c4750a3388f31546446a9d23986572a6f4bba3ac67a8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_734e9c94a391eabc1c8468dc67a09120e98d7c91fedf02567c2a2d3d4069f0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734e9c94a391eabc1c8468dc67a09120e98d7c91fedf02567c2a2d3d4069f0e7->enter($__internal_734e9c94a391eabc1c8468dc67a09120e98d7c91fedf02567c2a2d3d4069f0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_734e9c94a391eabc1c8468dc67a09120e98d7c91fedf02567c2a2d3d4069f0e7->leave($__internal_734e9c94a391eabc1c8468dc67a09120e98d7c91fedf02567c2a2d3d4069f0e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_689db1c7915fc39ef7899c221cf9ff76a9f1903dc77c7a15ccef20e8a971120a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689db1c7915fc39ef7899c221cf9ff76a9f1903dc77c7a15ccef20e8a971120a->enter($__internal_689db1c7915fc39ef7899c221cf9ff76a9f1903dc77c7a15ccef20e8a971120a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_689db1c7915fc39ef7899c221cf9ff76a9f1903dc77c7a15ccef20e8a971120a->leave($__internal_689db1c7915fc39ef7899c221cf9ff76a9f1903dc77c7a15ccef20e8a971120a_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
