<?php

/* role/user.html.twig */
class __TwigTemplate_d6bc951e557a9d16dac33ee18f5cd47c2ed190c91951b3d28c9de347dfaa91c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "role/user.html.twig", 1);
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
        $__internal_0bf683d59230d6f77e7c3b9d5de7530565cb6fbf0040f55ec97e86a52d732fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf683d59230d6f77e7c3b9d5de7530565cb6fbf0040f55ec97e86a52d732fcb->enter($__internal_0bf683d59230d6f77e7c3b9d5de7530565cb6fbf0040f55ec97e86a52d732fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf683d59230d6f77e7c3b9d5de7530565cb6fbf0040f55ec97e86a52d732fcb->leave($__internal_0bf683d59230d6f77e7c3b9d5de7530565cb6fbf0040f55ec97e86a52d732fcb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_99200bea35dbdb9d5edd377eb58f28a306d280e52661a33615e18892a1f65dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99200bea35dbdb9d5edd377eb58f28a306d280e52661a33615e18892a1f65dfc->enter($__internal_99200bea35dbdb9d5edd377eb58f28a306d280e52661a33615e18892a1f65dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "User compte!";
        
        $__internal_99200bea35dbdb9d5edd377eb58f28a306d280e52661a33615e18892a1f65dfc->leave($__internal_99200bea35dbdb9d5edd377eb58f28a306d280e52661a33615e18892a1f65dfc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df538230fd162c67eceecfd962394e9ad4086e9ec056ccc479e2105e1bff9651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df538230fd162c67eceecfd962394e9ad4086e9ec056ccc479e2105e1bff9651->enter($__internal_df538230fd162c67eceecfd962394e9ad4086e9ec056ccc479e2105e1bff9651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "\tBonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_df538230fd162c67eceecfd962394e9ad4086e9ec056ccc479e2105e1bff9651->leave($__internal_df538230fd162c67eceecfd962394e9ad4086e9ec056ccc479e2105e1bff9651_prof);

    }

    public function getTemplateName()
    {
        return "role/user.html.twig";
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
{% endblock %}", "role/user.html.twig", "E:\\wamp\\www\\user\\app\\Resources\\views\\role\\user.html.twig");
    }
}
