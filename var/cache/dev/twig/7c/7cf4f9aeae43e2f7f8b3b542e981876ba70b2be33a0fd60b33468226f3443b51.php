<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_13c75e103edf78404aed892bb89e440e153fe1e09b0731318211dbaa52dc8c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_53d5c7e70ba47007db710a71ad73a5fc763b2c23e959071331685aba6ed0e9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d5c7e70ba47007db710a71ad73a5fc763b2c23e959071331685aba6ed0e9e6->enter($__internal_53d5c7e70ba47007db710a71ad73a5fc763b2c23e959071331685aba6ed0e9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53d5c7e70ba47007db710a71ad73a5fc763b2c23e959071331685aba6ed0e9e6->leave($__internal_53d5c7e70ba47007db710a71ad73a5fc763b2c23e959071331685aba6ed0e9e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0952e10cb5d1ae9f064c3376bf3ac879bff19069f250bc2edcf20efffa50e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0952e10cb5d1ae9f064c3376bf3ac879bff19069f250bc2edcf20efffa50e0e->enter($__internal_f0952e10cb5d1ae9f064c3376bf3ac879bff19069f250bc2edcf20efffa50e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f0952e10cb5d1ae9f064c3376bf3ac879bff19069f250bc2edcf20efffa50e0e->leave($__internal_f0952e10cb5d1ae9f064c3376bf3ac879bff19069f250bc2edcf20efffa50e0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a66d56ab4c3550e45f0b8de4f6a6bbd99f7492c73f4429cbf0b90d8d4cba1bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66d56ab4c3550e45f0b8de4f6a6bbd99f7492c73f4429cbf0b90d8d4cba1bb5->enter($__internal_a66d56ab4c3550e45f0b8de4f6a6bbd99f7492c73f4429cbf0b90d8d4cba1bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a66d56ab4c3550e45f0b8de4f6a6bbd99f7492c73f4429cbf0b90d8d4cba1bb5->leave($__internal_a66d56ab4c3550e45f0b8de4f6a6bbd99f7492c73f4429cbf0b90d8d4cba1bb5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ca31b8262b2c45eef818ac7d0567527754baf7c3125875b449a133557e7293c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca31b8262b2c45eef818ac7d0567527754baf7c3125875b449a133557e7293c->enter($__internal_4ca31b8262b2c45eef818ac7d0567527754baf7c3125875b449a133557e7293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4ca31b8262b2c45eef818ac7d0567527754baf7c3125875b449a133557e7293c->leave($__internal_4ca31b8262b2c45eef818ac7d0567527754baf7c3125875b449a133557e7293c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
