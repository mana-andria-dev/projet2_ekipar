<?php

/* role/admin.html.twig */
class __TwigTemplate_22af40df09e22da0cdde3923be89a3b8409f1f7c7fd7362ca5ad7a10de521b5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "role/admin.html.twig", 1);
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
        $__internal_44edb92c65cb30ab1ff98cdaf6cc7628c34801178178dc8497aa46eaf0bd8716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44edb92c65cb30ab1ff98cdaf6cc7628c34801178178dc8497aa46eaf0bd8716->enter($__internal_44edb92c65cb30ab1ff98cdaf6cc7628c34801178178dc8497aa46eaf0bd8716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44edb92c65cb30ab1ff98cdaf6cc7628c34801178178dc8497aa46eaf0bd8716->leave($__internal_44edb92c65cb30ab1ff98cdaf6cc7628c34801178178dc8497aa46eaf0bd8716_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddef72410e9fcbf9983f14048bbaeee6c1d4e7f5cd34c2a4a172d170014a9edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddef72410e9fcbf9983f14048bbaeee6c1d4e7f5cd34c2a4a172d170014a9edf->enter($__internal_ddef72410e9fcbf9983f14048bbaeee6c1d4e7f5cd34c2a4a172d170014a9edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin compte!";
        
        $__internal_ddef72410e9fcbf9983f14048bbaeee6c1d4e7f5cd34c2a4a172d170014a9edf->leave($__internal_ddef72410e9fcbf9983f14048bbaeee6c1d4e7f5cd34c2a4a172d170014a9edf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9847d8768beb9b5405f2df8c2dcf9ed22acebc453cf3c540e065c4a1ffaa65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9847d8768beb9b5405f2df8c2dcf9ed22acebc453cf3c540e065c4a1ffaa65c->enter($__internal_c9847d8768beb9b5405f2df8c2dcf9ed22acebc453cf3c540e065c4a1ffaa65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "\tBonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ", vous etes un admin, super!!
\t";
        }
        
        $__internal_c9847d8768beb9b5405f2df8c2dcf9ed22acebc453cf3c540e065c4a1ffaa65c->leave($__internal_c9847d8768beb9b5405f2df8c2dcf9ed22acebc453cf3c540e065c4a1ffaa65c_prof);

    }

    public function getTemplateName()
    {
        return "role/admin.html.twig";
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
{% block title %}Admin compte!{% endblock %}
{% block body %}
\t{% if app.user %}
\tBonjour {{ app.user.username }}, vous etes un admin, super!!
\t{% endif %}
{% endblock %}", "role/admin.html.twig", "E:\\wamp\\www\\user\\app\\Resources\\views\\role\\admin.html.twig");
    }
}
