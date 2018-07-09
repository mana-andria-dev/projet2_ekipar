<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_f2493d59ee503c2016c3a92faa4a9ac44811069393dd4ba7019fb3c82be4483b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85fdbd98960eab92a26b636c21af02120119e285be4b85306bf4fa7ad53ae5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fdbd98960eab92a26b636c21af02120119e285be4b85306bf4fa7ad53ae5ad->enter($__internal_85fdbd98960eab92a26b636c21af02120119e285be4b85306bf4fa7ad53ae5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_85fdbd98960eab92a26b636c21af02120119e285be4b85306bf4fa7ad53ae5ad->leave($__internal_85fdbd98960eab92a26b636c21af02120119e285be4b85306bf4fa7ad53ae5ad_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4ae6ef84206fc39fb06b3a3371717c1f9a6d60af6fac1138c3f87ad1c2cf54a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae6ef84206fc39fb06b3a3371717c1f9a6d60af6fac1138c3f87ad1c2cf54a0->enter($__internal_4ae6ef84206fc39fb06b3a3371717c1f9a6d60af6fac1138c3f87ad1c2cf54a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4ae6ef84206fc39fb06b3a3371717c1f9a6d60af6fac1138c3f87ad1c2cf54a0->leave($__internal_4ae6ef84206fc39fb06b3a3371717c1f9a6d60af6fac1138c3f87ad1c2cf54a0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8a6f18f9bfd43e50fb3b944d01f43b55ec2c3136e2b139856b4dbbe367556947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6f18f9bfd43e50fb3b944d01f43b55ec2c3136e2b139856b4dbbe367556947->enter($__internal_8a6f18f9bfd43e50fb3b944d01f43b55ec2c3136e2b139856b4dbbe367556947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8a6f18f9bfd43e50fb3b944d01f43b55ec2c3136e2b139856b4dbbe367556947->leave($__internal_8a6f18f9bfd43e50fb3b944d01f43b55ec2c3136e2b139856b4dbbe367556947_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7595bf5e9fcce8b08bd8c403f6d2778ee57e5af6b57ed32bad0c01a217f13fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7595bf5e9fcce8b08bd8c403f6d2778ee57e5af6b57ed32bad0c01a217f13fbe->enter($__internal_7595bf5e9fcce8b08bd8c403f6d2778ee57e5af6b57ed32bad0c01a217f13fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7595bf5e9fcce8b08bd8c403f6d2778ee57e5af6b57ed32bad0c01a217f13fbe->leave($__internal_7595bf5e9fcce8b08bd8c403f6d2778ee57e5af6b57ed32bad0c01a217f13fbe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
