<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_8d2a857f318d4698bef80fb61bffa83632ce3b7b2eca2b384ba82aa42a713f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_5dfcf025ca886c62122b18cb7634de2022627a6761b769008eec221940e76b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfcf025ca886c62122b18cb7634de2022627a6761b769008eec221940e76b49->enter($__internal_5dfcf025ca886c62122b18cb7634de2022627a6761b769008eec221940e76b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dfcf025ca886c62122b18cb7634de2022627a6761b769008eec221940e76b49->leave($__internal_5dfcf025ca886c62122b18cb7634de2022627a6761b769008eec221940e76b49_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94409aeccd7dae671400d2ca54a9b6fba18027182f293002bbd8541ae40fa01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94409aeccd7dae671400d2ca54a9b6fba18027182f293002bbd8541ae40fa01b->enter($__internal_94409aeccd7dae671400d2ca54a9b6fba18027182f293002bbd8541ae40fa01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_94409aeccd7dae671400d2ca54a9b6fba18027182f293002bbd8541ae40fa01b->leave($__internal_94409aeccd7dae671400d2ca54a9b6fba18027182f293002bbd8541ae40fa01b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
