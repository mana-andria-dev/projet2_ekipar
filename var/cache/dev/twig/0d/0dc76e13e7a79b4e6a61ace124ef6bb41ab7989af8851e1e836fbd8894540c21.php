<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_c9b06a921dc1df77a17fb52e17a9af80e0fb4ed26020552fe911f17ed3675e82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0d5d0c0d8649b0edb69e138352b55c2b3fbdfe094115181ffca6c5490ecf992e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5d0c0d8649b0edb69e138352b55c2b3fbdfe094115181ffca6c5490ecf992e->enter($__internal_0d5d0c0d8649b0edb69e138352b55c2b3fbdfe094115181ffca6c5490ecf992e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d5d0c0d8649b0edb69e138352b55c2b3fbdfe094115181ffca6c5490ecf992e->leave($__internal_0d5d0c0d8649b0edb69e138352b55c2b3fbdfe094115181ffca6c5490ecf992e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0dfece51427bf4e0e18cfbf54eb50f0fed751a439b4cc19791ec4a39f261d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0dfece51427bf4e0e18cfbf54eb50f0fed751a439b4cc19791ec4a39f261d95->enter($__internal_a0dfece51427bf4e0e18cfbf54eb50f0fed751a439b4cc19791ec4a39f261d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a0dfece51427bf4e0e18cfbf54eb50f0fed751a439b4cc19791ec4a39f261d95->leave($__internal_a0dfece51427bf4e0e18cfbf54eb50f0fed751a439b4cc19791ec4a39f261d95_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/opt/lampp/htdocs/user/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
