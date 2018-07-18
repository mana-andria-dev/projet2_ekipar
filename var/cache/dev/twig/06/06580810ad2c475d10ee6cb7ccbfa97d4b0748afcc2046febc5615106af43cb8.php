<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_43f3cdf166a96cd0409ab8be79b552fd955baf2269c3814a02aac5e2ae9a6012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8597dd67195bac44863433ec7deb7b8cd8f91b4d6c7d9f1c9e08d7fbed3096f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8597dd67195bac44863433ec7deb7b8cd8f91b4d6c7d9f1c9e08d7fbed3096f->enter($__internal_a8597dd67195bac44863433ec7deb7b8cd8f91b4d6c7d9f1c9e08d7fbed3096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a8597dd67195bac44863433ec7deb7b8cd8f91b4d6c7d9f1c9e08d7fbed3096f->leave($__internal_a8597dd67195bac44863433ec7deb7b8cd8f91b4d6c7d9f1c9e08d7fbed3096f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/opt/lampp/htdocs/user/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
