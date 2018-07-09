<?php

/* :role:user.html.twig */
class __TwigTemplate_8dce51f63fc5f4d888115c8fbf79ff9673503876bc76d7775c9229c7d420a68a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":role:user.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c212813f587fe2f083215f416876ce9acf4f5cbd4978ed2e806e229650527f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c212813f587fe2f083215f416876ce9acf4f5cbd4978ed2e806e229650527f4->enter($__internal_3c212813f587fe2f083215f416876ce9acf4f5cbd4978ed2e806e229650527f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":role:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c212813f587fe2f083215f416876ce9acf4f5cbd4978ed2e806e229650527f4->leave($__internal_3c212813f587fe2f083215f416876ce9acf4f5cbd4978ed2e806e229650527f4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b335514381960c283243397c7778ac55e8cf12c4a5fa7962e79924da75811a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b335514381960c283243397c7778ac55e8cf12c4a5fa7962e79924da75811a4->enter($__internal_4b335514381960c283243397c7778ac55e8cf12c4a5fa7962e79924da75811a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User compte!";
        
        $__internal_4b335514381960c283243397c7778ac55e8cf12c4a5fa7962e79924da75811a4->leave($__internal_4b335514381960c283243397c7778ac55e8cf12c4a5fa7962e79924da75811a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_57ce9ce96bb99c6230ae2a951762215f6da9aa835beb67a9c0c7a095be63b30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ce9ce96bb99c6230ae2a951762215f6da9aa835beb67a9c0c7a095be63b30c->enter($__internal_57ce9ce96bb99c6230ae2a951762215f6da9aa835beb67a9c0c7a095be63b30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "\tBonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_57ce9ce96bb99c6230ae2a951762215f6da9aa835beb67a9c0c7a095be63b30c->leave($__internal_57ce9ce96bb99c6230ae2a951762215f6da9aa835beb67a9c0c7a095be63b30c_prof);

    }

    public function getTemplateName()
    {
        return ":role:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %}User compte!{% endblock %}
{% block body %}
\t{% if app.user %}
\tBonjour {{ app.user.username }}
\t{% endif %}
{% endblock %}", ":role:user.html.twig", "E:\\wamp\\www\\user\\app/Resources\\views/role/user.html.twig");
    }
}
