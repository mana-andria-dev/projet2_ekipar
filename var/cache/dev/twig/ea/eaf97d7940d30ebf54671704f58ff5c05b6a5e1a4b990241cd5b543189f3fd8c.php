<?php

/* role/admin.html.twig */
class __TwigTemplate_a5c4d5fd668fb1362e6304ad4d6dde91d42d9adbc086945b5926b7ee1aa4a2b3 extends Twig_Template
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
        $__internal_2cc8aa47e72a53b3adb4685d5725b5be97060f1891645be145b1b0663f22188f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc8aa47e72a53b3adb4685d5725b5be97060f1891645be145b1b0663f22188f->enter($__internal_2cc8aa47e72a53b3adb4685d5725b5be97060f1891645be145b1b0663f22188f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "role/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc8aa47e72a53b3adb4685d5725b5be97060f1891645be145b1b0663f22188f->leave($__internal_2cc8aa47e72a53b3adb4685d5725b5be97060f1891645be145b1b0663f22188f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2783fb2be571af27480ca26eff0bb4413e77e9c6fe6ce40e09871dc70df39b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2783fb2be571af27480ca26eff0bb4413e77e9c6fe6ce40e09871dc70df39b4->enter($__internal_c2783fb2be571af27480ca26eff0bb4413e77e9c6fe6ce40e09871dc70df39b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin compte!";
        
        $__internal_c2783fb2be571af27480ca26eff0bb4413e77e9c6fe6ce40e09871dc70df39b4->leave($__internal_c2783fb2be571af27480ca26eff0bb4413e77e9c6fe6ce40e09871dc70df39b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02c11790c1369d2ebd1debc06e090c0b022f478fd8514825b58b55bac235b69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c11790c1369d2ebd1debc06e090c0b022f478fd8514825b58b55bac235b69a->enter($__internal_02c11790c1369d2ebd1debc06e090c0b022f478fd8514825b58b55bac235b69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 5
            echo "\tBonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_02c11790c1369d2ebd1debc06e090c0b022f478fd8514825b58b55bac235b69a->leave($__internal_02c11790c1369d2ebd1debc06e090c0b022f478fd8514825b58b55bac235b69a_prof);

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
\tBonjour {{ app.user.username }}
\t{% endif %}
{% endblock %}", "role/admin.html.twig", "E:\\wamp\\www\\user\\app\\Resources\\views\\role\\admin.html.twig");
    }
}
