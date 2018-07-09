<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_2c6ae2e0beeda06ada88708f8ea4d19009b0d677c72118286a1ea7e66204e342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_18a162a5eb957b63dd60e4e0e1ff149a0c6135558c16f228b3bcc58a72204243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a162a5eb957b63dd60e4e0e1ff149a0c6135558c16f228b3bcc58a72204243->enter($__internal_18a162a5eb957b63dd60e4e0e1ff149a0c6135558c16f228b3bcc58a72204243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a162a5eb957b63dd60e4e0e1ff149a0c6135558c16f228b3bcc58a72204243->leave($__internal_18a162a5eb957b63dd60e4e0e1ff149a0c6135558c16f228b3bcc58a72204243_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10a8f608b2fc97453d3be0fd40da7c187e01efce609b5bc064a2317f7011209b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a8f608b2fc97453d3be0fd40da7c187e01efce609b5bc064a2317f7011209b->enter($__internal_10a8f608b2fc97453d3be0fd40da7c187e01efce609b5bc064a2317f7011209b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_10a8f608b2fc97453d3be0fd40da7c187e01efce609b5bc064a2317f7011209b->leave($__internal_10a8f608b2fc97453d3be0fd40da7c187e01efce609b5bc064a2317f7011209b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "E:\\wamp\\www\\user\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
