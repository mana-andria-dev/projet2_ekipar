<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_54cdc4ebd7177de63971ad235e7149ec5bac60cfa5377eb1262a46c67d889d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_dd615d6ac22b79ba682f29aaa3fad6196d411ac4c301c624753d5dee190d46a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd615d6ac22b79ba682f29aaa3fad6196d411ac4c301c624753d5dee190d46a2->enter($__internal_dd615d6ac22b79ba682f29aaa3fad6196d411ac4c301c624753d5dee190d46a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd615d6ac22b79ba682f29aaa3fad6196d411ac4c301c624753d5dee190d46a2->leave($__internal_dd615d6ac22b79ba682f29aaa3fad6196d411ac4c301c624753d5dee190d46a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fa77c933e595b8630461a128c93b4c673669a8bdeb11b515b50fd8a34e63cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa77c933e595b8630461a128c93b4c673669a8bdeb11b515b50fd8a34e63cd9->enter($__internal_4fa77c933e595b8630461a128c93b4c673669a8bdeb11b515b50fd8a34e63cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4fa77c933e595b8630461a128c93b4c673669a8bdeb11b515b50fd8a34e63cd9->leave($__internal_4fa77c933e595b8630461a128c93b4c673669a8bdeb11b515b50fd8a34e63cd9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
