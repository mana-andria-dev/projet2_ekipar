<?php

/* AppBundle:Registration:email.txt.twig */
class __TwigTemplate_67515a4f1fc1a9c2e271ada6b730fcc6f812da2e0cd085f85bcac6f5a08d6c71 extends Twig_Template
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
        $__internal_06dca5763698e267713389a383ef4d882bad1e79e153ba65391895d6f839e58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dca5763698e267713389a383ef4d882bad1e79e153ba65391895d6f839e58f->enter($__internal_06dca5763698e267713389a383ef4d882bad1e79e153ba65391895d6f839e58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_06dca5763698e267713389a383ef4d882bad1e79e153ba65391895d6f839e58f->leave($__internal_06dca5763698e267713389a383ef4d882bad1e79e153ba65391895d6f839e58f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f8a4001febe92f914d9171048d7e3519120583b69dfe618250f9de64d48e465b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a4001febe92f914d9171048d7e3519120583b69dfe618250f9de64d48e465b->enter($__internal_f8a4001febe92f914d9171048d7e3519120583b69dfe618250f9de64d48e465b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_f8a4001febe92f914d9171048d7e3519120583b69dfe618250f9de64d48e465b->leave($__internal_f8a4001febe92f914d9171048d7e3519120583b69dfe618250f9de64d48e465b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6639b22f3c21fa211b67abdc057fcb990e1b82db64e4f2e37227498c5bed5841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6639b22f3c21fa211b67abdc057fcb990e1b82db64e4f2e37227498c5bed5841->enter($__internal_6639b22f3c21fa211b67abdc057fcb990e1b82db64e4f2e37227498c5bed5841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6639b22f3c21fa211b67abdc057fcb990e1b82db64e4f2e37227498c5bed5841->leave($__internal_6639b22f3c21fa211b67abdc057fcb990e1b82db64e4f2e37227498c5bed5841_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_53950922d79bd701151c948c287ea9b1658bc96e81a49af1aa93905a8d59c63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53950922d79bd701151c948c287ea9b1658bc96e81a49af1aa93905a8d59c63f->enter($__internal_53950922d79bd701151c948c287ea9b1658bc96e81a49af1aa93905a8d59c63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_53950922d79bd701151c948c287ea9b1658bc96e81a49af1aa93905a8d59c63f->leave($__internal_53950922d79bd701151c948c287ea9b1658bc96e81a49af1aa93905a8d59c63f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "AppBundle:Registration:email.txt.twig", "E:\\wamp\\www\\user\\src\\AppBundle/Resources/views/Registration/email.txt.twig");
    }
}
