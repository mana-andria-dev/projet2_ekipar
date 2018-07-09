<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_69873e4a5ea018befbf16f05b1ec732128f609c53f1082a2bbdeac1170fb627c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_355d3cb1cb9d7dd1ebdee7605337b490ac5e35fec21e70fcec907ff9724b1d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355d3cb1cb9d7dd1ebdee7605337b490ac5e35fec21e70fcec907ff9724b1d5e->enter($__internal_355d3cb1cb9d7dd1ebdee7605337b490ac5e35fec21e70fcec907ff9724b1d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_355d3cb1cb9d7dd1ebdee7605337b490ac5e35fec21e70fcec907ff9724b1d5e->leave($__internal_355d3cb1cb9d7dd1ebdee7605337b490ac5e35fec21e70fcec907ff9724b1d5e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e230956fe8543b72bf96eb9a41f1d391d3f9448946f8221648fbc05a03533702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e230956fe8543b72bf96eb9a41f1d391d3f9448946f8221648fbc05a03533702->enter($__internal_e230956fe8543b72bf96eb9a41f1d391d3f9448946f8221648fbc05a03533702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e230956fe8543b72bf96eb9a41f1d391d3f9448946f8221648fbc05a03533702->leave($__internal_e230956fe8543b72bf96eb9a41f1d391d3f9448946f8221648fbc05a03533702_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
